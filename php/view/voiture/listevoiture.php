

<?php
$title="VOITURE";

ob_start();



?>
 <a href="../../pfa/php/liste.php?action=create" class="btn btn-primary" >ADD voiture</a>
<table class="table table-hover table-bordered table-striped">
    <thead class="tr">
        <tr >
            <th >matricule_voiture</th>  
            <th>marque_voiture</th>  
            <th>model</th>  
            <th>type_vitesse</th>  
            <th>prix_par_jour</th>  
            <th>statut</th> 
            <th>MODIFY</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($voitures as $voiture):?>
            <tr>
                <td><?= $voiture->matricule_voiture?></td>  
                <td><?= $voiture->marque_voiture?></td>  
                <td><?= $voiture->model?></td>  
                <td><?= $voiture->type_vitesse?></td>  
                <td><?= $voiture->prix_par_jour?></td>  
                <td><?= $voiture->statut?></td> 
                <td><a href="../../pfa/php/liste.php?controller=voiture&action=edit&matricule_voiture=<?php echo $voiture->matricule_voiture?>" class="btn btn-success">MODIFY</a></td>
                <td><a href="../../pfa/php/liste.php?controller=voiture&action=delete&matricule_voiture=<?php echo $voiture->matricule_voiture?>" class="btn btn-danger">DELETE</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php $content=ob_get_clean();?>
<?php include_once 'view/includes/layouts.php';?>