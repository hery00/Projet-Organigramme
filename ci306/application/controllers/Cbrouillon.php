<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cbrouillon extends CI_Controller 
{
    function loadbrouillon()
    {
        $this->load->view('Page/brouillon');
    }
}

?>