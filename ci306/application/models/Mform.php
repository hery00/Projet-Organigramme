<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

     class Mform extends CI_Model 
    {
            public function rempli_form($intitule_poste,$poste_occup,$sup_h,$fonction,$exigences,$moyen) 
            {
                $requete = "insert into fichedeposte values(default,%s,%s,%s,%s,%s,%s)";
                $requete = sprintf($requete,,$this->db->escape($intitule_poste),$this->db->escape($poste_occup),$this->db->escape($sup_h),$this->db->escape($fonction),$this->db->escape($exigences),$this->db->escape($moyen));
                $this->db->escape($requete);
                $line = $this->db->query($requete);
                $conf = true;
                if($line==0)
                {
                    $conf = false;
                }
                return $conf;
            }
    }
    

?>  
