<?php

/**
 * constantes
 */
define("PATH_ROOT", dirname($_SERVER['SCRIPT_FILENAME']));
define('BASE_URL', dirname($_SERVER['SERVER_NAME']));

/**
 * On vérifie l'url
 * Test d'abord sans query String
 * Puis http://localhost:8000/?url=robot
 * 
 */

if (!empty($_GET['url'])) {
    $controllerName = $_GET['url'];
} else {
    $controllerName = 'Accueil';
}

/**
 * Exécution de controlleur à partir du contenu de l'url
 */
require "App/Controllers/$controllerName.php";
$controller =  "\App\Controllers\\" . $controllerName;
$c = new $controller();
$c->index();
