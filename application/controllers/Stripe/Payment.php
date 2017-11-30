<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'libraries/Stripe/lib/Stripe.php');

class Payment extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        //$this->load->model('stripe/paymentmodel', 'payment');
       
        $this->load->model('order_model');
    }
	
	public function index(){
       
        $first_name = $this->session->userdata('first_name');
        $last_name = $this->session->userdata('last_name');
        $company_name = $this->session->userdata('company');
        $email = $this->session->userdata('email');
        $fullPhoneNumber = $this->session->userdata('phone');


        $address_one = $this->session->userdata('street_address');
        $country = $this->session->userdata('country');
        $zip = $this->session->userdata('zip');
        
        $vehicle_id = $this->session->userdata('vehicle_id');
        $reservation_date = $this->session->userdata('reservation_date');
        $reservation_time = $this->session->userdata('reservation_time');
       

        $AddressArray = array(
            
                            'first_name' => $first_name,
                            'last_name' => $last_name,
                            'company'=> $company_name,
                            'email' => $email,
                            'phone' => $fullPhoneNumber
            
            
        );
            
        $ReservationArray = array(
            
                            'street_address' => $address_one,
                            'country' => $country,
                            'zip' => $zip,
                            'vehicle_id' => $vehicle_id,
                            'reservation_date' => $reservation_date,
                            'reservation_time' => $reservation_time
            
            
        );

        // echo "<pre>"; print_r( $AddressArray); 
        //echo "<pre>"; print_r( $ReservationArray); 

        $this->session->set_userdata($AddressArray);
        $this->session->set_userdata($ReservationArray);

        $this->load->view('Stripe/index');
        $this->session->set_userdata('reference_no',Payment::generateRandomString());
        
    }
    public function generateRandomString($length = 14) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
	
	public function process(){

        $first_name = $this->session->userdata('first_name');
        $last_name = $this->session->userdata('last_name');
        $company_name = $this->session->userdata('company');
        $email = $this->session->userdata('email');
        $fullPhoneNumber = $this->session->userdata('phone');


        $address_one = $this->session->userdata('street_address');
        $country = $this->session->userdata('country');
        $zip = $this->session->userdata('zip');
        $vehicle_id = $this->session->userdata('vehicle_id');
        $reservation_date = $this->session->userdata('reservation_date');
        $reservation_time = $this->session->userdata('reservation_time');
    
       

        $AddressArray = array(
            
                            'first_name' => $first_name,
                            'last_name' => $last_name,
                            'company'=> $company_name,
                            'email' => $email,
                            'phone' => $fullPhoneNumber
            
            
        );
            
        $ReservationArray = array(
            
                            'street_address' => $address_one,
                            'country' => $country,
                            'vehicle_id' => $vehicle_id,
                            'zip' => $zip,
                            'reservation_date' => $reservation_date,
                            'reservation_time' => $reservation_time
            
            
        );
        //echo "<pre>"; print_r($ReservationArray);
       $this->session->set_userdata('email', $email);
        
        $reference_no = $this->session->userdata('reference_no');
        $cartArray = json_decode($this->session->userdata('cart'));
        $grand_total = 0; 
        foreach($cartArray as $item) {
            
                        $item_price = number_format(($item->price * $item->qnty), 2);
                        $grand_total += $item_price;
        }
       
        $grand_total = $grand_total * 100;
		try {
            Stripe::setApiKey('sk_test_yBKGsvWqh32oRo5L5kr7uOoj');
            $charge = Stripe_Charge::create(array(
                        "amount" => $grand_total,
                        "currency" => "USD",
                        "card" => $this->input->post('access_token'),
                        "description" => $reference_no
            ));
            // this line will be reached if no error was thrown above
            // $data = array(
            //     'payment_id' => $charge->id,
            //     'payment_status' => 'success',
            //     'total' => 150000,
            //     'description' => 'Stripe Payment',
            //     'first_name' => 'Tester',
            //     'last_name' => 'One',
            //     'address' => '#1200',
            //     'zip' => '160059',
            //     'city' => 'Amritsar',
            //     'created_on' => date('Y-m-d H:i:s'),
            //     'updated_on' => date('Y-m-d H:i:s')
            // );
           // $response = $this->payment->insert($data);
           $response = $this->order_model->insertData($ReservationArray,$AddressArray,$cartArray,$charge,$reference_no);
        //     //$response = TRUE;
            
            if ($response) {
                echo json_encode(array('status' => 200, 'success' => 'Payment successfully completed.'));
                //$this->load->view('Stripe/success');
                exit();
            } else {
                echo json_encode(array('status' => 500, 'error' => 'Something went wrong. Try after some time.'));
                exit();
            }
        } catch (Stripe_CardError $e) {
            echo json_encode(array('status' => 500, 'error' => STRIPE_FAILED));
            exit();
        } catch (Stripe_InvalidRequestError $e) {
            // Invalid parameters were supplied to Stripe's API
            echo json_encode(array('status' => 500, 'error' => $e->getMessage()));
            exit();
        } catch (Stripe_AuthenticationError $e) {
            // Authentication with Stripe's API failed
            echo json_encode(array('status' => 500, 'error' => AUTHENTICATION_STRIPE_FAILED));
            exit();
        } catch (Stripe_ApiConnectionError $e) {
            // Network communication with Stripe failed
            echo json_encode(array('status' => 500, 'error' => NETWORK_STRIPE_FAILED));
            exit();
        } catch (Stripe_Error $e) {
            // Display a very generic error to the user, and maybe send
            echo json_encode(array('status' => 500, 'error' => STRIPE_FAILED));
            exit();
        } catch (Exception $e) {
            // Something else happened, completely unrelated to Stripe
            echo json_encode(array('status' => 500, 'error' => STRIPE_FAILED));
            exit();
        }
	}
	public function success(){
        
        $profile_id = $this->session->userdata('profile_id');
        $reservation_id = $this->session->userdata('reservation_id');
        $order_id = $this->session->userdata('order_id');
        $order_master_id =  $order_id;
        $email = $this->session->userdata('email');


        $data['customer_details'] = $this->order_model->getCustomeretails($order_id,$order_id,$profile_id);
        //$data['orde_details'] = $this->order_model->getUserOrders($profile_id);
        $data['order_details'] = $this->order_model->getOrderDetails($order_id,$order_master_id,$profile_id);
        //echo "<pre>"; print_r($data['order_details']);
         //echo "<pre>"; print_r($data['customer_details']);
       $this->load->view('Stripe/success',$data);
       
        //   $data = array(
            
        //            'userName'=> 'Nadim'
            
        // );
        // $this->load->library('my_phpmailer');
        // $mail = new PHPMailer();
        // $mail->IsSMTP(); // we are going to use SMTP
        // $mail->Mailtype = 'html';
        // $mail->SMTPAuth   = true; // enabled SMTP authentication
        // $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        // $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
        // $mail->Port       = 465;                   // SMTP port to connect to GMail
        // $mail->Username   = "nadimcse.official@gmail.com";  // user email address
        // $mail->Password   = "abba1952";            // password in GMail
        // $mail->SetFrom('nadimcse.official@gmail.com', 'Nadim Haque');  //Who is sending the email
        // $mail->AddReplyTo("nadimcse.official@gmail.com","Firstname Lastname");  //email address that receives the response
        // $mail->Subject    = "Solarsaver";
        // $mail->Body      = $this->load->view('stripe/invoice',$data,TRUE);
        // $mail->AltBody    = "Plain text message";
        // $destino = $email; // Who is addressed the email to
        // $mail->AddAddress($destino, "solarsaver");

        // $mail->Send();

        
	}
}
