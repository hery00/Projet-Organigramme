
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class INSCRIT extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }
    public function form_inscri()
    {
        $this->load->view('Page/Inscription');
    }
    public function Trait_inscrit()
    {
        $nom=$this->input->post('nom');
        $prenom=$this->input->post('prenom');
        $email=$this->input->post('email');
        $mdp=$this->input->post('mdp');
        $confirm_mdp=$this->input->post('confirm_mdp');
        
        if($mdp==$confirm_mdp)
        {
            $this->load->model('MUser');
            $this->MUser->inscri_user($nom,$prenom,$email,$mdp,$confirm_mdp);
            redirect('log/index');
        }
        else
        {
            redirect('inscrit/form_inscri');
        }
        
    }
}

?>
