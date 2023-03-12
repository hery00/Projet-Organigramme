<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

     class User extends CI_Model 
    {
        public function check_Login($email,$mdp)
        {
            $requete = "select * from users";
            $query = $this->db->query($requete);
            $rs = array();

            foreach($query->result_array() as $row)
            {
                $rs[]=$row;
            }
            for($i=0;$i<count($rs);$i++)
            {
                if($rs[$i]['Email']==$email && $rs[$i]['Pwd']==$mdp)

                {
                        return true;
                }   
            }
            return false;
        }
        public function inscri_user($nom,$prenom,$email,$mdp,$confirm_mdp)
        {
            $requete = "insert into users values(%s,%s,%s,%s)";
            $requete = sprintf($requete,$this->db->escape($nom),$this->db->escape($prenom),$this->db->escape($email),$this->db->escape($mdp),$this->db->escape($confirm_mdp));
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
