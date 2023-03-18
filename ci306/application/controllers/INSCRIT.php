
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
        $mdp=$this->input->post('pass');
        $confirm_mdp=$this->input->post('repass');
        
        if($mdp==$confirm_mdp)
        {
            $this->load->model('User');
            $t3260his->User->inscri_user($nom,$prenom,$email,$mdp);
            redirect('Log/index');
        }
        else
        {
            redirect('inscrit/form_inscri');
        }  
    }
}

?>
