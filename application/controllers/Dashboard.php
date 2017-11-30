<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Access_model');
		$this->load->model('Form_model');
		$this->load->model('Contact_model');
		$this->load->model('Reservation_model');
		$this->load->model('Vehicle_model');
		$this->load->model('order_model');
		$this->load->library('image_lib');
		
		
		
    }


	/* Home Page Settings */
	public function index()
	{

		if($this->Login_model->is_admin_logged_in() )
		{
			
			
			$data['TotalMessage'] = $this->Contact_model->GetContactMessageDataNumber();
			$data['ListMessage'] = $this->Contact_model-> GetContactMessage();
			$data['TotalReservation'] = $this->Reservation_model-> CountReservation();
			$data['TotalClient'] = $this->Reservation_model-> CountClient();
			$data['countorders'] = $this->order_model->getOrdersCount();
			$data['getOrder'] = $this->order_model->getOrder();
			$admin_id = $this->session->userdata('current_admin_id');
			$query = $this->db->query("SELECT * FROM admin  WHERE admin_id='$admin_id'");
				$data['admin_avatar'] = $query->result();
				
			
			
			
			
		
			$data['title'] = "Welcome to Admin-Panel";

			$data['power'] = $this->session->userdata('session_power');
			
			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/home',$data);
			$this->load->view('dashboard/footer');

		}
		else{
			redirect('login/?logged_in_first');
		}
		
	}
	/* Home Page Settings */


	/* Reservation Page Settings */

	public function ReservationList(){
		
				
					$data['reservationlist'] = $this->Reservation_model->ListOfReservations();
					$data['title'] = "Reservation List";
					//echo "<pre>"; print_r($data['reservationlist']); exit;
					$data['countorders'] = $this->order_model->getOrdersCount();
					$data['getOrder'] = $this->order_model->getOrder();
					$admin_id = $this->session->userdata('current_admin_id');
					$query = $this->db->query("SELECT * FROM admin  WHERE admin_id='$admin_id'");
						$data['admin_avatar'] = $query->result();
						
			
					$this->load->view('dashboard/header',$data);
					$this->load->view('dashboard/reservation_list',$data);
					$this->load->view('dashboard/footer');
		
	}
	public function SingleReservationDetails($reservation_id,$profile_id){
		
				
					$data['reservationlist'] = $this->Reservation_model->ListOfReservations();
					$data['title'] = "";
					$data['countorders'] = $this->order_model->getOrdersCount();
					$data['getOrder'] = $this->order_model->getOrder();
					$admin_id = $this->session->userdata('current_admin_id');
					$query = $this->db->query("SELECT * FROM admin  WHERE admin_id='$admin_id'");
						$data['admin_avatar'] = $query->result();
						
					//echo "<pre>"; print_r($data['reservationlist']); exit;
			
					$this->load->view('dashboard/header',$data);
					//echo $reservation_id." ". $profile_id;
					$this->load->view('dashboard/reservation_list',$data);
					$this->load->view('dashboard/footer');
		
	}
	

	/* Reservation Page Settings */

	/* Vehicle form page */
	public function CreateVehicle(){

		//$data['reservationlist'] = $this->Reservation_model->ListOfReservations();
		$data['title'] = "Insert Vehicle Details";
		$data['parent'] = "Vehicle Management";
		$data['countorders'] = $this->order_model->getOrdersCount();
		$data['getOrder'] = $this->order_model->getOrder();
		$admin_id = $this->session->userdata('current_admin_id');
		$query = $this->db->query("SELECT * FROM admin  WHERE admin_id='$admin_id'");
			$data['admin_avatar'] = $query->result();
			
		//echo "<pre>"; print_r($data['reservationlist']); exit;

		$this->load->view('dashboard/header',$data);
		$this->load->view('dashboard/create_vehicle_form',$data);
		$this->load->view('dashboard/footer');


	}

	static function arrayCustomize($myArray,$vehicle_id){
		
		$countRow = count($myArray['service_name']);
		
		$customArray = array();
		
		for($counter=0; $counter<$countRow; $counter++){

			$customSingleArray = array(

					'service_name' => $myArray["service_name"][$counter],
					'price' => $myArray["price"][$counter],
					'service_quantity' => $myArray["service_quantity"][$counter],
					'vehicle_id' => $vehicle_id
		   );

			array_push($customArray, $customSingleArray);
		}
		
		return $customArray;
}



	public function VehicleCreateRequest(){

		if(isset($_POST['vehicle_create_request'])){

				$type = explode('.', $_FILES['vehicle_avatar']['name']);
					
				$type = $type[count($type)-1];
				
				$url = "uploads/images/avatar/".uniqid(rand()).".".$type;
				
				if(in_array($type, array('jpg','jpeg','png','JPG','JPGE','PNG') ) )
				{
					if(is_uploaded_file($_FILES['vehicle_avatar']['tmp_name']))
					{
						move_uploaded_file($_FILES['vehicle_avatar']['tmp_name'],$url);
					}
			
				}	
				
					
				$vehicle_name = $this->input->post('vehicle_name');
				
				$vehicle_model = $this->input->post('vehicle_model');

				$vehicle_year = $this->input->post('vehicle_year');

				$vehicle_make = $this->input->post('vehicle_make');

				$vehicle_alt = $this->input->post('vehicle_alt');

				


				$vehicle_avatar = $url;

				

				$VehicleDetailsArray = array(


					'vehicle_name' => $vehicle_name,

					'vehicle_model' => $vehicle_model,

					'vehicle_year' => $vehicle_year,

					'vehicle_make' => $vehicle_make,

					'vehicle_avatar' => $vehicle_avatar,

					'vehicle_alt' => $vehicle_alt,

					'vehicle_date_created_admin' =>  date('Y-m-d H:i:s')



				);

				 $service_name = $this->input->post('service_name');

					
				$service_price = $this->input->post('service_price');
	
				$service_quantity = $this->input->post('service_quantity');

				$ServiceArray = array(


					'service_name' => $service_name,
					'price' => $service_price,
					'service_quantity' => $service_quantity
				);
				
				
				// echo "<pre>"; print_r($data2);

				// echo "<pre>"; print_r($VehicleDetailsArray);
				
				$result = $this->Vehicle_model->InsertVehicleDetails($VehicleDetailsArray,$ServiceArray);
				
				
				
				if(!$result){
					
					$this->session->set_flashdata('success','<div class="alert alert-success text-center">Vehicle <b>' .$vehicle_name.'</b> Details has been inserted</div>');
					redirect('dashboard/CreateVehicle');
				}
				else{
					$this->session->set_flashdata('success', '<div class="alert alert-danger text-center">Something is worong with <b>' .$vehicle_name.'</b> Details</div>');
					redirect('dashboard/CreateVehicle');
				}


				 }


	}
	
	public function VehicleList(){

		$data['vehiclelist'] = $this->Vehicle_model->ListOfVehicles();
		$data['title'] = "List of All Vehicles";
		$data['parent'] = "Vehicle Management";
		//echo "<pre>"; print_r($data['vehiclelist']); exit;
		$data['countorders'] = $this->order_model->getOrdersCount();
		$data['getOrder'] = $this->order_model->getOrder();
		$admin_id = $this->session->userdata('current_admin_id');
		$query = $this->db->query("SELECT * FROM admin  WHERE admin_id='$admin_id'");
			$data['admin_avatar'] = $query->result();
			

		$this->load->view('dashboard/header',$data);
		$this->load->view('dashboard/vehicle_list',$data);
		$this->load->view('dashboard/footer');




	}

	public function EditVehicle($vehicle_id){

		
	
			$data['vehiclelist'] = $this->Vehicle_model->SingleVehicleDetails($vehicle_id);
			
			$myCustomArray = array();
							
							foreach($data['vehiclelist'] as $result){
								$vehicle_name = $result->vehicle_name;
								
								if(array_key_exists($vehicle_name, $myCustomArray)){
									array_push($myCustomArray[$vehicle_name], (array) $result);
								}else{
									$myCustomArray[$vehicle_name] = array();
									array_push($myCustomArray[$vehicle_name], (array) $result);
								}
							}
	
	
			$data['vehicleListdata'] = json_decode(json_encode($myCustomArray));
		
			foreach($data['vehiclelist'] as $v){

			 
			$data['title'] = "Edit ".$vehicle_name;
			$data['parent'] = "Vehicle Management";
			//echo "<pre>"; print_r($data['vehiclelist']); exit;
			$data['countorders'] = $this->order_model->getOrdersCount();
			$data['getOrder'] = $this->order_model->getOrder();
			$admin_id = $this->session->userdata('current_admin_id');
			$query = $this->db->query("SELECT * FROM admin  WHERE admin_id='$admin_id'");
				$data['admin_avatar'] = $query->result();
				
	
			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/edit_vehicle_form',$data);
			$this->load->view('dashboard/footer');
	

		}
	
	}
	static function arrayUpdateCustomize($myArray,$vehicle_id){
		
		$countRow = count($myArray['service_name']);
		
		$customArray = array();
		
		for($counter=0; $counter<$countRow; $counter++){
	
			$customSingleArray = array(
	
					'service_name' => $myArray["service_name"][$counter],
					'price' => $myArray["price"][$counter],
					'service_quantity' => $myArray["service_quantity"][$counter],
					'service_id' => $myArray["service_id"][$counter],
					'vehicle_id' => $vehicle_id
					
		   );
	
			array_push($customArray, $customSingleArray);
		}
		
		return $customArray;
	}
	public function VehicleEditRequest($vehicle_id){
		
				if(isset($_POST['vehicle_edit_request'])){
						
					$imageNameForNews = $this->input->post('vehicle_avatar');
					
					$image_url =  str_replace("http://localhost/","",$imageNameForNews);
						

					

					$type= explode('.', $_FILES['vehicle_avatar']['name']);
					   
					$type = $type[count($type)-1];
					

					   
					$url = $image_url;
						
						if(in_array($type, array('png','PNG') ) )
						{
							if(is_uploaded_file($_FILES['vehicle_avatar']['tmp_name']))
							{
							   move_uploaded_file($_FILES['vehicle_avatar']['tmp_name'],$url);
							 }
						}
						
							
							
						$vehicle_name = $this->input->post('vehicle_name');
						
						$vehicle_model = $this->input->post('vehicle_model');
		
						$vehicle_year = $this->input->post('vehicle_year');
		
						$vehicle_make = $this->input->post('vehicle_make');
		
						$vehicle_alt = $this->input->post('vehicle_alt');

						$service_id = $this->input->post('service_id');

		
						$vehicle_avatar = $url;
		
						
		
						$EditVehicleDetailsArray = array(
		
		
							'vehicle_name' => $vehicle_name,
		
							'vehicle_model' => $vehicle_model,
		
							'vehicle_year' => $vehicle_year,
		
							'vehicle_make' => $vehicle_make,
		
							'vehicle_avatar' => $vehicle_avatar,
		
							'vehicle_alt' => $vehicle_alt,
		
							'vehicle_edited' =>  date('Y-m-d H:i:s')
		
		
		
						);
						$service_name = $this->input->post('service_name');
						
											
										$service_price = $this->input->post('service_price');
							
										$service_quantity = $this->input->post('service_quantity');
						
										$ServiceDetailsArray = array(
						
						
											'service_name' => $service_name,
											'price' => $service_price,
											'service_quantity' => $service_quantity,
											'service_id' => $service_id
										);
		
						//echo "<pre>"; print_r($EditVehicleDetailsArray); "</pre>";
						 $result = $this->Vehicle_model->UpdateVehicleDetailsSingle($EditVehicleDetailsArray,$vehicle_id);
						 $result2 = $this->Vehicle_model->UpdateServiceDetailsSingle($ServiceDetailsArray,$vehicle_id);
						
						
						if(!$result && !$result2){
							
							$this->session->set_flashdata('success','<div class="alert alert-success text-center">Vehicle <b>' .$vehicle_name.'</b> Row number <b>'.$vehicle_id.'</b> Details has been Updated</div>');
							redirect('dashboard/VehicleList');
						}
						else{
							$this->session->set_flashdata('success', '<div class="alert alert-danger text-center">Something is worong with <b>' .$vehicle_name.'</b> Details</div>');
							redirect('dashboard/VehicleList');
						}
		
		
						}
		
		
			}

	public function deleteImage() {
				
		$id = $this->input->post('id');
		$this->Vehicle_model->DeleteImage($id);
	}		



	/* Vehicle form page */

	#contact page
	public function contact()
	{
		$data['TotalMessage'] = $this->Contact_model->GetContactMessageDataNumber();
		$data['ListMessage'] = $this->Contact_model-> GetContactMessage();
		$data['countorders'] = $this->order_model->getOrdersCount();
		$data['getOrder'] = $this->order_model->getOrder();
		$admin_id = $this->session->userdata('current_admin_id');
		$query = $this->db->query("SELECT * FROM admin  WHERE admin_id='$admin_id'");
			$data['admin_avatar'] = $query->result();
			
	
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/contact');
		$this->load->view('dashboard/footer');
	}

	
	public function settings(){

		if($this->Login_model->is_admin_logged_in() )
		{
			
			
			$data['TotalMessage'] = $this->Contact_model->GetContactMessageDataNumber();
			$data['ListMessage'] = $this->Contact_model-> GetContactMessage();
			$data['breadcumbs'] = 'Settings';
			$data['home'] = '<a href="">Home</a>';
			$data['page_title'] = "Settings";
			$data['settings'] = $this->Access_model->GetSetting();
			$admin_id = $this->session->userdata('current_admin_id');
			$query = $this->db->query("SELECT * FROM admin  WHERE admin_id='$admin_id'");
				$data['admin_avatar'] = $query->result();
				$data['countorders'] = $this->order_model->getOrdersCount();
				$data['getOrder'] = $this->order_model->getOrder();
				
			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/settings',$data);
			$this->load->view('dashboard/footer');
			
			//echo "<pre>"; print_r($data['settings']); exit;

		}
		else{
			redirect('login/?logged_in_first');
		}
		
	}
	public function edit_admin($admin_id){
			
		if($this->Login_model->is_admin_logged_in() )
		{
			
			
			$data['TotalMessage'] = $this->Contact_model->GetContactMessageDataNumber();
			$data['ListMessage'] = $this->Contact_model-> GetContactMessage();
			$data['title'] = "Edit Admin";
			$data['parent'] = "Admin Management";
			$data['adminData'] = $this->Access_model->GetAdminData($admin_id);
			$data['countorders'] = $this->order_model->getOrdersCount();
			$data['getOrder'] = $this->order_model->getOrder();
			$admin_id = $this->session->userdata('current_admin_id');
			$query = $this->db->query("SELECT * FROM admin  WHERE admin_id='$admin_id'");
				$data['admin_avatar'] = $query->result();
			
			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/edit_admin',$data);
			$this->load->view('dashboard/footer');
			
			//echo "<pre>"; print_r($data['settings']); exit;

		}
		else{
			redirect('login/?logged_in_first');
		}
	}
	public function editadmindata(){

		
		//$imageNameForNews = $this->input->post('admin_avatar');

		$admin_id = $this->input->post('admin_id');

		$type = explode('.', $_FILES['admin_avatar']['name']);
		
		$type = $type[count($type)-1];
	
		$url = "uploads/images/avatar/".uniqid(rand()).".".$type;
	
		if(in_array($type, array('jpg','jpeg','png','JPG','JPGE','PNG') ) )
		{
			if(is_uploaded_file($_FILES['admin_avatar']['tmp_name']))
			{
				move_uploaded_file($_FILES['admin_avatar']['tmp_name'],$url);
			}

		}
			
		// $image_url =  str_replace("http://localhost/","",$imageNameForNews);
			

		

		// $type = explode('.', $_FILES['admin_avatar']['name']);
		   
		// $type = $type[count($type)-1];
		

		   
		// $url = $image_url;
			
		// 	if(in_array($type, array('png','PNG') ) )
		// 	{
		// 		if(is_uploaded_file($_FILES['admin_avatar']['tmp_name']))
		// 		{
		// 		   move_uploaded_file($_FILES['admin_avatar']['tmp_name'],$url);
		// 		 }
		// 	}
			

		$adminData = array(


			'username' => $this->input->post('username'),
			'admin_avatar' => $url 

		);
		//var_dump($adminData);
		
		$this->db->where('admin_id', $admin_id);

		$this->db->update('admin', $adminData);

		if($this->db->affected_rows() > 0){

			$this->session->set_flashdata('success','<div class="alert alert-success text-center">Details has been Updated </div>');
			redirect($_SERVER['HTTP_REFERER']);
		}else{
			$this->session->set_flashdata('success','<div class="alert alert-success text-center">Something went wrong</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
		
	}



	// Order section 


	
	 
	  
	}
	


			
	

	
