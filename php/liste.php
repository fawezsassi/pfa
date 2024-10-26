<?php
require_once 'connexion/config.php';

// Connexion à la base de données
try {
    $db = connexionDB();
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit;
}


$controllers = [
    'client' => 'controlerClient.php',
    'voiture' => 'controlerVoiture.php',
    'location' => 'controlerLocation.php',
    'avis' => 'controlerAvis.php',
];


$controller_default = 'voiture';


$controller = isset($_GET['controller']) && array_key_exists($_GET['controller'], $controllers) ? $_GET['controller'] : $controller_default;


require_once "controller/{$controllers[$controller]}";


$modelFile = "model/" . ucfirst($controller) . ".php";
if (file_exists($modelFile)) {
    require_once $modelFile;
} else {
    die("Le fichier modèle $modelFile est introuvable.");
}


$modelClass = ucfirst($controller) . 'Model';
$controllerClass = ucfirst($controller) . 'Controller';

if (class_exists($modelClass) && class_exists($controllerClass)) {
    $model = new $modelClass($db);
    $controller = new $controllerClass($model);
} else {
    die("La classe $modelClass ou $controllerClass est introuvable.");
}


$action = isset($_GET['action']) ? $_GET['action'] : 'liste';


switch ($action) {
    case 'liste':
        $controller->listeAction();
        break;
    case 'create':
        $controller->createAction();
        break;
    case 'delete':
        $controller->deleteAction();
        break;
    case 'ajout':
        $controller->ajoutAction();
        break;
    case 'edit':
        $controller->editAction();
        break;
    case 'update':
        $controller->updateAction();
        break;
    default:
        echo "Action non reconnue.";
        break;
}
?>
