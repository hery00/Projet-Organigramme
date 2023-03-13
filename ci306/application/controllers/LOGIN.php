
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LOGIN extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }


    // public function login()
    // {
    //     $this->load->library('form_validation');
    //     $this->form_validation->set_rules('email', 'Email', 'required');
    //     $this->form_validation->set_rules('password', 'Password', 'required');

    // if ($this->form_validation->run() == FALSE) 
    // {
    //     $this->load->view('Page/login');
    // } 
    // else 
    // {
    //     $email = $this->input->post('email');
    //     $password = $this->input->post('password');
    //     $user = $this->User->get_user_by_email($email);

    //     if ($user && password_verify($password, $user['password'])) 
    //     {
    //         $this->session->set_userdata('user_id', $user['id']);
    //         redirect('Emp/get_Emp');
    //     } else 
    //     {
    //         // login failed, show error message
    //         $data['error'] = 'Invalid email or password';
    //         $this->load->view('Page/Login', $data);
    //     }
    // }
// }
    
    public function log()
    {
        $email=$this->input->post('email');
        $mdp=$this->input->post('pass');
        $this->load->model('User');
        $checker=$this->User->check_Login($email,$mdp);
        if($checker==true)
        {
            // $this->session->set_userdata('email',$email);
            $data['Content']='Page/ListeEmployee';
           redirect('Emp/get_Emp');
        }
        else
        {
            redirect('Log/index');
        }
        
        $this->Log->index();       
                  
    }
       
}



?>