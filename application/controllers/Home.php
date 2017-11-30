<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
	
		
    }


	
	public function index()
	{
		
		$data['title'] = "Solar Savers || Official Website";
		
		
			
			$this->load->view('client/home',$data);
			

		
	}
	
	
}