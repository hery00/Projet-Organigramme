<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hierarchy extends CI_Controller 
{
    function loadbrouillon()
    {
        $this->load->model('Employee');
        $this->load->Employee->get_hierarcie_by_manager($Manager);
        $data['Content']='Page/organigramme';
        $this->load->view('Page/page',$data);
    }
}

?>