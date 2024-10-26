<?php
class VoitureModel {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function listerVoitures() {
        return $this->pdo->query('SELECT * FROM voiture')->fetchAll(PDO::FETCH_OBJ); 
    }

    public function ajouterVoiture($marque, $model, $type_vitesse, $prix_par_jour, $statut) {
        $sqlState = $this->pdo->prepare("INSERT INTO `voiture` VALUES(null,?,?,?,?,?)");
        return $sqlState->execute([$marque, $model, $type_vitesse, $prix_par_jour, $statut]);
    }

    public function supprimerVoiture($matricule_voiture) {
        $sqlState = $this->pdo->prepare("DELETE FROM `voiture` WHERE matricule_voiture= ?");
        return $sqlState->execute([$matricule_voiture]);
    }

    public function voirVoiture($matricule_voiture) {
        $sqlState = $this->pdo->prepare("SELECT * FROM `voiture` WHERE matricule_voiture= ?");
        $sqlState->execute([$matricule_voiture]);
        return $sqlState->fetch(PDO::FETCH_OBJ); 
    }

    public function modifierVoiture($matricule_voiture, $marque, $model, $type_vitesse, $prix_par_jour, $statut) {
        $sqlState = $this->pdo->prepare("UPDATE `voiture` SET marque_voiture = ?, model = ?, type_vitesse = ?, prix_par_jour = ?, statut = ? WHERE matricule_voiture = ?");
        return $sqlState->execute([$marque, $model, $type_vitesse, $prix_par_jour, $statut, $matricule_voiture]);
    }
}
?>
