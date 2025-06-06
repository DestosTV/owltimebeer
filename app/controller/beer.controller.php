<?php

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */
function generateBeerPage() {
    $data = [
        'css' => 'beer.css',
        'page_title' => "Bière - Owl Time",
        'view' => 'app/view/beer.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}