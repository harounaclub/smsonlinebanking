<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    

class Mongo extends MX_Controller {

	public function __construct()
	{
	  
		parent::__construct();
	    $this->load->model('mongo_model');
      $this->load->model('mongo_model_update');
      $this->load->model('mongo_model_delete');


		
	}




    	function index(){

        echo "Test de la librairie mongo avec php 7.2 ++++";

      }  


      //fonction d'affichage  READ

      function list_personnes(){


        echo "listes des personnes sans trie";
        $list_personnes=$this->mongo_model->get_list_personnes();

        echo "<pre>";
        print_r($list_personnes);
        echo "</pre>";

      }

      function list_personnes_where(){


        echo "listes des personnes ou le nom commmence par TRAORE";
        $list_personnes_where=$this->mongo_model->get_list_where();

        echo "<pre>";
        print_r($list_personnes_where);
        echo "</pre>";

      }

      function list_personnes_where_in(){


        echo "listes des personnes ou le grade commmence par 10 , 30";
        $list_personnes_where_in=$this->mongo_model->get_list_where_in();

        echo "<pre>";
        print_r($list_personnes_where_in);
        echo "</pre>";

      }

      function list_personnes_where_in_all(){


        echo "listes des personnes dans tout ou le grade commmence par 10 , 30";
        $list_personnes_where_in_all=$this->mongo_model->get_list_where_in_all();

        echo "<pre>";
        print_r($list_personnes_where_in_all);
        echo "</pre>";

      }

      function list_personnes_where_not_in(){


        echo "listes des personnes n ayant pas le grade 10 , 30";
        $list_personnes_where_not_in=$this->mongo_model->get_list_where_not_in();

        echo "<pre>";
        print_r($list_personnes_where_not_in);
        echo "</pre>";

      }

      function list_personnes_where_or(){


        echo "listes des personnes n ayant pas le grade 10 , 30";
        $list_personnes_where_or=$this->mongo_model->get_list_where_or();

        echo "<pre>";
        print_r($list_personnes_where_or);
        echo "</pre>";

      }

      function list_personnes_where_gt(){

        echo "listes des personnes ayant un grade superieur à 30";
        $list_personnes_where_gt=$this->mongo_model->get_list_where_gt();

        echo "<pre>";
        print_r($list_personnes_where_gt);
        echo "</pre>";

      }

      function list_personnes_where_gte(){

        echo "listes des personnes ayant un grade superieur ou égale à 30";
        $list_personnes_where_gte=$this->mongo_model->get_list_where_gte();

        echo "<pre>";
        print_r($list_personnes_where_gte);
        echo "</pre>";

      }


       function list_personnes_where_lt(){

        echo "listes des personnes ayant un grade inferieur à 30";
        $list_personnes_where_lt=$this->mongo_model->get_list_where_lt();

        echo "<pre>";
        print_r($list_personnes_where_lt);
        echo "</pre>";

      }

       function list_personnes_where_lte(){

        echo "listes des personnes ayant un grade inferieur ou égale à 30";
        $list_personnes_where_lte=$this->mongo_model->get_list_where_lte();

        echo "<pre>";
        print_r($list_personnes_where_lte);
        echo "</pre>";

      }

      function list_personnes_where_between(){

        echo "listes des personnes ayant un grade compris entre 20 et 60";
        $list_personnes_where_between=$this->mongo_model->get_list_where_between();

        echo "<pre>";
        print_r($list_personnes_where_between);
        echo "</pre>";

      }

      function list_personnes_where_between_ne(){

        echo "listes des personnes ayant un grade compris entre l'intervalle 30 et 70";
        $list_personnes_where_between_ne=$this->mongo_model->get_list_where_between_ne();

        echo "<pre>";
        print_r($list_personnes_where_between_ne);
        echo "</pre>";

      }

      function list_personnes_where_ne(){

        echo "listes des personnes ayant un grade qui n'est pas 10 ni 30";
        $list_personnes_where_ne=$this->mongo_model->get_list_where_ne();

        echo "<pre>";
        print_r($list_personnes_where_ne);
        echo "</pre>";

      }


        //ne marche pas
       function list_personnes_like(){

        echo "listes des personnes ayant un nom commencant par TR...";
        $list_personnes_like=$this->mongo_model->get_list_like();

        echo "<pre>";
        print_r($list_personnes_like);
        echo "</pre>";

      }


      function list_personnes_order_by(){

        echo "listes des personnes par ordre de grade decroissant";
        $list_personnes_order_by=$this->mongo_model->get_order_by();

        echo "<pre>";
        print_r($list_personnes_order_by);
        echo "</pre>";

      }

      function list_personnes_limit(){

        echo "listes des personnes limité à 3 personnes";
        $list_personnes_limit=$this->mongo_model->get_limit();

        echo "<pre>";
        print_r($list_personnes_limit);
        echo "</pre>";

      }

       function compter_personnes(){

        echo "Compter le nombre de personnes dans la base de donnée";
        $nb_personnes=$this->mongo_model->get_count();

        echo "<pre>";
        print_r($nb_personnes);
        echo "</pre>";

      }


      function list_distinct(){


        echo "Compter le nombre de personnes avec des grades qui ne repete pase";
        $list_personnes_distinct=$this->mongo_model->get_distinct();

        echo "<pre>";
        print_r($list_personnes_distinct);
        echo "</pre>";


        
      }


      //function update

      function value_set_condition(){

          if($this->mongo_model_update->value_set()){

            echo "value added";
          }

      }

      function value_unset_condition(){

          if($this->mongo_model_update->value_unset()){

            echo "value unset";
          }

      }

      function value_addtoset_condition(){

          if($this->mongo_model_update->value_addtoset()){

            echo "value added to set";
          }

      }

      function value_addpush(){

          if($this->mongo_model_update->value_push()){

            echo "push value added";
          }

      }


      //not work as expected
      function value_pull(){

          if($this->mongo_model_update->value_pull()){

            echo "push value pulled";
          }

      }

      function value_rename(){

          if($this->mongo_model_update->value_rename()){

            echo "Value renamed";
          }

      }

    function value_inc(){

          if($this->mongo_model_update->value_inc()){

            echo "Value increment";

          }

      }

    function value_update(){

          if($this->mongo_model_update->value_update()){

            echo "Mise à jour correctement !";

          }

      }

    function value_update_all(){

          if($this->mongo_model_update->value_update_all()){

            echo "Update all done for all !";

          }

      }


    function value_delete(){

          if($this->mongo_model_delete->value_delete()){

            echo "delete done !";

          }

      }







}