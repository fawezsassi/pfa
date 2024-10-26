<?php
class LocationModel {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function listerLocations() {
        return $this->pdo->query('SELECT * FROM location')->fetchAll(PDO::FETCH_OBJ);
    }

    public function ajouterLocation($cin, $nom_utilisateur, $email, $tel, $marque_voiture, $date_debut, $date_fin) {
        $sql = "INSERT INTO location (cin, nom_utiisateur, email, tel, marque_voiture, date_debut, date_fin) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$cin, $nom_utilisateur, $email, $tel, $marque_voiture, $date_debut, $date_fin]);
    }

    public function deleteLocation($id_location) {
        $sqlState = $this->pdo->prepare("DELETE FROM `location` WHERE id_location= ?");
        return $sqlState->execute([$id_location]);
    }

    public function getLocationById($id_location) {
        $sqlState = $this->pdo->prepare("SELECT * FROM `location` WHERE id_location= ?");
        $sqlState->execute([$id_location]);
        return $sqlState->fetch(PDO::FETCH_OBJ);
    }

    public function updateLocation($id_location, $cin, $nom_utilisateur, $email, $tel, $marque_voiture, $date_fin) {
        $sqlState = $this->pdo->prepare("UPDATE `location` SET cin = ?, nom_utiisateur = ?, email = ?, tel = ?, marque_voiture = ?, date_fin = ? WHERE id_location = ?");
        return $sqlState->execute([$cin, $nom_utilisateur, $email, $tel, $marque_voiture, $date_fin, $id_location]);
    }
}
?>
