<?php

require_once 'app/model/model.php';

function generateFichePage() {
    if (!isset($_GET['id'])) {
        header('Location: ?route=trombinoscope');
        exit;
    }
    $personne = getPersonById((int)$_GET['id']);
    if (!$personne) {
        header('Location: ?route=trombinoscope');
        exit;
    }
    $data = [
        'css' => 'fiche.css',
        'page_title' => "Fiche de " . htmlspecialchars($personne['name']),
        'view' => 'app/view/fiche.view.php',
        'layout' => 'app/view/common/layout.php',
        'personne' => $personne,
    ];

    generatePage($data);
}