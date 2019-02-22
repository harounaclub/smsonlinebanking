<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    

class Corporate extends MX_Controller {

	public function __construct()
	{
	  
		parent::__construct();
	    $this->load->model('Corporate_model');


		
	}


  function index(){

    $this->load->view("main_view");

  }  


  




   







}