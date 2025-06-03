<?php

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */
function generateTrombiPage() {
    $data = [
        'css' => 'trombi.css',
        'page_title' => "Trombi - Owl Time",
        'view' => 'app/view/trombi.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}