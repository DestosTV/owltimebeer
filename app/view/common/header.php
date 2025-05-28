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
        <nav>
            <ul class="header">
                <li class="left">
                    <a href="?route=catalogue">Catalogue</a>
                    <a href="?route=vulgarisation">Vulgarisation</a>
                </li>
                <li class="center">
                    <a href="?route=home"><img id="logo" src="public/images/logo.png" alt="Logo Owl Time" /></a>
                </li>
                <li class="right">
                    <a href="?route=panier">Panier</a>
                    <a href="?route=login">Compte</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>