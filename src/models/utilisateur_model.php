<?php 

// Inclusion des dépendances
require_once SERVICES_DIR . '/pdo_helpers.php';

/**
 * Fonctions de modèles relatives à la table User
 */

 /**
  * Récupère un enregitrement de la table User à partir d'une adresse email
  */
function getUtilisateurByEmail(string $email)
{
    $sql = 'SELECT * 
            FROM utilisateur
            WHERE email = ?';

    return fetchOneRow($sql, [ $email ]);
}