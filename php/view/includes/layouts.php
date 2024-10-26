<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../CSS/admin.css">
</head>

<body>

<header>
       
      
        <a href="#" class="logo"> VELOCITY </a>
        <nav class="navbar">
          <a href="../php/INDEX.php">HOME</a>
            <a href="view/car.php">OUR CARS</a>
			<a href="view/partielogin/logout_form.php" >LOG OUT</a>
    

      </nav>
      
    </header>



    <div class="container">
    <h2 class="crud" id="b"><?=$title ?></h2>
    <a href="liste.php?controller=location&action=liste" class="crud">Liste des réservations</a>
    <a href="liste.php?controller=client&action=liste" class="crud">Liste des clients</a>
    <a href="liste.php?controller=voiture&action=liste" class="crud">Liste des voitures</a>
    <a href="liste.php?controller=avis&action=liste" class="crud">Liste des avis</a>
</div>

   <hr>
    <?= $content ?>
  


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>
</body>
</html>