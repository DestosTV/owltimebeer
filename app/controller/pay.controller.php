<?php

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */
function generatePayPage() {
    $data = [
        'css' => 'pay.css',
        'page_title' => "Paiement - Owl Time",
        'view' => 'app/view/pay.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}