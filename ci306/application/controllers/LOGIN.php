
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LOGIN extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function log()
    {
        $email=$this->input->post('email');
        $mdp=$this->input->post('mdp');
        $this ->load->model('User');
       
            $this->session->set_userdata('email',$email);
            $data['Content']='Page/Home';
            $this->load->view('Page/Index',$data);
            
      
       
           
    }
       
}



?>