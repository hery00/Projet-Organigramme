
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
        $intitule=$this->input->post('intitule');
        $date=$this->input->post('date');
        $activite_quotidienne=$this->input->post('activite_quotidienne');
        $activite_hebdomadaire=$this->input->post('activite_hebdomadaire');
        $activite_mensuelle=$this->input->post('activite_mensuelle');
        $activite_annuelle=$this->input->post('activite_annuelle');
        $autre_mission=$this->input->post('autre_mission');
        $superieur_hierarchique=$this->input->post('superieur_hierarchique');
        $encadrement=$this->input->post('encadrement');
        $nbencadrement=$this->input->post('nbencadrement');
        $categorie=$this->input->post('categorie');
        $contacts_interieur=$this->input->post('contacts_interieur');
        $contact_exterieur=$this->input->post('contact_exterieur');
        $formations_qualifications=$this->input->post('formations_qualifications');
        $qualite_perso=$this->input->post('qualite_perso');
        $duree=$this->input->post('duree');
        $moyen=$this->input->post('moyen');
        $contraintes=$this->input->post('contraintes');
        $description_journee=$this->input->post('description_journee');

        $this->load->model('Mgrille');
        $this->Mgrille->insert_grille($intitule,$date,$activite_quotidienne,$activite_hebdomadaire,$activite_mensuelle,$activite_annuelle,$autre_mission,$superieur_hierarchique,$encadrement,$nbencadrement,$categorie,$contacts_interieur,$contact_exterieur,$formations_qualifications,$qualite_perso,$duree,$moyen,$contraintes,$description_journee);
       redirect('POSTE/create_fiche');
    }    

    public function create_fiche()
    {
        
    }
    
}

?>
