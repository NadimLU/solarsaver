<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_category extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
	
        $this->load->model('Form_model');
        $this->load->model('Contact_model');
        $this->load->model('Creation_model');
        $this->load->model('Login_model');
        $this->load->model('Access_model');
        $this->load->model('Category_model');
        

    }

    

    public function addtopackagelist(){

     
       

            $type= explode('.', $_FILES['file']['name']);
            $type = $type[count($type)-1];
           
           
    
    
    
            $url = "uploads/products/images/".uniqid(rand()).".".$type;
            //var_dump($url);
            if(in_array($type, array('jpg','jpeg','png','JPG','JPGE','PNG') ) )
            {
                if(is_uploaded_file($_FILES['file']['tmp_name']))
                {
                   move_uploaded_file($_FILES['file']['tmp_name'],$url);
                 }
    
            }
        
        
    

        $Data_package = array(
            
            'package_name' => $this->input->post('package_name'),
            'photographer_name' => $this->input->post('photographer_name'),
            'package_price' => $this->input->post('package_price'),
            'num_of_photographer' => $this->input->post('num_of_photographer'),
            'duration' => $this->input->post('duration'),
            'num_of_exclusively_edited' => $this->input->post('num_of_exclusively_edited'),
            'prints' => $this->input->post('prints'),
            'features' => $this->input->post('features'),
           
                        
                        
            
        );
        $Data_package_image = array(

            'file_location' => $url
        );
            
        


        
        
       // echo "<pre>"; print_r($Data_product); exit;
      
        $insert = $this->Category_model->AddToPackageDetails($Data_package);
    
        if($insert){
            
                        $this->session->set_flashdata('posted', 'Not Posted');
                        redirect('dashobard/packages');
                     }
                     else{
                       $this->session->set_flashdata('posted', 'posted successfully ');
                       redirect('dashboard/packages');
                     }
       
       

    }     
    public function updatepackagelist(){

       $package_id = $this->input->post('package_id');
        $type= explode('.', $_FILES['file']['name']);
        $type = $type[count($type)-1];
       
       



        $url = "uploads/products/images/".uniqid(rand()).".".$type;
        //var_dump($url);
        if(in_array($type, array('jpg','jpeg','png','JPG','JPGE','PNG') ) )
        {
            if(is_uploaded_file($_FILES['file']['tmp_name']))
            {
               move_uploaded_file($_FILES['file']['tmp_name'],$url);
             }

        }
    
    


    $Data_package = array(
        
        'package_name' => $this->input->post('package_name'),
        'photographer_name' => $this->input->post('photographer_name'),
        'package_price' => $this->input->post('package_price'),
        'num_of_photographer' => $this->input->post('num_of_photographer'),
        'duration' => $this->input->post('duration'),
        'num_of_exclusively_edited' => $this->input->post('num_of_exclusively_edited'),
        'prints' => $this->input->post('prints'),
        'features' => $this->input->post('features'),
       
                    
                    
        
    );
    $Data_package_image = array(

        'file_location' => $url
    );
    
    $result = $this->Category_model->UpdatePackage($Data_package,$package_id);
    if($result){
        
         $this->session->set_flashdata('posted', 'Not Updated');
                    redirect('dashobard/packagelist');
    }
     else{
                   $this->session->set_flashdata('posted', 'Updated');
                   redirect('dashboard/packagelist');
                 }
    

    }
    public function deletepackage($package_id){
        
                    $result = $this->db->delete('packages', array('package_id' => $package_id));
                    if($result){
                        
                         $this->session->set_flashdata('posted', 'Deleted');
                                    redirect('dashboard/packagelist');
                    }
                 else{
                                   $this->session->set_flashdata('posted', 'Not Deleted');
                                   redirect('dashboard/packagelist');
                    }
                    
                
                    
        
        
              }
     public function deleteslider($slider_id){

        $result = $this->db->delete('slider', array('slider_id' => $slider_id));
        if($result){
            
             $this->session->set_flashdata('slider', 'Deleted');
                        redirect('dashboard/slider');
        }
     else{
                       $this->session->set_flashdata('slider', 'Not Deleted');
                       redirect('dashboard/slider');
        }
        
     }
    
    

 }


