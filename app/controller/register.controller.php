<?php

/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */
function generateRegisterPage() {
    $data = [
        'css' => 'register.css',
        'page_title' => "Inscription - Owl Time",
        'view' => 'app/view/home.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}

session_start();
require_once 'app/model/register.model.php';

class RegisterController {
    private $userModel;

    public function __construct($pdo) {
        $this->userModel = new UserModel($pdo);
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $lastname = $_POST['lastname'] ?? '';
            $firstname = $_POST['firstname'] ?? '';
            $email = $_POST['email'] ?? '';
            $age = $_POST['age'] ?? '';
            $password = $_POST['password'] ?? '';
            $password_confirm = $_POST['password_confirm'] ?? '';

            // Validate inputs
            if (empty($username) || empty($lastname) || empty($firstname) || empty($email) || empty($age) || empty($password) || empty($password_confirm)) {
                $this->renderRegisterError("Veuillez remplir tous les champs.");
                return;
            }

            if ($password !== $password_confirm) {
                $this->renderRegisterError("Les mots de passe ne correspondent pas.");
                return;
            }

            // Check if username already exists
            if ($this->userModel->getUserByUsername($username)) {
                $this->renderRegisterError("Le nom d'utilisateur est déjà pris.");
                return;
            }

            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Prepare user data for insertion
            $userData = [
                'username' => $username,
                'lastname' => $lastname,
                'firstname' => $firstname,
                'email' => $email,
                'age' => $age,
                'password' => $hashedPassword
            ];

            // Insert user into the database
            if ($this->userModel->insertUser ($userData)) {
                $success_message = "Compte créé avec succès ! Vous pouvez maintenant vous connecter.";
                $this->renderRegisterSuccess($success_message);
            } else {
                $this->renderRegisterError("Erreur lors de la création du compte. Veuillez réessayer.");
            }
        } else {
            // If not POST, redirect to the registration page
            header('Location: index.php?route=register');
            exit();
        }
    }

    private function renderRegisterError($message) {
        // Render the registration form with an error message
        include 'view/register.php';
        $error_message = $message;
    }

    private function renderRegisterSuccess($message) {
        // Render the registration form with a success message
        include 'view/register.php';
        $success_message = $message;
    }
}