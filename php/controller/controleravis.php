
<?php
require_once 'model/avis.php';

class AvisController {
    private $model;

    public function __construct(AvisModel $model) {
        $this->model = $model;
    }

    public function listeAction() {
        $aviss = $this->model->listerAvis();
        require_once 'view/avis/listeavis.php';
    }
    public function ajoutAction() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Les données de la location à ajouter
            $cin = $_POST['cin'];
            $nom_utilisateur = $_POST['nom_utiisateur'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $commentaire = $_POST['commentaire'];
            

            // Ajouter la location
            $success = $this->model->ajouterAvis($cin, $nom_utilisateur, $email, $tel, $commentaire);
            if ($success) {
                // Rediriger vers la page utilisateur après l'ajout
                header('Location: avis.php');
                exit();
            } else {
                echo "Erreur lors de l'ajout de la location";
            }
        }
    }

    public function deleteAction() {
        if (isset($_GET['id_avis'])) {
            $id_avis = $_GET['id_avis'];
            $this->model->deleteAvis($id_avis);
            header('Location: liste.php?controller=avis&action=liste');
            exit();
        } else {
            echo "Erreur";
        }
    }
}
?>
