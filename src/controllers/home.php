<?php 
startSession();
////////////////////////////////////////
// Inclusion des dépendances si besoin /
////////////////////////////////////////

// Inclusion du fichier d'autoload de Composer
//require MODELS_DIR . '/post_model.php';
$cssItem = 'style.css';
require MODELS_DIR . '/utilisateur_model.php';

// Récupération des articles
//$posts = getAllPosts();

$error= "erreur";


/////////////////////////////////////////////////////////////
// Affichage : inclusion du fichier de template 
render('home', [
   // 'posts' => $posts,
   //'email' => $email,
    'error' => $error
    
]);