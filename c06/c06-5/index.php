<?php

use system\Router;
use system\utile\util;

/**
 * constantes
 */
define("PATH_ROOT", dirname($_SERVER['SCRIPT_FILENAME']));
define('BASE_URL', dirname($_SERVER['SERVER_NAME']));

/*
 * Autoloader de classes dans system
 */

 require "vendor/autoload.php";

/**
 * Router
 */
Router::run();
