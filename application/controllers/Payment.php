<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('order_model');
		
		
    }


	
	public function index()
	{
        
        require_once(APPPATH.'libraries/vendor/autoload.php');

        $amount = intval($_POST['grand_total']);
        # Replace these values. You probably want to start with your Sandbox credentials
        # to start: https://docs.connect.squareup.com/articles/using-sandbox/
        
        # The access token to use in all Connect API requests. Use your *sandbox* access
        # token if you're just testing things out.
        $access_token = 'sandbox-sq0atb-C3pIV-5DZnVGSUrGPbPv2w';
        
        # Helps ensure this code has been reached via form submission
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
          error_log("Received a non-POST request");
          echo "Request not allowed";
          http_response_code(405);
          return;
        }
        
        # Fail if the card form didn't send a value for `nonce` to the server
        $nonce = $_POST['nonce'];
        
       
       
          if (is_null($nonce)) {
          echo "Invalid card data";
          http_response_code(422);
          return;
        }
        
        \SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken($access_token);
        $locations_api = new \SquareConnect\Api\LocationsApi();
        
        try {
          $locations = $locations_api->listLocations();
          # We look for a location that can process payments
          $location = current(array_filter($locations->getLocations(), function($location) {
            $capabilities = $location->getCapabilities();
            return is_array($capabilities) &&
              in_array('CREDIT_CARD_PROCESSING', $capabilities);
          }));
        
        } catch (\SquareConnect\ApiException $e) {
          echo "Caught exception!<br/>";
          print_r("<strong>Response body:</strong><br/>");
          echo "<pre>"; var_dump($e->getResponseBody()); echo "</pre>";
          echo "<br/><strong>Response headers:</strong><br/>";
          echo "<pre>"; var_dump($e->getResponseHeaders()); echo "</pre>";
          exit(1);
        }
        
        $transactions_api = new \SquareConnect\Api\TransactionsApi();
        
        # To learn more about splitting transactions with additional recipients,
        # see the Transactions API documentation on our [developer site]
        # (https://docs.connect.squareup.com/payments/transactions/overview#mpt-overview).
        $request_body = array (
        
          "card_nonce" => $nonce,
        
          # Monetary amounts are specified in the smallest unit of the applicable currency.
          # This amount is in cents. It's also hard-coded for $1.00, which isn't very useful.
          "amount_money" => array (
            "amount" => $amount,
            "currency" => "USD"
          ),
        
          # Every payment you process with the SDK must have a unique idempotency key.
          # If you're unsure whether a particular payment succeeded, you can reattempt
          # it with the same idempotency key without worrying about double charging
          # the buyer.
          "idempotency_key" => uniqid()
        );
       
        // Profile 
        $address_one = $this->input->post('address_one');
        
                    $address_two= $this->input->post('address_two');
        
                    $city = $this->input->post('city');
        
                    $state = $this->input->post('state');
        
                    $zip = $this->input->post('zip');
        
                    $first_name = $this->input->post('first_name');
        
                    $last_name = $this->input->post('last_name');
        
                    $company_name = $this->input->post('company_name');
        
                    $email = $this->input->post('email');
        
                    $area_code = $this->input->post('area_code');
        
                    $phone = $this->input->post('phone_numner');
        
                    $service_date = $this->input->post('service_date');
        
                    $service_time = $this->input->post('service_time');

                    $vehicle_id = $this->input->post('vehicle_id');
        
                    //$fullPhoneNumber = $area_code+$phone;
        
                    $AddressArray = array(
        
                        'first_name' => $first_name,
                        'last_name' => $last_name,
                        'company'=> $company_name,
                        'email' => $email,
                        //'phone' => $fullPhoneNumber
        
        
                    );
        
                    $ReservationArray = array(
        
                        'street_address' => $address_one,
                        'street_address_line2' => $address_two,
                        'city' => $city,
                        'state' => $state,
                        'zip' => $zip,
                        'reservation_date' => $service_date,
                        'reservation_time' => $service_time,
                        'vehicle_id' => $vehicle_id
        
        
                    );
           
        
        
        # The SDK throws an exception if a Connect endpoint responds with anything besides
        # a 200-level HTTP code. This block catches any exceptions that occur from the request.
        try {
          $result = $transactions_api->charge($location->getId(), $request_body);
            // echo "<pre>";
            // print($result);
            // echo "</pre>";
            // echo "<pre>"; print_r($ReservationArray);
            // echo "<pre>"; print_r($AddressArray);
            if($result){
                $transaction = $result->getTransaction();
                $transactionID = $transaction["tenders"][0]["transaction_id"];
                $transactionID;
                $cartArray = json_decode($this->session->userdata('cart'));
                $this->order_model->insertData($ReservationArray,$AddressArray,$cartArray,$transactionID); 
            }
          

          
        } catch (\SquareConnect\ApiException $e) {
          echo "Caught exception!<br/>";
          print_r("<strong>Response body:</strong><br/>");
          echo "<pre>"; var_dump($e->getResponseBody()); echo "</pre>";
          echo "<br/><strong>Response headers:</strong><br/>";
          echo "<pre>"; var_dump($e->getResponseHeaders()); echo "</pre>";
        }


	
		
		
		
	}
	
	
	
}
	
