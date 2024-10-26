<?php
require_once 'model/client.php';

class ClientController {
    private $clientModel;

    public function __construct(ClientModel $clientModel) {
        $this->clientModel = $clientModel;
    }

    public function listeAction() {
        $clients = $this->clientModel->listerClients();
        require_once 'view/client/listeclient.php';
    }

    public function createAction() {
        require_once 'view/client/create.php';
    }

   

    public function editAction() {
        $client = $this->clientModel->getClientById($_GET['id_utiisateur']);
        require_once 'view/client/edit.php';
    }

    public function updateAction() {
        $this->clientModel->modifierClient($_POST['id_utiisateur'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mot_de_passe'], $_POST['num_tel']);
        header('location:liste.php?controller=client&action=liste');
    }

    public function deleteAction() {
        $this->clientModel->deleteClient($_GET['id_utiisateur']);
        header('location:liste.php?controller=client&action=liste');
    }
}
?>
