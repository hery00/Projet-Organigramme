<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

     class User extends CI_Model 
    {



            // public function get_user_by_email($email) 
            // {
            //     $query = $this->db->get_where('users', array('email' => $email));
            //     return $query->row();
            // }
    

    public function check_Login($email,$pass)
        {
            $requete = "select * from user";
            $query = $this->db->query($requete);
            $rs = array();

            foreach($query->result_array() as $row)
            {
                $rs[]=$row;
                if($row['email']==$email &&$row['pwd']==$pass)
                {
                    return true;
                }
                
            }
            return false;
               
        }
            
      
        
        public function inscri_user($nom, $prenom, $email, $mdp) {
            $requete = "INSERT INTO users VALUES (DEFAULT, %s, %s, %s, %s)";
            $requete = sprintf($requete, $this->db->escape($nom), $this->db->escape($prenom), $this->db->escape($email), $this->db->escape($mdp));
            $line = $this->db->query($requete);
            $conf = true;
            if ($line == 0) {
                $conf = false;
            }
            return $conf;
        }
    }        
?>  
