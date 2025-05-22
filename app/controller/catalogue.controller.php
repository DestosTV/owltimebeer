<?php

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */
function generateCataloguePage() {
    $data = [
        'css' => 'catalogue.css',
        'page_title' => "Catalogue - Owl Time",
        'view' => 'app/view/catalogue.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}