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
    }