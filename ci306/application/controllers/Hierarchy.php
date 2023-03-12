<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hierarchy extends CI_Controller 
{
    function loadbrouillon()
    {
        $data['Content']='Page/organigramme';
        $this->load->view('Page/page',$data);
    }
}

?>