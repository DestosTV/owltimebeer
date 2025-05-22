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
            <li>
                <div id="left">
                    <ul>
                        <li>Catalogue</li>
                        <li>Vulgarisation</li>
                    </ul>
                </div>
            </li>
            <li>
                <div id="center">
            <li><a href="?route=home"><img id="logo" src="public/images/logo.png" alt="Logo Owl Time"></a></li>
            </div>
            </li>
            <li>
                <div id="right">
                    <ul>
                        <li>Panier</li>
                        <li>Compte</li>
                    </ul>
                </div>
            </li>
        </ul>
    </header>
    <main>