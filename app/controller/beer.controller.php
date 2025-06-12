<?php

require_once 'app/model/model.php';

function generateBeerPage() {
    if (!isset($_GET['id'])) {
        header('Location: ?route=catalogue');
        exit;
    }
    $biere = getBeerById((int)$_GET['id']);
    if (!$biere) {
        header('Location: ?route=catalogue');
        exit;
    }
    $data = [
        'css' => 'beer.css',
        'page_title' => "Bière - " . htmlspecialchars($biere['name']),
        'view' => 'app/view/beer.view.php',
        'layout' => 'app/view/common/layout.php',
        'biere' => $biere,
    ];

    generatePage($data);
}