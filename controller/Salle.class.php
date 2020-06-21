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
class Salle extends Controller{
    public function __construct(){
        parent::__construct();
        //Appel du model
        require_once 'model/SalleDB.php';
    }

    //A noter que toutes les views doivent �tre cr��es dans le dossier view/test
    //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider � mieux comprendre
    // public function index(){
    //     return $this->view->load("test/index");
    // }

    // public function getID($id){
    //     $data['ID'] = $id;

    //     return $this->view->load("test/get_id", $data);
    // }

    // public function get($id){
    //     //Instanciation du model
    //     $tdb = new TestDB();

    //     $data['test'] = $tdb->getTestRef($id);
    //     return $this->view->load("test/get", $data);
    // }
    public function liste(){
        //Instanciation du model
        $tdb = new SalleDB();

        if(isset($_GET['motcle'])){

            $data['tests']=$tdb->RechSalle($_GET['motcle']);
            return $this->view->load("salle/list",$data);
        }
        else{
            $data['tests'] = $tdb->listeSalle();
            return $this->view->load("salle/list",$data);
        }

    }

    public function listeSalledispo(){
        //Instanciation du model
        $tdb = new SalleDB();

        if(isset($_GET['motcle'])){

            $data['tests']=$tdb->RechSalle($_GET['motcle']);
            return $this->view->load("salle/list",$data);
        }
        else{
            $data['tests'] = $tdb->salleDispo();
            return $this->view->load("salle/list",$data);
        }

    }

    public function edit(){
        //Instanciation du model
        $tdb = new SalleDB();
        $data['batiment']=$tdb->liste_batiment();
        $data['modif']=$tdb->getSalleRef($_GET['id']);
        return $this->view->load("salle/edit",$data);

    }
    public function delete(){
        //Instanciation du model
        $tdb = new SalleDB();
        $okkk=$tdb->deleteSalle($_GET['id']);
        $data['okkk'] = $okkk;
        $data['tests'] = $tdb->listeSalle();

        return $this->view->load("salle/list",$data);

    }


    public function add(){
        //Instanciation du model
        $tdb = new SalleDB();
        $data['batiment']=$tdb->liste_batiment();

        //R�cup�ration des donn�es qui viennent du formulaire view/test/add.html (� cr�er)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);
            if(!empty($nom) && !empty($taille) && !empty($niveausalle) && !empty($typesalle) && !empty($tableau)
                && !empty($videoprojecteur) && !empty($batiment)) {
                $ok = $tdb->addSalle($nom,$taille,$niveausalle,$typesalle,$tableau,$videoprojecteur,$batiment);
                $data['ok'] = $ok;
            }
        }
        $data['tests'] = $tdb->listeSalle();
        return $this->view->load("salle/add",$data);
    }
    public function update(){
        //Instanciation du model
        $tdb = new SalleDB();
        if(isset($_POST['editsalle'])){
            extract($_POST);
            if(!empty($nom) && !empty($taille) && !empty($niveausalle) && !empty($typesalle) && !empty($tableau)
                && !empty($videoprojecteur) && !empty($batiment) )
            {

                $okk = $tdb->updateSalle($nom,$taille,$niveausalle,$typesalle,$tableau,$videoprojecteur,$batiment);
                $data['okk'] = $okk;
                $data['tests'] = $tdb->listeSalle();
                return $this->view->load("salle/list",$data);

            }
        }

    }
}
?>