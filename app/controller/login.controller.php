<?php

require_once 'app/model/login.model.php';
require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */
function generateLoginPage() {
    $data = [
        'css' => 'login.css',
        'page_title' => "Connexion - Owl Time",
        'view' => 'app/view/login.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}


function validateLogin() {
    // Cas vide
    if (empty($_POST['login']) || empty($_POST['password'])) {
        $_SESSION['flash'] = "Veuillez saisir votre login et votre mot de passe.";
        header('Location: ?route=login');
        exit;
    }

    // Cas erreur
    if (!$user = authentification($_POST['login'], $_POST['password'])) {
        $_SESSION['flash'] = "Login ou mot de passe incorrect.";
        header('Location: ?route=login');
        exit;
    }
    
    // Cas valide
    $_SESSION['user'] = $user;
    $_SESSION['flash'] = "Vous êtes bien connecté.";
    header('Location: ?route=home');
    exit;
}



function logout() {
    unset($_SESSION['user']);
    $_SESSION['flash'] = "Vous avez été déconnecté.";
    header('Location: ?route=home');
    exit;
}