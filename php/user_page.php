<?php
session_start();

// Inclure le fichier connexion.php
require_once 'connexion/config.php';
require_once 'controller/controlerlocation.php';
// Vérifier si l'utilisateur est connecté
if(!isset($_SESSION['user_name'])){
   header('location:view/partielogin/login_form.PHP');
}

// Établir la connexion à la base de données en utilisant la fonction connexionDB()
try {
    $bd = connexionDB();
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
$model = new LocationModel($bd);

// Instancier le contrôleur LocationController en lui passant le modèle LocationModel
$locationController = new LocationController($model);

// Appeler l'action d'ajout si le formulaire est soumis
if (isset($_GET['action']) && $_GET['action'] === 'ajout') {
	// Appeler l'action d'ajout du contrôleur de location
	$locationController->ajoutAction();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Booking Form HTML Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link  rel="stylesheet" href="../CSS/bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="../CSS/header.css"/>
    <link  rel="stylesheet" href="../CSS/U.css" />
</head>

<body>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <form name="location" action="user_page.php?action=ajout" method="post">
												<legend class="form-labe">CHOSE YOUR CAR</legend>
                            <div class="container12">
													
                            </div>
														<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">CIN</span>
										<input class="form-control" type="text" name="cin" placeholder="Enter your cin">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">name</span>
										<input class="form-control" type="text"  name="nom_utiisateur" placeholder="Enter your email">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">EMAIL</span>
										<input class="form-control" type="email" name="email" placeholder="Enter your cin">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">TELEPHONE</span>
										<input class="form-control" type="text"  name="tel" placeholder="Enter your email">
									</div>
								</div>
							</div>
							           <div class="form-group">
                                <span class="form-label">CAR</span>
                                <?php
                                // Requête pour récupérer les marques de voiture depuis la base de données
                                $sql = "SELECT DISTINCT marque_voiture FROM voiture";
                                $result = $bd->query($sql);

                                // Affichage des options dans le menu déroulant
                                echo "<select name='marque_voiture'>";
                                echo "<option value=''>Sélectionner une marque</option>"; // Option par défaut
                                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                    echo "<option value='" . $row['marque_voiture'] . "'>" . $row['marque_voiture'] . "</option>";
                                }
                                echo "</select>";
                                ?>
                            </div>
														<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<span class="form-label">Pickup Date</span>
										<input class="form-control" type="date" name="date_debut" required>
									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<span class="form-label">Pickup Date</span>
										<input class="form-control" type="date" name="date_fin" required>
									</div>
								</div>
						
							</div>
                            <div class="form-btn">
                                <button class="submit-btn" type="submit">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<header>
    <a href="#" class="logo"> VELOCITY <span>.</span></a>
    <span id="content12">welcome  <?php echo $_SESSION['user_name'] ?></span>
    <nav class="navbar">
        <a href="INDEX.php">HOME</a>
        <a href="view/car.php">OUR CARS</a>
        <a href="avis.php">CONTACT</a>
        <a href="view/partielogin/logout_form.php" class="btn">LOG OUT</a>
    </nav>

</header>

</html>
