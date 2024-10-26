<?php

require_once "../../connexion/config.php";

try {
   $bd = connexionDB(); 
} catch(PDOException $e) {
   echo "Erreur de connexion : " . $e->getMessage();
}
session_start();
session_unset();
session_destroy();

header('location:login_form.php');

?>