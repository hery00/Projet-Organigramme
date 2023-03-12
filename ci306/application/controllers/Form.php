
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }
    public function form_poste()
    {
        $this->load->view('Page/Formulaire');
    }
    public function get_form()
    {
        
        $intitule_poste=$this->input->post('intitule_poste');
        $poste_occup=$this->input->post('poste_occup');
        $sup_h=$this->input->post('sup_h');
        $fonction=$this->input->post('fonction');
        $exigences=$this->input->post('exigences');
        $moyen=$this->input->post('moyen');


        if (!empty($intitule_poste) && !empty($poste_occup) && !empty($sup_h)) 
        {
            $this->load->model('Mform');
            $this->Mform->rempli_form($intitule_poste,$poste_occup,$sup_h,$fonction,$exigences,$moyen);
            redirect('fiche/form_fiche');
        } 
        else 
        {
            redirect('form/form_poste');
        }
        
    }
}

?>
