<?php
startSession();

require MODELS_DIR . '/utilisateur_model.php';

// Si le formulaire a été soumis
if (!empty($_POST)) {
echo("WOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO").
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pseudo = $_POST['pseudo'];
    $ok = true;
    $message = "";

    // On va chercher l'utilisateur dans la base de données à partir de l'email
    $utilisateur = getUtilisateurByEmail($email);

    if ($utilisateur) {

        // L'adresse email existe bien dans la BDD, il faut maintenant vérifier le mot de passe
        if ($password === $utilisateur['password']) {
            $ok = true;
            // Enregistrement de l'utilisateur en session pour le connecter
            userSessionRegister($utilisateur['id'], $utilisateur['email'], $utilisateur['firstname'], $utilisateur['lastname']);
        };
    } else {
        $ok = false;
        $message = "utilisateur inconnu";
    }
}

echo json_encode(
    array(
        'ok' => $ok,
        'messages' => $messages
    )
);
/*
 
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';



    if ( !isset($username) || empty($username) ) {
        $ok = false;
        $messages[] = 'Username cannot be empty!';
    }

    if ( !isset($password) || empty($password) ) {
        $ok = false;
        $messages[] = 'Password cannot be empty!';
    }

    if ($ok) {
        if ($username === 'dcode' && $password === 'dcode') {
            $ok = true;
            $messages[] = 'Successful login!';
        } else {
            $ok = false;
            $messages[] = 'Incorrect username/password combination!';
        }
    }

    */

$username = "Sdz";
$password = "salut";

if (isset($_POST['pseudo']) && isset($_POST['password'])) {

    if ($_POST['pseudo'] == $username && $_POST['password'] == $password) { // Si les infos correspondent...
        session_start();
        $_SESSION['user'] = $username;
        echo "Success";
    } else { // Sinon
        echo "Failed";
    }
}
