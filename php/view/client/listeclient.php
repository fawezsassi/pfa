

<?php
$title="CLIENT";

ob_start();



?>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>id_utiisateur</th>  
            <th>nom</th>  
            <th>prenom</th>  
            <th>email</th>  
            <th>mot_de_passe</th>  
            
            <th>num_tel</th> 
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($clients as $client):?>
            <tr>
                <td><?= $client->id_utiisateur?></td>  
                <td><?= $client->nom?></td>  
                <td><?= $client->prenom?></td>  
                <td><?= $client->email?></td>  
                <td><?= $client->mot_de_passe?></td>  
               
                <td><?= $client->num_tel?></td> 
                <td><a href="../../pfa/php/liste.php?controller=client&action=edit&id_utiisateur=<?php echo $client->id_utiisateur?>" class="btn btn-success">MODIFY</a></td>
                <td><a href="../../pfa/php/liste.php?controller=client&action=delete&id_utiisateur=<?php echo $client->id_utiisateur?>" class="btn btn-danger">DELETE</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php $content=ob_get_clean();?>
<?php include_once 'view/includes/layouts.php';?>
