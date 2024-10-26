<?php
// controller/VoitureController.php
require_once 'model/voiture.php';

class VoitureController {
    private $voitureModel;
//__construct Cette classe est responsable de la manipulation des objets de type VoitureModel, qui est le modèle de données pour les voitures.
    public function __construct(VoitureModel $voitureModel) {
        $this->voitureModel = $voitureModel;
    }

    public function listeAction() {
        $voitures = $this->voitureModel->listerVoitures();
        require_once 'view/voiture/listevoiture.php';
    }

    public function createAction() {
        require_once 'view/voiture/create.php';
    }

    public function ajoutAction() {
        $this->voitureModel->ajouterVoiture($_POST['marque_voiture'], $_POST['model'], $_POST['type_vitesse'], $_POST['prix_par_jour'], $_POST['statut']);
        header('location:liste.php?action=liste');
    }

    public function editAction() {
        $voiture = $this->voitureModel->voirVoiture($_GET['matricule_voiture']);
        require_once 'view/voiture/edit.php';
    }

    public function updateAction() {
        $this->voitureModel->modifierVoiture($_POST['matricule_voiture'], $_POST['marque_voiture'], $_POST['model'], $_POST['type_vitesse'], $_POST['prix_par_jour'], $_POST['statut']);
        header('location:liste.php?action=liste');
    }

    public function deleteAction() {
        $this->voitureModel->supprimerVoiture($_GET['matricule_voiture']);
        header('location:liste.php?action=liste');
    }
}
?>
