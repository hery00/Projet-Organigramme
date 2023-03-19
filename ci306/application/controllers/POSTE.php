
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
        $data['Content']='Page/Grilledanalyse';
        $this->load->view('Page/page',$data);
    }
    public function load_fiche()
    {
        $data['Content']='Page/Fiche_poste';

        $this->load->view('Page/page',$data);
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
