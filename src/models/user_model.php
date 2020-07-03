<?php 

// Inclusion des dépendances
require_once SERVICES_DIR . '/pdo_helpers.php';

/**
 * Fonctions de modèles relatives à la table User
 */

 /**
  * Récupère un enregitrement de la table User à partir d'une adresse email
  */
function getUserByEmail(string $email)
{
    $sql = 'SELECT * 
            FROM user
            WHERE email = ?';

    return fetchOneRow($sql, [ $email ]);
}