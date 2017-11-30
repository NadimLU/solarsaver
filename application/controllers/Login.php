<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
           $this->load->model('Login_model');
              $this->load->model('Contact_model');
               $this->load->model('Reservation_model');
               $this->load->model('order_model');
        
    }

	
	public function index()
	{
		$this->load->view('login/admin-login');
    }

    public function admin_login(){

		$this->form_validation->set_rules('username', 'USER NAME', 'trim|xss_clean|min_length[3]'); // validation of input data from form
		$this->form_validation->set_rules('password', 'USER PASSWORD', 'trim|xss_clean');
		
		$this->form_validation->set_rules('role', 'role', 'trim|xss_clean');

		if($this->form_validation->run() == FALSE){

			//$this->load->view('login_page_view'); 
			echo "validation error";
		}
		else
		{

		

			$result = $this->Login_model->admin_login_data_check();

			if($result)
			{
				$admin_id = $this->session->userdata('current_admin_id');
				$query = $this->db->query("SELECT * FROM admin  WHERE admin_id='$admin_id'");
				$data['admin_avatar'] = $query->result();
				
				
				$data['TotalMessage'] = $this->Contact_model->GetContactMessageDataNumber();
				$data['ListMessage'] = $this->Contact_model-> GetContactMessage();
				$data['TotalReservation'] = $this->Reservation_model-> CountReservation();
				$data['TotalClient'] = $this->Reservation_model-> CountClient();
				$data['countorders'] = $this->order_model->getOrdersCount();
				$data['getOrder'] = $this->order_model->getOrders();
				$admin_id = $this->session->userdata('current_admin_id');
				$query = $this->db->query("SELECT * FROM admin  WHERE admin_id='$admin_id'");
					$data['admin_avatar'] = $query->result();
					
				
				
				
				
			
				$data['title'] = "Welcome to Admin-Panel";
	
				 $data['power'] = $this->session->userdata('session_power');
				
				$this->load->view('dashboard/header',$data);
				$this->load->view('dashboard/home',$data);
				$this->load->view('dashboard/footer');
			}
			else
			{

				
				$data['errorLogin'] = 'Username or Password is invalid';
				
				$data['notadmin'] = 'You have no permission to access this admin panel';
			    $this->load->view('login/admin-login',$data); 
				//echo "someting is wrong";
			}
		}
	}
	// Admin logout method
	public function logout(){
		
					$this->session->unset_userdata('current_admin_id');
					$this->session->unset_userdata('current_admin_name');
		
					$this->session->sess_destroy();
		
					redirect('Login/?logout=success');
	}

	public function userlogin(){

	
		

			$result = $this->Login_model->user_login_data_check();
			$status = array();
			if($result){
				
			 	//echo "Login Successful";
			  //echo json_encode(array("status" => TRUE));
			  echo $status['status'] = 1;
			 // echo json_encode($status);
			}
			else{
				//echo "Username or password do not matched..Try again";
				//echo json_encode(array("status" => FALSE));
				echo $status['status'] = 0;
				//echo json_encode($status);
			}
		}
		 public function user_logout(){
			 			//echo "<pre>"; print_r($_SERVER); exit;
			
						$this->session->unset_userdata('current_user_id');
						$this->session->unset_userdata('current_fullname');
						$this->session->unset_userdata('session_client_role');
						$this->session->unset_userdata('session_email');
						
			
					     $this->session->sess_destroy();
			
						redirect($_SERVER['HTTP_REFERER']);
		}
		public function changepwd(){


			 $password = md5($this->input->post('password'));
			 $admin_id = $this->input->post('admin_id');

			 $field = array(
				'password'=> $password
				
				);
				$this->db->where('admin_id', $admin_id);
				$this->db->update('admin', $field);
				if($this->db->affected_rows() > 0){
					$this->session->set_flashdata('success','<div class="alert alert-success text-center">Password Not Updated </div>');
					redirect($_SERVER['HTTP_REFERER']);
				}else{
					$this->session->set_flashdata('success','<div class="alert alert-success text-center">Password  Updated </div>');
					redirect($_SERVER['HTTP_REFERER']);
				}

				
		}
		   	   
   

			
		


	}
		

