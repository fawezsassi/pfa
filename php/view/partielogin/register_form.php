<?php

require_once "../../connexion/config.php"; // Inclure le fichier connexion.php

try {
   $bd = connexionDB(); // Établir la connexion à la base de données
} catch(PDOException $e) {
   echo "Erreur de connexion : " . $e->getMessage();
}

if(isset($_POST['submit'])){
   // Évitez d'utiliser des fonctions de nettoyage pour la sécurité des requêtes préparées
   $name = $_POST['nom'];
   $prenom = $_POST['prenom'];
   $email = $_POST['email'];
   $pass = md5($_POST['mot_de_passe']); // Utilisez des fonctions de hachage sécurisées pour les mots de passe
   $cpass = md5($_POST['cmot_de_passe']);
   $num_tel = $_POST['num_tel'];

   $select = "SELECT * FROM utilisateur WHERE email = :email AND mot_de_passe = :pass";
   $stmt_select = $bd->prepare($select);
   $stmt_select->execute(array(':email' => $email, ':pass' => $pass));

   if($stmt_select->rowCount() > 0){
      $error[] = 'user already exist!';
   } else {
      if($pass != $cpass){
         $error[] = 'password not matched!';
      } else {
         $insert = "INSERT INTO utilisateur(nom, prenom, email, mot_de_passe, num_tel) VALUES(:name, :prenom, :email, :pass, :num_tel)";
         $stmt_insert = $bd->prepare($insert);
         $stmt_insert->execute(array(':name' => $name, ':prenom' => $prenom, ':email' => $email, ':pass' => $pass, ':num_tel' => $num_tel));
         header('location:login_form.php');
      }
   }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../../../CSS/styles.css">
   <link rel="stylesheet" href="../../../css/style.css">
</head>
<body>
<header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label> 
        <a href="#" class="logo"> VELOCITY <span>.</span></a>
        <nav class="navbar">
          <a href="../../INDEX.php">home</a>
            <a href="../car.php">our cars</a>
           <a href="#">join us</a>
      </nav>
      
    </header>
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="nom" required placeholder="enter your name">
      <input type="text" name="prenom" required placeholder="enter your lastname">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="mot_de_passe" required placeholder="enter your password">
      <input type="password" name="cmot_de_passe" required placeholder="confirm your password">
      <input type="number" name="num_tel" required placeholder="enter your telnumber">
    
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php" class="login_btn">login now</a></p>
   </form>

</div>

</body>
</html>