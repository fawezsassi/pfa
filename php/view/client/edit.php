
<?php
$title="modifier client";

ob_start();

?>
  
  <form  action="../../pfa/php/liste.php?controller=client&action=update" method="post">
  <div class="form-group">
             
               <input type="hidden" name="id_utiisateur" class="form-control" value="<?=$client->id_utiisateur?>">
             </div>
    <div class="form-group">
               <label for="nom">nom</label> 
               <input type="text" name="nom" class="form-control" value="<?=$client->nom?>">
             </div>
             <div class="form-group">
               <label for="prenom">prenom </label> 
               <input type="text" name="prenom" class="form-control" value="<?=$client->prenom?>">
             </div>
             <div class="form-group">
               <label for="email">email </label> 
               <input type="text" name="email" class="form-control" value="<?=$client->email?>">
             </div>
             <div class="form-group">
                <label for="mot_de_passe">mot de passe </label> 
               <input type="text" name="mot_de_passe" class="form-control" value="<?=$client->mot_de_passe?>">
             </div>
            
             <div class="form-group">
               <label for="num_tel">tel </label> 
               <input type="text" name="num_tel" class="form-control" value="<?=$client->num_tel?>">
             </div>
          
             
             <input type="submit" class="btn btn-success my-2" name="modifier" value="MODIF">
</form>
<?php $content=ob_get_clean();?>
<?php include_once 'view/includes/layouts.php';?>