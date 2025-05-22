<?php

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