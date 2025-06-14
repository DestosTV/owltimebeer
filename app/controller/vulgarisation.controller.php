<?php

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */
function generateVulgarisationPage()
{
    $data = [
        'css' => 'vulgarisation.css',
        'page_title' => "Vulgarisation - Owl Time",
        'view' => 'app/view/vulgarisation.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}