<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
        break;
    case 'login':
        require_once 'app/controller/login.controller.php';
        generateLoginPage();
        break;
    case 'vallogin':
        require_once "app/controller/login.controller.php";
        validateLogin();
        break;
    case 'register':
        require_once 'app/controller/register.controller.php';
        generateRegisterPage();
        break;
    case 'valregister':
        require_once "app/controller/register.controller.php";
        register();
        break;
    case 'catalogue':
        require_once 'app/controller/catalogue.controller.php';
        generateCataloguePage();
        break;
    case 'index':
        require_once 'app/controller/index.controller.php';
        generateindexPage();
        break;
    case 'panier':
        require_once 'app/controller/panier.controller.php';
        generatePanierPage();
        break;
    case 'pay':
        require_once 'app/controller/pay.controller.php';
        generatePayPage();
        break;
    case 'trombinoscope':
        require_once 'app/controller/trombinoscope.controller.php';
        generateTrombinoscopePage();
        break;
    case 'fiche':
        require_once 'app/controller/fiche.controller.php';
        generateFichePage();
        break;
    case 'beer':
        require_once 'app/controller/beer.controller.php';
        generateBeerPage();
        break;
    case 'vulgarisation':
        require_once 'app/controller/vulgarisation.controller.php';
        generateVulgarisationPage();
        break;
    default:
        die();
}