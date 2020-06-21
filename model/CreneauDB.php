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
class CreneauDB extends Model{

    //La base de donn�es samane_test est dans view/test
    //Pour tester importer la
    public function __construct(){
        parent::__construct();
    }

    function getCreneauRef($id)
    {
        $sql = "SELECT *
                     FROM occupation
                     WHERE idcreneau = $id";

        return $this->db->query($sql)->fetchAll();
    }

    function addCreneau($classe, $salle,$dateoccupation,$hd,$hf){
        $sql = "INSERT INTO occupation VALUES(null, '$classe', '$salle','$dateoccupation','$hd','$hf')";
        if($this->db != null)
        {
            $this->db->exec($sql);
            return $this->db->lastInsertId();//Si la cl� primaire est auto_increment
            //sinon return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    function deleteCreneau($id){
        $sql = "DELETE FROM occupation WHERE idcreneau = $id";

        return $this->db->exec($sql);
    }

    function updateCreneau($id,$classe, $salle,$dateoccupation,$hd,$hf){
        $sql = "UPDATE occupation SET idclasse = '$classe',nomsalle='$salle',
                    dateoccupation='$dateoccupation',
                    hd='$hd',
                    hf='$hf'
                    WHERE idcreneau = $id";

        return $this->db->exec($sql);
    }

    function listeCreneau(){
        $sql = "SELECT idcreneau,classe.nomclasse,occupation.nomsalle,nomBatiment,niveausalle,dateoccupation,hd,hf
                    FROM occupation,classe,salle,batiment
                    where occupation.idclasse=classe.idclasse and Salle.batiment=batiment.idBatiment and occupation.nomsalle=salle.nom";
        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
    function recherche($motcle,$idsalle){
        $sql="select idcreneau,classe.nomclasse,occupation.nomsalle,dateoccupation,hd,hf
                    FROM occupation,classe,salle
                    where occupation.idclasse=classe.idclasse and occupation.nomsalle=salle.nom
                    and occupation.nomsalle='$idsalle' and  dateoccupation='$motcle'";
        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
    function liste_classe(){
        $sql = "SELECT idclasse,nomclasse
                   FROM classe";
        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
    function liste_salle(){
        $sql = "SELECT nom
                   FROM salle";
        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
    function verif($nomsalle,$datecre,$hd,$hf){
        $sql = "SELECT idcreneau
                   FROM occupation
                   where nomsalle='$nomsalle' and dateoccupation='$datecre' and hd ='$hd' and hf='$hf'";
        return $this->db->query($sql)->fetch();
    }

}