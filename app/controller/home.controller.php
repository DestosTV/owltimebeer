<?php

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */
function generateHomePage() {
    $data = [
        'css' => 'home.css',
        'page_title' => "Owl Time",
        'view' => 'app/view/home.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}