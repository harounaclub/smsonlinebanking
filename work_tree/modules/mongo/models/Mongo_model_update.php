<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 

class Mongo_model_update extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->library('mongo_db',array('activate'=>'default'),'mongo_db');
    }


//les methodes d'affichages

    /*

      1+set Sets a field to a value
      2+unset_field Unsets a field
      3+addtoset Adds a value to an array if doesn't exist
      4+push Pushes a value into an array field
      5+pop Pops a value from an array field
      6+pull Removes an array by the value of a field
      7+rename_field Rename a field
      8+inc Increments the value of a field
      9+mul Multiple the value of a field
      10+max Updates the value of the field to a specified value if the specified value is greater than the current value of the field
      11+min Updates the value of the field to a specified value if the specified value is less than the current value of the field.
      12+update Update a single document in a collection
      13+update_all Update all documents in a collection

      
       */

      //1+set Sets a field to a value
      function value_set(){

        $this->mongo_db->where(array('Grade'=>'10'))->set('status', 'beginner')->update('personnes');
        return TRUE;

      }

      //2+unset_field Unsets a field
      function value_unset(){

        $this->mongo_db->where(array('Grade'=>'10'))->unset_field('status')->update('personnes');
        return TRUE;

      }
      
      //3+addtoset Adds a value to an array if doesn't exist
      function value_addtoset(){

         $this->mongo_db->where(array('Grade'=>'10'))->addtoset('status', 'beginner')->update('personnes');

         return TRUE;

      }

      //4+push Pushes a value into an array field
      function value_push(){

        $this->mongo_db->push('status', array('Grade'=>'30'))->update('personnes');
        return TRUE;


      }

      //pull value
      function value_pull(){

        $this->mongo_db->pull('Grade', array('beginner'=>array('evolution'=>'beginner')))->update('personnes');
        return TRUE;
      }

      function value_rename(){

        $this->mongo_db->where(array('Grade'=>'10'))->rename_field('Grade', 'Status')->update('personnes');
        return TRUE;
      }


      function value_inc(){

        $this->mongo_db->where(array('nom'=>'Gnamien'))->inc(array('status' => '1'))->update('personnes');
        return TRUE;
      }


      function value_update(){

        $this->mongo_db->where(array('Grade' => '80'));
        $mongoArray=array('Grade'=>'100');
        $this->mongo_db->set($mongoArray); 
        $option = array('upsert' => true);
        $this->mongo_db->update('personnes', $option);

        return TRUE;
      }

      function value_update_all(){

        $this->mongo_db->where(array('Grade' => '80'));
        $mongoArray=array('Grade'=>'100');
        $this->mongo_db->set($mongoArray); 
        $option = array('update' => 'multiple');
        $this->mongo_db->update_all('personnes', $option);

        return TRUE;
      }







   

    

    






}