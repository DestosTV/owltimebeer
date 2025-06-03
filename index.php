<?php
session_start();

require_once 'config.php';
require_once 'app/controller/controller.php';
require_once 'app/controller/index.controller.php';
require_once 'app/model/model.php';

$route = 'index';
if (!empty($_GET['route'])) {
    $route = $_GET['route'];
}
switch ($route) {
    case 'home':
        require_once 'app/controller/home.controller.php';
        generateHomePage();
    case 'login':
        require_once 'app/controller/login.controller.php';
        generateLoginPage();
    case 'register':
        require_once 'app/controller/register.controller.php';
        generateRegisterPage();
    case 'catalogue':
        require_once 'app/controller/catalogue.controller.php';
        generateCataloguePage();
    case 'index':
        require_once 'app/controller/index.controller.php';
        generateindexPage();
    case 'panier':
        require_once 'app/controller/panier.controller.php';
        generatePanierPage();
    case 'pay':
        require_once 'app/controller/pay.controller.php';
        generatePayPage();
        break;
    case 'trombi':
        require_once 'app/controller/trombinoscope.controller.php';
        generateTrombiPage();
        break;
    default:
        die();
}

