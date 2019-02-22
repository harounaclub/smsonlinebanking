<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 

class Mongo_model_delete extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->library('mongo_db',array('activate'=>'default'),'mongo_db');
    }


//les methodes d'affichages

    /*

      
    1+delete Delete a single document in a collection
    2+delete_all Delete all documents in a collection


      
       */

      //1+set Sets a field to a value
      function value_delete(){


       
       $convertedid=new MongoDB\BSON\ObjectId("5c094601c4289845a0847ef0");

       $this->mongo_db->where('_id',$convertedid);
       $this->mongo_db->delete('personnes');
        return TRUE;

      }

      



}