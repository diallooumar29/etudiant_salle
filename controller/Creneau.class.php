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
    class Creneau extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model
            require_once 'model/CreneauDB.php';
        }

		//A noter que toutes les views doivent être créées dans le dossier view/test
        //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){
            return $this->view->load("test/index");
        }

        public function getID($id){
            $data['ID'] = $id;

            return $this->view->load("test/get_id", $data);
        }
        
        public function get($id){
            //Instanciation du model
            $tdb = new TestDB();

            $data['test'] = $tdb->getTestRef($id);
            return $this->view->load("test/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $tdb = new CreneauDB();

            if(isset($_GET['motcle']) && isset($_GET['idsalle'])){
                $data['classes'] = $tdb->liste_classe();
                $data['salles'] = $tdb->liste_salle();
                $data['tests']=$tdb->recherche($_GET['motcle'],$_GET['idsalle']);
                return $this->view->load("creneau/list",$data);
            }
            else{
                $data['classes'] = $tdb->liste_classe();
                $data['salles'] = $tdb->liste_salle();
                $data['tests'] = $tdb->listeCreneau();
                return $this->view->load("creneau/list",$data);
            }

        }
        public function edit(){
            //Instanciation du model
            $tdb = new CreneauDB();
            $data['classes'] = $tdb->liste_classe();
            $data['salles'] = $tdb->liste_salle();
                $data['modif']=$tdb->getCreneauRef($_GET['id']);
                return $this->view->load("creneau/edit",$data);

        }
        public function delete(){
            //Instanciation du model
            $tdb = new CreneauDB();
            $okkk=$tdb->deleteCreneau($_GET['id']);
            $data['okkk'] = $okkk;
            $data['classes'] = $tdb->liste_classe();
            $data['salles'] = $tdb->liste_salle();
            $data['tests'] = $tdb->listeCreneau();
            return $this->view->load("creneau/list",$data);

        }


        public function add(){
			//Instanciation du model
            $tdb = new CreneauDB();
            $data['classes'] = $tdb->liste_classe();
            $data['salles'] = $tdb->liste_salle();
            return $this->view->load("creneau/add",$data);


            }

      public function ajouter(){
			//Instanciation du model
            $tdb = new CreneauDB();


            //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                if(!empty($idclasse) && !empty($idsalle) &&  !empty($datecre)&&  !empty($hd)&&  !empty($hf)  )
                {

                    $rows=$tdb->verif($idsalle,$datecre,$hd,$hf);
                    if($rows!=0){
                        $data['classes'] = $tdb->liste_classe();
                        $data['salles'] = $tdb->liste_salle();
                        $data['tests'] = $tdb->listeCreneau();
                        $data['okkkk'] = $rows;

                        return $this->view->load("creneau/list",$data);}
                    else {
                        $ok = $tdb->addCreneau($idclasse, $idsalle, $datecre, $hd, $hf);
                        $data['ok'] = $ok;
                        $data['classes'] = $tdb->liste_classe();
                        $data['salles'] = $tdb->liste_salle();
                        $data['tests'] = $tdb->listeCreneau();
                        return $this->view->load("creneau/add",$data);
                    }
                }
            }

        }
		public function update(){
			//Instanciation du model
            $tdb = new CreneauDB();
            if(isset($_POST['valider'])){
                extract($_POST);
                if(!empty($id) && !empty($idclasse) && !empty($idsalle) &&  !empty($datecre)&&  !empty($hd)&&  !empty($hf)  )
                {

                    $rows=$tdb->verif($idsalle,$datecre,$hd,$hf);
                    if($rows!=0){
                        $data['classes'] = $tdb->liste_classe();
                        $data['salles'] = $tdb->liste_salle();
                        $data['tests'] = $tdb->listeCreneau();
                        $data['okkkk'] = $rows;

                        return $this->view->load("creneau/list",$data);


                    }
                    else{

                        $okk = $tdb->updateCreneau($id,$idclasse,$idsalle,$datecre,$hd,$hf);
                        $data['okk'] = $okk;
                        $data['classes'] = $tdb->liste_classe();
                        $data['salles'] = $tdb->liste_salle();
                        $data['tests'] = $tdb->listeCreneau();
                        return $this->view->load("creneau/list",$data);

                    }
                }
            }


        }
    }
?>