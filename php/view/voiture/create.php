
<?php
$title="Add voiture";

ob_start();
?>
  
  <form  action="../../pfa/php/liste.php?action=ajout" method="post">
    <div class="form-group">
               <label for="marque_voiture">marque</label> 
               <input type="text" name="marque_voiture" class="form-control" value="">
             </div>
             <div class="form-group">
               <label for="model ">model </label> 
               <input type="text" name="model" class="form-control" value="">
             </div>
             <div class="form-group">
               <label for="type_vitesse">type_vitesse </label> 
               <input type="text" name="type_vitesse" class="form-control" value="">
             </div>
             <div class="form-group">
                <label for="prix_par_jour">prix_par_jour</label> 
               <input type="text" name="prix_par_jour" class="form-control" value="">
             </div>
            
             <div class="form-group">
               <label for="statut ">statut </label> 
               <input type="text" name="statut" class="form-control" value="">
             </div>
          
             
             <input type="submit" class="btn btn-success my-2" name="ajouter" value="ADD">
</form>
<?php $content=ob_get_clean();?>
<?php include_once 'view/includes/layouts.php';?>