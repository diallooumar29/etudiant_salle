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
class SalleDB extends Model{

    //La base de donn�es samane_test est dans view/test
    //Pour tester importer la
    public function __construct(){
        parent::__construct();
    }

    function getSalleRef($nom)
    {
        $sql = "SELECT *
                     FROM salle
                     WHERE nom = '$nom'";

        return $this->db->query($sql)->fetchAll();
    }

    function addSalle($nom,$taille,$niveausalle,$typesalle,$tableau,$videoprojecteur,$batiment){
        $sql = "INSERT INTO salle VALUES('$nom','$taille','$niveausalle','$typesalle','$tableau','$videoprojecteur','$batiment')";
        if($this->db != null)
        {
            $this->db->exec($sql);
            return $this->db->lastInsertId();//Si la cl� primaire est auto_increment
            //sinon return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    function deleteSalle($nom){
        $sql = "DELETE FROM salle WHERE nom = '$nom'";

        return $this->db->exec($sql);
    }

    function updateSalle($nom,$taille,$niveausalle,$typesalle,$tableau,$videoprojecteur,$batiment){
        $sql = "UPDATE salle SET
                                taille = '$taille',
                                niveausalle='$niveausalle',
                                 typesalle='$typesalle',
                                 tableau='$tableau',
                                 videoprojecteur='$videoprojecteur',
                                 batiment='$batiment'
                    WHERE nom = '$nom'";

        return $this->db->exec($sql);
    }

    function listeSalle(){
        $sql = "SELECT nom,taille,niveausalle,typesalle,tableau,videoprojecteur,nomBatiment
                    FROM Salle,batiment
                    where Salle.batiment=batiment.idBatiment";
        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
    function RechSalle($nom){
        $sql = "SELECT *
                    FROM salle
			       WHERE nom LIKE '%$nom%'";
        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
    function liste_batiment(){
        $sql = "SELECT idBatiment,nomBatiment
                   FROM batiment";
        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }

    function salleDispo(){
        $sql = "SELECT DISTINCT nom,taille,typesalle,niveausalle,tableau,videoprojecteur from salle\n"
            . "where nom not in (SELECT nomsalle from occupation)";
        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }


}