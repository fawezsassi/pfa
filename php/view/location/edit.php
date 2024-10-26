<?php
$title = "modifier location";
ob_start();




?>




<form action="../../pfa/php/liste.php?controller=location&action=update" method="post">
    <div class="form-group">
        <input type="hidden" name="id_location" class="form-control" value="<?= $location->id_location ?>">
    </div>
    <div class="form-group">
        <label for="cin">cin</label>
        <input type="text" name="cin" class="form-control" value="<?= $location->cin ?>">
    </div>
    <div class="form-group">
        <label for="nom_utilisateur">nom_utilisateur</label>
        <input type="text" name="nom_utiisateur" class="form-control" value="<?= $location->nom_utiisateur ?>">
    </div>
    <div class="form-group">
        <label for="email">email</label>
        <input type="text" name="email" class="form-control" value="<?= $location->email ?>">
    </div>
    <div class="form-group">
        <label for="tel">tel</label>
        <input type="text" name="tel" class="form-control" value="<?= $location->tel ?>">
    </div>
    <div class="form-group">
        <label for="marque_voiture">marque_voiture</label>
        <input type="text" name="marque_voiture" class="form-control" value="<?= $location->marque_voiture ?>">
    </div>
    <div class="form-group">
        <label for="date_debut">date_debut</label>
        <input type="date" name="date_debut" class="form-control" value="<?= $location->date_debut ?>">
    </div>
    <div class="form-group">
        <label for="date_fin">date_fin</label>
        <input type="date" name="date_fin" class="form-control" value="<?= $location->date_fin ?>">
    </div>
    
    <input type="submit" class="btn btn-success my-2" name="modifier" value="modify">
    <?php


?>

</form>

<?php $content = ob_get_clean(); ?>
<?php include_once 'view/includes/layouts.php'; ?>
