<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

<<<<<<< Updated upstream
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
=======
     class Employee extends CI_Model 
    {
        public function inscri_user($nom,$prenom,$email,$mdp,$confirm_mdp)
        {
            $requete = "insert into user values(null,%s,%s,%s,%s,0)";
            $requete = sprintf($requete,$this->db->escape($nom),$this->db->escape($prenom),$this->db->escape($email),$this->db->escape($pass),$this->db->escape($repass));
            $this->db->escape($requete);
            $line = $this->db->query($requete);
            $conf = true;
            if($line==0)
            {
>>>>>>> Stashed changes
                $conf = false;
            }
            return $conf;
        }
<<<<<<< Updated upstream
    }        
=======

        public function inscri_admin($nom,$email,$pass,$repass)
        {
            $requete = "insert into user values(null,%s,%s,%s,1)";
            $requete = sprintf($requete,$this->db->escape($nom),$this->db->escape($email),$this->db->escape($pass),$this->db->escape($repass));
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
>>>>>>> Stashed changes
?>  
