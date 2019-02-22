<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 

class Mongo_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->library('mongo_db',array('activate'=>'default'),'mongo_db');
    }


//les methodes d'affichages

    /*

      1+select Get select fields from returned documents
      2+where OR get_where Where section of the query
      3+where_in Where something is in an array of something
      4+where_in_all Where something is in all of an array of * something
      5+where_not_in Where something is not in array of something
      6+where_or Where something is based on or
      7+where_gt Where something is greater than something
      8+where_gte Where something is greater than or equal to something
      9+where_lt Where something is less than something
      10+where_lte Where something is less than or equal to something
      11+where_between Where something is in between to something
      12+where_between_ne Where something is in between and but not equal to something
      13+where_ne Where something is not equal to something
      14+like Where something is search by like query
      15+order_by Order the results
      16+limit OR offset Limit the number of returned results
      17+count Document Count based on where query
      18+distinct Retrieve a list of distinct values for the given key across a single collection
      19+find_one Retrieve single document from collection

      
       */


// 1+select Get select fields from returned documents
function get_list_personnes(){

        $list_personnes=$this->mongo_db->get('personnes');
        return $list_personnes;
}

// 2+where OR get_where Where section of the query

function get_list_where(){

        $list_personnes_where=$this->mongo_db->where(array('nom' => 'TRAORE'))->get('personnes');
        return $list_personnes_where;

}

// 3+where_in Where something is in an array of something

function get_list_where_in(){

        $list_personnes_where_in=$this->mongo_db->where_in('Grade', array('10', '30'))->get('personnes');
        return $list_personnes_where_in;
}

// 4+where_in_all Where something is in all of an array of * something

function get_list_where_in_all(){

        $list_personnes_where_in_all=$this->mongo_db->where_in_all('Grade', array('10', '30'))->get('personnes');
        return $list_personnes_where_in_all;
}

// 5+where_not_in Where something is not in array of something

function get_list_where_not_in(){

        $list_personnes_where_not_in=$this->mongo_db->where_not_in('Grade', array('60', '30'))->get('personnes');
        return $list_personnes_where_not_in;
}

// 6+where_or Where something is based on or

function get_list_where_or(){

        $list_personnes_where_or=$this->mongo_db->where_or(array('Grade'=>'10', 'Grade'=>'30'))->get('personnes');
        return $list_personnes_where_or;


}

// 7+where_gt Where something is greater than something

function get_list_where_gt(){

        $list_personnes_where_gt=$this->mongo_db->where_gt('Grade', '20')->get('personnes');
        return $list_personnes_where_gt;


}

// 8+where_gte Where something is greater than or equal to something

function get_list_where_gte(){

        $list_personnes_where_gte=$this->mongo_db->where_gte('Grade', '30')->get('personnes');
        return $list_personnes_where_gte;


}

//9+where_lt Where something is less than something

function get_list_where_lt(){

        $list_personnes_where_lt=$this->mongo_db->where_lt('Grade', '30')->get('personnes');
        return $list_personnes_where_lt;


}

// 10+where_lte Where something is less than or equal to something

function get_list_where_lte(){

        $list_personnes_where_lte=$this->mongo_db->where_lte('Grade', '30')->get('personnes');
        return $list_personnes_where_lte;


}

// 11+where_between Where something is in between to something

function get_list_where_between(){

        $list_personnes_where_between=$this->mongo_db->where_between('Grade', '20', '60')->get('personnes');
        return $list_personnes_where_between;


}

// 12+where_between_ne Where something is in between and but not equal to something

function get_list_where_between_ne(){

        $list_personnes_where_between_ne=$this->mongo_db->where_between_ne('Grade', '20', '70')->get('personnes');
        return $list_personnes_where_between_ne;


}

// 13+where_ne Where something is not equal to something

function get_list_where_ne(){

        $list_personnes_where_ne=$this->mongo_db->where_ne('Grade','60')->get('personnes');
        return $list_personnes_where_ne;


}


// 14+like Where something is search by like query
// not working

function get_list_like(){

        $list_personnes_like=$this->mongo_db->like('nom','l')->get('personnes');
        return $list_personnes_like;


}

// 15+order_by Order the results

function get_order_by(){

    $list_personnes_order_by=$this->mongo_db->order_by(array('Grade' => 'ASC'))->get('personnes');
        return $list_personnes_order_by;


}

//16+limit OR offset Limit the number of returned results

function get_limit(){

    $list_personnes_limit=$this->mongo_db->limit(3)->get('personnes');
        return $list_personnes_limit;


}

// 17+count Document Count based on where query

function get_count(){

    $nb_personnes_count=$this->mongo_db->count('personnes');
        return $nb_personnes_count;


}

// 18+distinct Retrieve a list of distinct values for the given key across a single collection
//not working
function get_distinct(){

    $list_distinct=$this->mongo_db->distinct('personnes', 'nom');
        return $list_distinct;


}





   

    

    






}