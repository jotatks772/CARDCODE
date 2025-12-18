<?php

namespace CryptoCard\Controllers;

use CryptoCard\Models\User;

class AuthController
{
    private User $userModel;

    public function __construct()
    {
        $this->userModel = new User();
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function handleRegister()
    {
        $name = htmlspecialchars($_POST['name'] ?? '');
        $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'] ?? '';

        $errors = [];

        if (!$name) $errors[] = "Nome é obrigatório.";
        if (!$email) $errors[] = "Email inválido.";
        if (strlen($password) < 6) $errors[] = "A senha deve ter pelo menos 6 caracteres.";

        if (empty($errors)) {
            if ($this->userModel->create($name, $email, $password)) {
                $_SESSION['flash_success'] = "Cadastro realizado com sucesso! Faça login.";
                header('Location: /login');
                exit;
            } else {
                $errors[] = "Email já cadastrado ou erro no sistema.";
            }
        }

        // Return errors to view (quick and dirty)
        $_SESSION['flash_errors'] = $errors;
        header('Location: /register');
        exit;
    }

    public function handleLogin()
    {
        $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'] ?? '';

        $user = $this->userModel->findByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            // Set Session
            $_SESSION['user_id'] = (string) $user['_id'];
            $_SESSION['user_name'] = $user['name'];
            
            header('Location: /dashboard');
            exit;
        }

        $_SESSION['flash_errors'] = ["Credenciais inválidas."];
        header('Location: /login');
        exit;
    }

    public function logout()
    {
        session_destroy();
        header('Location: /');
        exit;
    }
}
