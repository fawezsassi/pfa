<?php
require_once "../../connexion/config.php"; // Inclure le fichier connexion.php

$db = connexionDB(); // Établir la connexion à la base de données

session_start();

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $pass = md5($_POST['mot_de_passe']); // Vous devriez éviter d'utiliser MD5 pour le hachage de mot de passe, il est obsolète et peu sûr.

   // Vérifiez si l'utilisateur est un administrateur
   $select_admin = "SELECT * FROM admin WHERE email = :email AND mot_de_passe = :pass";
   $stmt_admin = $db->prepare($select_admin);
   $stmt_admin->execute(array(':email' => $email, ':pass' => $pass));

   if($stmt_admin->rowCount() > 0) {
      $row = $stmt_admin->fetch();
      // L'utilisateur est un administrateur, redirigez vers la page d'administration
      $_SESSION['admin_email'] = $email;
      header('location:../../liste.php?action=liste');
      exit();
   }

   // Vérifiez si l'utilisateur est un utilisateur normal
   $select_user = "SELECT * FROM utilisateur WHERE email = :email AND mot_de_passe = :pass";
   $stmt_user = $db->prepare($select_user);
   $stmt_user->execute(array(':email' => $email, ':pass' => $pass));

   if($stmt_user->rowCount() > 0){
      // L'utilisateur est un utilisateur normal, redirigez vers la page utilisateur
      $row = $stmt_user->fetch();
      $_SESSION['user_name'] = $row['nom'];
      header('location:../../user_page.php');
      exit();
   }
   else{
      $error[] = 'Incorrect email or password!';
   }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../../../CSS/styles.css">
   <link rel="stylesheet" href="../../../CSS/style.css">
</head>
<body>
<header>
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label> 
    <a href="#" class="logo"> VELOCITY <span>.</span></a>
    <nav class="navbar">
        <a href="../../INDEX.php">home</a>
        <a href="../car.php">our cars</a>
        <a href="register_form.php">join us</a>
    </nav>
</header>
<div class="form-container">
   <form action="" method="post">
      <h3>Login Now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="mot_de_passe" required placeholder="Enter your password">
      <input type="submit" name="submit" value="Login Now" class="form-btn">
      <p>Don't have an account? <a href="register_form.php">Register Now</a></p>
   </form>
</div>
</body>
</html>
