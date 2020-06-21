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
    class ClasseDB extends Model{
		
		//La base de données samane_test est dans view/test
		//Pour tester importer la 
        public function __construct(){
            parent::__construct();
        }

        function getClasse($idclasse)
        {
            $sql = "SELECT *
                     FROM classe
                     WHERE idclasse = $idclasse";
            
			return $this->db->query($sql)->fetchAll();
        }

        function addClasse($nomclasse, $effectif){
            $sql = "INSERT INTO classe VALUES(null, '$nomclasse', '$effectif')";
            if($this->db != null)
            {
                $this->db->exec($sql);
                return $this->db->lastInsertId();//Si la clé primaire est auto_increment
                //sinon return $this->db->exec($sql);
            }else{
                return null;
            }
        }

		function delete($idclasse){
			$sql = "DELETE FROM classe WHERE idclasse= $idclasse";

			return $this->db->exec($sql);
		}
		
		function update($idclasse,$nomclasse, $effectif){
			$sql = "UPDATE classe SET nomclasse = '$nomclasse',effectif='$effectif'
                    WHERE idclasse = $idclasse";

			return $this->db->exec($sql);
		}
		
		function liste(){
			$sql = "SELECT *
                    FROM classe";
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
        function Rechclasse($nomclasse){
            $sql = "SELECT *
                    FROM classe
			       WHERE nomclasse LIKE '%$nomclasse%'";
            if($this->db != null)
                return $this->db->query($sql)->fetchAll();
            else
                return null;
        }

	}