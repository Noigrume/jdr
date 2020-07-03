<?php

// Définition de constantes de configuration
define('BDD_HOST', 'localhost');
define('BDD_NAME', 'roll20');
define('BDD_USER', 'root');
define('BDD_PASSWORD', 'conexion');

define('ROOT_DIR', __DIR__);
define('PUBLIC_DIR', ROOT_DIR . '/www');
define('VIEWS_DIR', ROOT_DIR . '/views');
define('MODELS_DIR', ROOT_DIR . '/src/models');
define('SERVICES_DIR', ROOT_DIR . '/src/services');
define('CONTROLLERS_DIR', ROOT_DIR . '/src/controllers');
define('CORE_DIR', ROOT_DIR . '/src/core');
define('CSSPATH', ROOT_DIR . '/www/css/');

// Si on passe par le localhost, il faut ajouter tout le chemin dans les URLs
if ($_SERVER['HTTP_HOST'] === 'localhost' || $_SERVER['HTTP_HOST'] === '127.0.0.1') {
   
   
    define('BASE_URL', '/devweb/roll/www');
}  else if($_SERVER['HTTP_HOST'] === 'luciesimatovic.com') {
    define('BASE_URL', '/roll/www');
}

// Si on est sur le virtual host on ne doit pas mettre le chemin
else {
   define('BASE_URL', '');
}
