
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
        $fonction=$this->fonction->post('fonction');
        $exigences=$this->input->post('exigences');
        $moyen=$this->input->post('moyen');


        if($this->input->post('intitule_poste') && $this->input->post('poste_occup')  && $this->input->post('sup_h') && $this->input->post('fonction') && $this->input->post('exigences') && $this->input->post('moyen')) 
        {
            $this->load->model('Mform');
            $this->Mform->rempli_form($nom,$email,$pass,$repass);
            redirect('Page/Fiche');
        } 
        else 
        {
            redirect('form/form_poste');
        }
        
    }
}

?>
