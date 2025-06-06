<?php

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */
function generateFichePage() {
    $data = [
        'css' => 'fiche.css',
        'page_title' => "Équipe - Owl Time",
        'view' => 'app/view/fiche.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}