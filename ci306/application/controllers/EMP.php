<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EMP extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
       
    }

    public function get_Emp()
    {
        $this->load->model('Employee');
        $data['Objets']=$this->Employee->get_listemp();
        $data['Content']='Page/Home';
        $this->load->view('Page/Index',$data);
    }
   

} 


?>