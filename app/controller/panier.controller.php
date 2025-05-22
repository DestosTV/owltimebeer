<?php

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */
function generatePanierPage() {
    $data = [
        'css' => 'panier.css',
        'page_title' => "Votre panier - Owl Time",
        'view' => 'app/view/panier.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}