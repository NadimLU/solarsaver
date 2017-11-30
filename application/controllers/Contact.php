<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Form_model');
        $this->load->model('Category_model');
        $this->load->model('Contact_model');
		
    }


	
	public function index()
	{
		
		$data['title'] = "Welcome to mahfuz photography";
		$data['packages'] = $this->Category_model->GetPackageDetails();
		$data['sliderlist'] = $this->Category_model-> GetAllSlider();
		
			$this->load->view('client/header',$data);
			$this->load->view('client/contact',$data);
			$this->load->view('client/footer');

	
		
		
		
	}
	
	public function contact_us(){

		$this->form_validation->set_rules('name', 'You Name', 'trim|xss_clean');
        $this->form_validation->set_rules('email', 'You Email', 'trim|xss_clean');
        $this->form_validation->set_rules('subject', 'You Subject', 'trim|xss_clean');
        $this->form_validation->set_rules('message', 'You Message', 'trim|xss_clean');

        if ($this->form_validation->run() == FALSE) 
        {
                
                
               
                $data['Error'] = 'Something is wrong here !!! We can not accept your request';
                $this->load->view('client/header');
                $this->load->view('client/contact',$data);
                $this->load->view('client/footer');
            
        } 
        else 
        {
       
        $ContactMessageData = array(
            'sender_name' => $this->input->post('name'),
            'sender_email' => $this->input->post('email'),
            'sender_subject' => $this->input->post('subject'),
            'sender_message' => $this->input->post('message')
            
                
            
        );
        //var_dump($ContactMessageData);
        $result = $this->Contact_model->SendContactMessages($ContactMessageData);

       echo "Message Has Been Sent......Thank you"."<br>"."form will be resetting within 3 second...........";
        
       
	}
	
}
	
}