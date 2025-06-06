<?php

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */
function generateTrombinoscopePage()
{
    $data = [
        'css' => 'trombinoscope.css',
        'page_title' => "Trombinoscope - Owl Time",
        'view' => 'app/view/trombinoscope.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}