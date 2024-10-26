

<?php
$title=" RESERVATION";

ob_start();



?>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>id_location</th>  
            <th>cin</th>  
            <th>nom_utiisateur</th>  
            <th>email</th>  
            <th>tel</th>  
            <th>marque_voiture</th> 
            <th>date_debut</th> 
            <th>date_fin</th> 
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($locations as $location):?>
            <tr>
                <td><?= $location->id_location?></td>  
                <td><?= $location->cin?></td> 
                <td><?= $location->nom_utiisateur?></td> 
                <td><?= $location->email?></td> 
                <td><?= $location->tel?></td> 
                <td><?= $location->marque_voiture?></td> 
                <td><?= $location->date_debut?></td> 
                <td><?= $location->date_fin?></td> 
                <td><a href="../../pfa/php/liste.php?controller=location&action=edit&id_location=<?php echo $location->id_location?>" class="btn btn-success">MODIFY</a></td>
                <td><a href="../../pfa/php/liste.php?controller=location&action=delete&id_location=<?php echo $location->id_location?>" class="btn btn-danger">DELETE</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php $content=ob_get_clean();?>
<?php include_once 'view/includes/layouts.php';?>