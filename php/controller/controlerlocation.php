<?php
require_once "model/location.php";

class LocationController {
    private $model;

    public function __construct(LocationModel $model) {
        $this->model = $model;
    }

    public function listeAction() {
        $locations = $this->model->listerLocations();
        require_once 'view/location/listelocation.php';
    }

 

    public function ajoutAction() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
            $cin = $_POST['cin'];
            $nom_utilisateur = $_POST['nom_utiisateur'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $marque_voiture = $_POST['marque_voiture'];
            $date_debut = $_POST['date_debut'];
            $date_fin = $_POST['date_fin'];

            // Ajouter la location
            $success = $this->model->ajouterLocation($cin, $nom_utilisateur, $email, $tel, $marque_voiture, $date_debut, $date_fin);
            if ($success) {
            
                header('Location: user_page.php');
                exit();
            } else {
                echo "Erreur lors de l'ajout de la location";
            }
        }
    }

    public function editAction() {
        if(isset($_GET['id_location'])) {
            $id_location = $_GET['id_location'];
            $location = $this->model->getLocationById($id_location);
            require_once 'view/location/edit.php';
        } else {
            echo "Erreur";
        }
    }

    public function updateAction() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Les données mises à jour de la location
            $id_location = $_POST['id_location'];
            $cin = $_POST['cin'];
            $nom_utilisateur = $_POST['nom_utiisateur'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $marque_voiture = $_POST['marque_voiture'];
            $date_fin = $_POST['date_fin'];

            // Mettre à jour la location
            $this->model->updateLocation($id_location, $cin, $nom_utilisateur, $email, $tel, $marque_voiture, $date_fin);
            header('Location: liste.php?controller=location&action=liste');
            exit();
        }
    }

    public function deleteAction() {
        if(isset($_GET['id_location'])) {
            $id_location = $_GET['id_location'];
            $this->model->deleteLocation($id_location);
            header('Location: liste.php?controller=location&action=liste');
            exit();
        } else {
            echo "Erreur";
        }
    }
}
?>
