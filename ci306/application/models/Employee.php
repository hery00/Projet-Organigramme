<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

     class employee extends CI_Model 
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function get_listemp()
        {
            $requete = "select * from personnel";
            $query = $this->db->query($requete);
            $rs = array();

            foreach($query->result_array() as $row)
            {
                $rs[]=$row;
            };
            return $rs;
        }

<<<<<<< Updated upstream
        public function check_Login($nom,$prenom)
        {
            $requete = "select * from personnel";
            $query = $this->db->query($requete);
            $rs = array();
            foreach($query->result_array() as $row)
            {
                $rs[]=$row;
            }
            for($i=0;$i<count($rs);$i++)
            {
                if($rs[$i]['Nom']==$email && $rs[$i]['Prenom']==$pass)

                {
                        return true;
                }   
            }
            return false;
        }

        public function get_hierarcie_PDG()
        {
            $requete="select * from perso_hierarchie where id_personnel=1 union select* from perso_hierarchie where Manager=1";
            $query = $this->db->query($requete);
            $rs = array();
            foreach($query->result_array() as $row)
            {
                $rs[]=$row;
            }
            return $rs;
        }

        public function get_hierarchie_by_manager($id_perso)
        {
            $requete="select * from perso_hierarchie where id_personnel="+$id_perso+"union select* from perso_hierarchie where Manager="+$id_perso;
            $query = $this->db->query($requete);
            $rs = array();
            foreach($query->result_array() as $row)
            {
                $rs[]=$row;
            }
            return $rs;
        }
=======
>>>>>>> Stashed changes
    }