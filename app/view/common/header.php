<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/common.css">
    <?php if (isset($css)): ?>
        <link rel="stylesheet" href="public/css/<?= $css ?>" />
    <?php endif ?>
    <title><?= $page_title ?></title>
</head>

<body>
    <header>
        <ul>
            <div id="left">
                <li>Catalogue</li>
                <li>Vulgarisation</li>
            </div>
            <div id="center">
                <li><a href="?route=home"><img id="logo" src="public/images/logo.png" alt="Logo Owl Time"></a></li>
            </div>
            <div id="right">
                <li>Panier</li>
                <li>Compte</li>
            </div>
        </ul>
    </header>
    <main>