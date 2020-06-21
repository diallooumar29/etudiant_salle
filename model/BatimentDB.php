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
class BatimentDB extends Model{

    //La base de données samane_test est dans view/test
    //Pour tester importer la
    public function __construct(){
        parent::__construct();
    }

    function getBatimentRef($idBatiment)
    {
        $sql = "SELECT *
                     FROM batiment
                     WHERE idBatiment = '$idBatiment'";

        return $this->db->query($sql)->fetchAll();
    }

    function addBatiment($nomBatiment){
        $sql = "INSERT INTO batiment VALUES(null, '$nomBatiment')";
        if($this->db != null)
        {
            $this->db->exec($sql);
            return $this->db->lastInsertId();//Si la clé primaire est auto_increment
            //sinon return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    function delete($idBatiment){
        $sql = "DELETE FROM batiment WHERE idBatiment= $idBatiment";

        return $this->db->exec($sql);
    }

    function update($idBatiment,$nomBatiment){
        $sql = "UPDATE batiment SET nomBatiment = '$nomBatiment'
                    WHERE idBatiment = $idBatiment";


        return $this->db->exec($sql);
    }

    function liste(){
        $sql = "SELECT *
                    FROM batiment";
        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
    function RechBatiment($nomBatiment){
        $sql = "SELECT *
                    FROM batiment
			       WHERE nomBatiment LIKE '%$nomBatiment%'";
        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
}