
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LOGIN extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        $nom=$this->input->post('nom');
        $prenom=$this->input->post('prenom');
        $poste=$this->input->post('poste');
        $this ->load->model('Employee');
       
            $this->session->set_userdata('Nom',$nom);
            $data['Content']='Page/Home';
            $this->load->view('Page/Index',$data);
    
    }
       
}



?>