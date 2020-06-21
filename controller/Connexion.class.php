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
class Connexion extends Controller{
    public function __construct(){
        parent::__construct();
        //Appel du model
        require_once 'model/ConnexionDB.php';
    }

    //A noter que toutes les views doivent être créées dans le dossier view/test
    //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
public function conn(){
    $tdb=new ConnexionDB();
    if(isset($_POST['conn'])){
        extract($_POST);
        if(!empty($identifiant) && !empty($mdp)) {
            $rows=$tdb->seConnecter($identifiant,$mdp);
            if($rows!=0){
                $_SESSION['identifiant']=$identifiant;
                return $this->view->load("accueil/accueil",$_SESSION);


            }
            else{
                ?>
                <script language="javascript">
                    alert("Nom d'utilisateur ou Mot de passe incorrecte");</script>

                <?php
                return $this->view->load("accueil/index");
            }
        }
    }
}


}
?>