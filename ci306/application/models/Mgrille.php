<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

     class Mgrille extends CI_Model 
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function insert_grille($intitule_poste, $daty, $activites_quotidiens, $activites_semaines, $activites_mois, $activites_an, $activites_missions, $position_suphierarchique, $position_encadrement, $position_nbencadres, $position_categories, $relation_agent, $relation_exterieur, $exigence_professionnelles, $exigence_perso, $exigence_maitrise, $moyen, $condition, $descri)
        {
            $requete = "INSERT INTO grille VALUES (DEFAULT, %s, NOW(), %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s) ";
            $requete = sprintf($requete, $this->db->escape($intitule_poste), $this->db->escape($daty), $this->db->escape($activites_quotidiens), $this->db->escape($activites_semaines), $this->db->escape($activites_mois), $this->db->escape($activites_an), $this->db->escape($activites_missions), $this->db->escape($position_suphierarchique), $this->db->escape($position_encadrement), $this->db->escape($position_nbencadres), $this->db->escape($position_categories), $this->db->escape($relation_agent), $this->db->escape($relation_exterieur), $this->db->escape($exigence_professionnelles), $this->db->escape($exigence_perso), $this->db->escape($exigence_maitrise), $this->db->escape($moyen), $this->db->escape($condition), $this->db->escape($descri));
            $line = $this->db->query($requete);
            $conf = true;
            if ($line == 0) {
                $conf = false;
            }
            return $conf;
        }

       
    }
?>