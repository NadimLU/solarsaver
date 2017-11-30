<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

    var $AddressArray;
    var $ReservationArray;
	public function __construct()
    {
        parent::__construct();
        $this->load->model('form_model');
	
		
    }


	
	public function index()
	{
     
        $data['title'] = "Solar Savers || Official Website";
        
        $data['VehicleData'] = $this->form_model->GetVehicleDetails();
        $myCustomArray = array();
                        
                        foreach($data['VehicleData'] as $result){
                            $vehicle_name = $result->vehicle_name;
                            
                            if(array_key_exists($vehicle_name, $myCustomArray)){
                                array_push($myCustomArray[$vehicle_name], (array) $result);
                            }else{
                                $myCustomArray[$vehicle_name] = array();
                                array_push($myCustomArray[$vehicle_name], (array) $result);
                            }
                        }


        $data['vehicledata'] = json_decode(json_encode($myCustomArray));
        $data['cartArray'] = json_decode($this->session->userdata('cart'));
        $this->load->view('client/form',$data);
			
		
    }
    public function FormData(){


        if(isset($_POST['submit'])){


            $address_one = $this->input->post('street_address');

            $country = $this->input->post('country');

            $zip = $this->input->post('zip');

            $first_name = $this->input->post('first_name');

            $last_name = $this->input->post('last_name');

            $company_name = $this->input->post('company_name');

            $email = $this->input->post('email');

            $area_code = $this->input->post('area_code');

            $phone = $this->input->post('phone_number');

            $service_date = $this->input->post('reservation_date');

            $service_time = $this->input->post('reservation_time');

            $fullPhoneNumber = $area_code."".$phone;

            $vehicle_id = $this->input->post('vehicle_name');

           

            

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
                'reservation_date' => $service_date,
                'reservation_time' => $service_time,
                'vehicle_id' => $vehicle_id


            );

            $this->session->set_userdata($AddressArray);
            $this->session->set_userdata($ReservationArray);
            $data['cartArray'] = json_decode($this->session->userdata('cart'));
            if($ReservationArray && $AddressArray != ''){
                redirect('Stripe/payment');
            }
            else{
                redirect('home');
            }
           
            //echo "<pre>"; print_r($ReservationArray);
            // echo "<pre>"; print_r($AddressArray);




            
        }
    }
    public function another_order(){

        $this->session->unset_userdata('profile_id');
        $this->session->unset_userdata('cart');
        $this->session->unset_userdata('reservation_id');
        $this->session->unset_userdata('order_id');
        

         $this->session->sess_destroy();

         redirect('form');
    }

	
	
}