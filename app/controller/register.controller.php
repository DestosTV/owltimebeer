<?php

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */
function generateRegisterPage() {
    $data = [
        'css' => 'register.css',
        'page_title' => "Inscription - Owl Time",
        'view' => 'app/view/home.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}