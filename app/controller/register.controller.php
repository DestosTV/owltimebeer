<?php

require_once 'app/model/register.model.php';

function generateRegisterPage() {
    $data = [
        'css' => 'register.css',
        'page_title' => "Inscription - Owl Time",
        'view' => 'app/view/register.view.php',
        'layout' => 'app/view/common/layout.php',
    ];
    generatePage($data);
}

function register() {
    $pdo = getDatabaseConnexion();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'] ?? '';
        $lastname = $_POST['lastname'] ?? '';
        $firstname = $_POST['firstname'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $password_confirm = $_POST['password_confirm'] ?? '';

        if (empty($username) || empty($lastname) || empty($firstname) || empty($email) || empty($password) || empty($password_confirm)) {
            renderRegisterError("Veuillez remplir tous les champs.");
            return;
        }

        if ($password !== $password_confirm) {
            renderRegisterError("Les mots de passe ne correspondent pas.");
            return;
        }

        if (getUserByUsername($pdo, $username)) {
            renderRegisterError("Le nom d'utilisateur est déjà pris.");
            return;
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $userData = [
            'username' => $username,
            'lastname' => $lastname,
            'firstname' => $firstname,
            'email' => $email,
            'password' => $hashedPassword
        ];

        if (insertUser($pdo, $userData)) {
            renderRegisterSuccess("Compte créé avec succès ! Vous pouvez maintenant vous connecter.");
        } else {
            renderRegisterError("Erreur lors de la création du compte. Veuillez réessayer.");
        }
    } else {
        header('Location: ?route=register');
        exit();
    }
}

function renderRegisterError($message) {
    $_SESSION['flash'] = $message;
    header('Location: ?route=register');
    exit();
}

function renderRegisterSuccess($message) {
    $_SESSION['flash'] = $message;
    header('Location: ?route=login');
    exit();
}