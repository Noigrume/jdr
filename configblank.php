<?php

// Définition de constantes de configuration
define('BDD_HOST', '');
define('BDD_NAME', '');
define('BDD_USER', '');
define('BDD_PASSWORD', '');

define('ROOT_DIR', __DIR__);
define('PUBLIC_DIR', ROOT_DIR . '/www');
define('VIEWS_DIR', ROOT_DIR . '/views');
define('MODELS_DIR', ROOT_DIR . '/src/models');
define('SERVICES_DIR', ROOT_DIR . '/src/services');
define('CONTROLLERS_DIR', ROOT_DIR . '/src/controllers');
define('CORE_DIR', ROOT_DIR . '/src/core');
define('CSSPATH', ROOT_DIR . '/www/css/');

// Si on passe par le localhost, il faut ajouter tout le chemin dans les URLs
if ($_SERVER['HTTP_HOST'] === '' || $_SERVER['HTTP_HOST'] === '127.0.0.1') {
   
   
    define('BASE_URL', '');
}  else if($_SERVER['HTTP_HOST'] === '') {
    define('BASE_URL', '');
}

// Si on est sur le virtual host on ne doit pas mettre le chemin
else {
   define('BASE_URL', '');
}
