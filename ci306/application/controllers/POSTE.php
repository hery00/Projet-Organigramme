
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
    public function insert_grille()
    {
        $data['intitule']=$this->input->post('intitule');
        $data['date']=$this->input->post('date');
        $data['activite_quotidienne']=$this->input->post('activite_quotidienne');
        $data['activite_hebdomadaire']=$this->input->post('activite_hebdomadaire');
        $data['activite_mensuelle']=$this->input->post('activite_mensuelle');
        $data['activite_annuelle']=$this->input->post('activite_annuelle');
        $data['autre_mission']=$this->input->post('autre_mission');
        $data['superieur_hierarchique']=$this->input->post('superieur_hierarchique');
        $data['encadrement']=$this->input->post('encadrement');
        $data['nbencadrement']=$this->input->post('nbencadrement');
        $data['categorie']=$this->input->post('categorie');
        $data['contacts_interieur']=$this->input->post('contacts_interieur');
        $data['contact_exterieur']=$this->input->post('contact_exterieur');
        $data['formations_qualifications']=$this->input->post('formations_qualifications');
        $data['qualite_perso']=$this->input->post('qualite_perso');
        $data['duree']=$this->input->post('duree');
        $data['moyen']=$this->input->post('moyen');
        $data['contraintes']=$this->input->post('contraintes');
        $data['description_journee']=$this->input->post('description_journee');
        $data['Content']='Page/Fiche_poste';
        $this->load->model('Mgrille');
        $this->Mgrille->insert_grille($data['intitule'],$data['date'],$data['activite_quotidienne'],$data['activite_hebdomadaire'],$data['activite_mensuelle'],$data['activite_annuelle'],$data['autre_mission'],$data['superieur_hierarchique'],$data['encadrement,$nbencadrement'],$data['categorie'],$data['contacts_interieur'],$data['contact_exterieur'],$data['formations_qualifications'],$data['qualite_perso'],$data['duree'],$data['moyen'],$data['contraintes'],$data['description_journee']);
        $this->load->view('Page/page',$data);
    }    

    public function create_fiche()
    {

    }
    
}

?>
