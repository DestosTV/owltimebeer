<?php

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */
function generateTrombinoscopePage()
{

    $personnes = getAllPerson();

    $data = [
        'css' => 'trombinoscope.css',
        'page_title' => "Trombinoscope - Owl Time",
        'view' => 'app/view/trombinoscope.view.php',
        'layout' => 'app/view/common/layout.php',
        'personnes' => $personnes,
    ];

    generatePage($data);
}

require_once 'app/model/model.php';
