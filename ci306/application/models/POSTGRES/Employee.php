<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

     class Employee extends CI_Model 
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
    }