<?php
class AvisModel {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function listerAvis() {
        return $this->pdo->query('SELECT * FROM avis')->fetchAll(PDO::FETCH_OBJ);
    }

    public function deleteAvis($id_avis) {
        $sqlState = $this->pdo->prepare("DELETE FROM `avis` WHERE id_avis= ?");
        return $sqlState->execute([$id_avis]);
    }
    public function ajouterAvis($cin,$nom_utilisateur, $email, $tel, $commentaire) {
        $sql = "INSERT INTO avis (cin, nom_utiisateur, email, tel,commentaire) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$cin, $nom_utilisateur, $email, $tel, $commentaire]);
    }
   
}
?>
