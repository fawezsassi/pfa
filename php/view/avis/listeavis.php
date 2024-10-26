

<?php
$title="AVIS";

ob_start();



?>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>id-avis</th>  
            <th>cin</th>  
            <th>nom-utilisateur</th>  
            <th>email</th>  
            <th>tel</th>  
            <th>commentaire</th> 
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($aviss as $avis):?>
            <tr>
                <td><?= $avis->id_avis?></td>  
                <td><?= $avis->cin?></td>  
                <td><?= $avis->nom_utiisateur?></td>  
                <td><?= $avis->email?></td>  
                <td><?= $avis->tel?></td>  
                <td><?= $avis->commentaire?></td> 
            
                <td><a href="../../pfa/php/liste.php?controller=avis&action=delete&id_avis=<?php echo $avis->id_avis?>" class="btn btn-danger">DELETE</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php $content=ob_get_clean();?>
<?php include_once 'view/includes/layouts.php';?>