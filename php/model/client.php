<?php
class ClientModel {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function listerClients() {
        return $this->pdo->query('SELECT * FROM utilisateur')->fetchAll(PDO::FETCH_OBJ);
    }

 

    public function deleteClient($id_utiisateur) {
        $sqlState = $this->pdo->prepare("DELETE FROM `utilisateur` WHERE id_utiisateur= ?");
        return $sqlState->execute([$id_utiisateur]);
    }

    public function getClientById($id_utiisateur) {
        $sqlState = $this->pdo->prepare("SELECT * FROM `utilisateur` WHERE id_utiisateur= ?");
        $sqlState->execute([$id_utiisateur]);
        return $sqlState->fetch(PDO::FETCH_OBJ);
    }

    public function modifierClient($id_utiisateur, $nom, $prenom, $email, $mot_de_passe, $num_tel) {
        $sqlState = $this->pdo->prepare("UPDATE `utilisateur` SET nom= ? , prenom=?, email=?, mot_de_passe=?, num_tel=? WHERE id_utiisateur=?");
        return $sqlState->execute([$nom, $prenom, $email, $mot_de_passe, $num_tel, $id_utiisateur]);
    }
}
?>
