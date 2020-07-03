<?php

////////////////////////////////////////
// Inclusion des dépendances si besoin /
////////////////////////////////////////

// Inclusion du fichier d'autoload de Composer
require MODELS_DIR . '/post_model.php';
//require MODELS_DIR . '/comment_model.php';





// Initialisation des variables que l'on souhaite transmettre au template
$email = null;
$error = null;

///////////////////////////////////////////////////////////////
// Traitements : récupérer les données pour afficher 1 article

/**
 * Validation du paramètre postid. On vérifie si il y a un problème :
 *      - si le paramètre postid n'existe pas
 *      - ou bien si sa valeur est vide
 *      - ou bien si ce n'est pas un entier
 */ 

//if(!array_key_exists('postid', $_GET) || empty($_GET['postid']) || !ctype_digit($_GET['postid'])){

  //  echo "Attention : pas de paramètre 'postid' dans l'URL !";
  //  exit;
//}

// récupérer le paramètre postid dans la chaîne de requête (URL)
//$postId = $_GET['postid'];

// Récupération de l'article
//$post = getOnePost($postId);
$posts = getAllPosts();

/////////////////////////////////////////////////////////////
// Affichage : inclusion du fichier de template
render('show_post', [
    'posts' => $posts,
    
]);