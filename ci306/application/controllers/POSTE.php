
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class POSTE extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }
    public function load_grille()
    {
        $this->load->view('Page/Grilledanalyse');
    }
    public function load_fiche()
    {
        $this->load->view('Page/Fiche_poste');
    }
    public function get_grille()
    {
        $this->load->model('Mgrille');
        $data['Objets']=$this->Mgrille->insert_grille();
        $data['Content']='Page/Grilledanalyse';
        $this->load->view('Page/page',$data);
    }    
    
}

?>
