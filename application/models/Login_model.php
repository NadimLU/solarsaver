<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function admin_login_data_check()
    {
             $username = $this->input->post('username');
			 $password = md5($this->input->post('password'));
			 $role = $this->input->post('role');

	
			

			$attribute = array(

				'username' => $username,
				'password' => $password,
				'role' => $role
				

			);
			//var_dump($attribute);
			
			$QueryResult = $this->db->get_where('admin', $attribute); // select query for code igniter
			

			
			
			if($QueryResult -> num_rows() == 1){

				

				$attribute_session = array(

					'current_admin_id'  => $QueryResult->row(0)->admin_id,
					'current_admin_name'  => $username,
					'session_role' => $role,
					'session_power' => $QueryResult->row(7)->power,
					'admin_avatar' => $QueryResult->row(6)->admin_avatar
				
				);
				
                
            

				$this->session->set_userdata($attribute_session); // session set afte login succeess
				return TRUE;

			}
			else
			{
				return FALSE;
				
			}
	}
	public function is_admin_logged_in(){
		return $this->session->userdata('current_admin_id')!= FALSE;
	}
	
	public function user_login_data_check()
    {
             $email = $this->input->post('email');
			 $password = md5($this->input->post('password'));
			 $role = $this->input->post('role');

	
			

			$attribute = array(

				'email' => $email,
				'password' => $password,
				'role' => $role
				

			);
			
			$QueryResult = $this->db->get_where('client', $attribute); // select query for code igniter
			

			
			
			if($QueryResult -> num_rows() == 1){

				

				$attribute_session = array(

					'current_user_id'  => $QueryResult->row(0)->client_id,
					'current_fullname'  =>$QueryResult->row(1)->fullname,
					'session_client_role' => $role,
					'session_email' => $email,
					'session_zip_code' => $QueryResult->row(6)->zip_code,
				
                );
                
            

				$this->session->set_userdata($attribute_session); // session set afte login succeess
				return TRUE;

			}
			else
			{
				
				return FALSE;
				
			}
	}
	public function UpdateAdminDetails($adminData,$admin_id){



	}

     
}
