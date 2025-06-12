<?php

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */
function generateindexPage() {
    $data = [
        'css' => 'index.css',
        'page_title' => "Vérification d'âge - Owl Time",
        'view' => 'app/view/index.view.php',
        'layout' => 'app/view/common/layout_age.php',
    ];

    generatePage($data);
}