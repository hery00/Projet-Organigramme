<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hierarchy extends CI_Controller 
{
    function Loadhierarchie()
    {
        $this->load->model('Employee');
        $data['result']=$this->load->Employee->get_hierarcie_by_manager(1);
        $data['Content']='Page/organigramme';
        $this->load->view('Page/page',$data);
    }
}

?>