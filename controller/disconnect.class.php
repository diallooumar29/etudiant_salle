<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE MODELE.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
    //class
    class disconnect extends Controller{

        public function __construct(){
            parent::__construct();
            require_once 'model/ConnexionDB.php';
        }
        //methode ou url

        public function disconnect(){
            session_start();
            session_destroy();
            return $this->view->load("accueil/index");
        }

		
    }
?>