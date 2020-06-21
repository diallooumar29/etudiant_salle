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
class Classe extends Controller{
    public function __construct(){
        parent::__construct();
        //Appel du model
        require_once 'model/ClasseDB.php';
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

    public function get($idclasse){
        //Instanciation du model
        $tdb = new ClasseDB();

        $data['test'] = $tdb->getClasse($idclasse);
        return $this->view->load("classe/edit", $data);
    }
    public function liste(){
        //Instanciation du model
        $tdb = new ClasseDB();

        if(isset($_GET['motcle'])){

            $data['tests']=$tdb->RechClasse($_GET['motcle']);
            return $this->view->load("classe/list",$data);
        }
        else{
            $data['tests'] = $tdb->liste();
            return $this->view->load("classe/list",$data);
        }

    }
    public function edit(){
        //Instanciation du model
        $tdb = new ClasseDB();

        $data['modif']=$tdb->getClasse($_GET['idclasse']);
        return $this->view->load("classe/edit",$data);

    }
    public function delete(){
        //Instanciation du model
        $tdb = new ClasseDB();
        $okkk=$tdb->delete($_GET['idclasse']);
        $data['okkk'] = $okkk;
        $data['tests'] = $tdb->Liste();
        return $this->view->load("classe/list",$data);

    }


    public function add(){
        //Instanciation du model
        $tdb = new ClasseDB();
        //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);
            if(!empty($nc) && !empty($ef) ) {
                $ok = $tdb->addClasse($nc,$ef);
                $data['ok'] = $ok;
            }
        }
        $data['tests'] = $tdb->liste();
        return $this->view->load("classe/add",$data);
    }
    public function update(){
        //Instanciation du model
        $tdb = new ClasseDB();
        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($id) && !empty($nc) && !empty($ef) )
            {
                $okk = $tdb->update($id,$nc,$ef);
                $data['okk'] = $okk;
            }
        }
        $data['tests'] = $tdb->liste();
        return $this->view->load("classe/list",$data);

    }
}
?>