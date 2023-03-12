<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

     class User extends CI_Model 
    {
            public function get_user_by_email($email) 
            {
                $query = $this->db->get_where('users', array('email' => $email));
                return $query->row();
            }
    }


        
        // public function inscri_user($nom,$prenom,$email,$mdp)
        // {
        //     $requete = "insert into users values(default,%s,%s,%s,%s)";
        //     $requete = sprintf($requete,$this->db->escape($nom),$this->db->escape($prenom),$this->db->escape($email),$this->db->escape($mdp));
        //     $this->db->escape($requete);
        //     $line = $this->db->query($requete);
        //     $conf = true;
        //     if($line==0)
        //     {
        //         $conf = false;
        //     }
        //     return $conf;
        // }
    }
?>  
