<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    

class Crudmongo extends MX_Controller {

	public function __construct()
	{
	  
		parent::__construct();
	    $this->load->model('mongo_model');


		
	}




	function index(){

    echo "Test de la librairie mongo avec php 7.2";

  }  


  




   







}