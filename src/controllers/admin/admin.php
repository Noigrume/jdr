<?php

// Si l'utilisateur n'est pas connecté
if (!isAuthenticated()) {
    header('Location: ' . buildUrl('/admin/login'));
    exit;
}

require MODELS_DIR . '/post_model.php';

render('admin/admin', [
    'posts' => getAllPosts(),
    'successMessages' => fetchFlashMessages()
]);