
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fiche extends CI_Controller 
{
    public function form_fiche()
    {
        $this->load->view('Page/Fiche_poste');
    }
}

?>
