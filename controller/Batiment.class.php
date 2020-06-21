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
class Batiment extends Controller{
    public function __construct(){
        parent::__construct();
        //Appel du model
        require_once 'model/BatimentDB.php';
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
        $tdb = new BatimentDB();

        if(isset($_GET['motcle'])){

            $data['tests']=$tdb->RechBat($_GET['motcle']);
            return $this->view->load("batiment/list",$data);
        }
        else{
            $data['tests'] = $tdb->liste();
            return $this->view->load("batiment/list",$data);
        }

    }
    public function edit(){
        //Instanciation du model
        $tdb = new BatimentDB();

        $data['modif']=$tdb->getBatimentRef($_GET['idBatiment']);
        return $this->view->load("batiment/edit",$data);
    }
    public function delete(){
        //Instanciation du model
        $tdb = new BatimentDB();
        $okkk=$tdb->delete($_GET['idBatiment']);
        $data['okkk'] = $okkk;
        $data['tests'] = $tdb->Liste();
        return $this->view->load("batiment/list",$data);

    }


    public function add(){
        //Instanciation du model
        $tdb = new BatimentDB();
        //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);
            if(!empty($nb) ) {
                $ok = $tdb->addBatiment($nb);
                $data['ok'] = $ok;
            }
        }
        $data['tests'] = $tdb->liste();
        return $this->view->load("batiment/add",$data);
    }
    public function update(){
        //Instanciation du model
        $tdb = new BatimentDB();
        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($id) && !empty($nb) )
            {
                $okk = $tdb->update($id,$nb);
                $data['okk'] = $okk;
            }
        }
        $data['tests'] = $tdb->liste();
        return $this->view->load("batiment/list",$data);

    }
}
?>