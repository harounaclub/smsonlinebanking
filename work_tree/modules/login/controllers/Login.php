<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    

class Login extends MX_Controller {

	public function __construct()
	{
	  
		parent::__construct();
	    $this->load->model('login_model');


		
	}


    function index(){

    echo "Bienvenue sur la vue immo";

	}
	
	function admin(){

    $this->load->view("login_admin_view");

	}
	
	function client(){

		$this->load->view("login_immo_view");
		
    }


  




   







}