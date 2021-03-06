<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creation extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Access_model');
		$this->load->model('Form_model');
		$this->load->model('Creation_model');
		$this->load->model('Reservation_model');
		$this->load->model('Vehicle_model');
		$this->load->model('order_model');
	
    }

	
    public function CreateAdmin() //Create Admin Page View Only
	{
        
        if($this->Login_model->is_admin_logged_in() )
		{
			$data['TotalReservation'] = $this->Reservation_model-> CountReservation();
			$data['TotalClient'] = $this->Reservation_model-> CountClient();
			$data['countorders'] = $this->order_model->getOrdersCount();
			$data['getOrder'] = $this->order_model->getOrder();
            $admin_id = $this->session->userdata('current_admin_id');
			$query = $this->db->query("SELECT * FROM admin  WHERE admin_id='$admin_id'");
				$data['admin_avatar'] = $query->result();
				
			
			$data['title'] = "Create a new admin";
            $data['parent'] = "Admin Management";	
			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/admin_create');
			$this->load->view('dashboard/footer');

		}
		else{
			redirect('login/?logged_in_first');
		}

		
    }
    public function admin_create_request() //Admin Creating Form
    {

        $this->form_validation->set_rules('username', 'User Name', 'trim|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|xss_clean');
       

        if ($this->form_validation->run() == FALSE) 
        {
                
                $data['TotalMessage'] = $this->Contact_model->GetContactMessageDataNumber();
                $data['ListMessage'] = $this->Contact_model-> GetContactMessage();
               
                $data['Error'] = 'Something is wrong here !!! We can not accept your request';
                $this->load->view('dashboard/header',$data);
                $this->load->view('dashboard/admin_create');
                $this->load->view('dashboard/footer');
        } 
        else 
        {

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
         $username = $this->input->post('username');
         $password =  md5($this->input->post('password'));  
         $CreateAdminData = array(
            'username' => $username,
            'password' => $password ,
            'admin_avatar' => $url,
            'role' => 'admin'
          
            
        );
       
        $insert = $this->Creation_model->AdminCreateRequest($CreateAdminData);
        if($insert){
            
            $this->session->set_flashdata('success','<div class="alert alert-success text-center">Admin <b>' .$username.'</b> Has Been Created</div>');
            redirect('creation/CreateAdmin');
        }
        else{
            $this->session->set_flashdata('success', '<div class="alert alert-danger text-center">Something is worong with <b>' .$username.'</b> Details</div>');
            redirect('creation/CreateAdmin');
        }


        }
         
        

    }
    
   
    function AdminList(){


        $data['AdminList'] = $this->Creation_model->ListOfAdmin();
		$data['title'] = "List of All Vehicles";
        $data['parent'] = "Vehicle Management";
        $admin_id = $this->session->userdata('current_admin_id');
        $query = $this->db->query("SELECT * FROM admin  WHERE admin_id='$admin_id'");
            $data['admin_avatar'] = $query->result();
            $data['TotalReservation'] = $this->Reservation_model-> CountReservation();
			$data['TotalClient'] = $this->Reservation_model-> CountClient();
			$data['countorders'] = $this->order_model->getOrdersCount();
			$data['getOrder'] = $this->order_model->getOrder();    
            
		//echo "<pre>"; print_r($data['AdminList']); exit;

		$this->load->view('dashboard/header',$data);
		$this->load->view('dashboard/admin_list',$data);
		$this->load->view('dashboard/footer');
              
    }

    public function deleteadmin($admin_id){


        $this->db->where('admin_id', $admin_id);
        $this->db->delete('admin');
        $this->session->set_flashdata('success', '<div class="alert alert-danger text-center">Admin Removed</div>');
        redirect($_SERVER['HTTP_REFERER']);


    }

  
    
       
        
}

