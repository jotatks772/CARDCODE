<?php

namespace CryptoCard\Controllers;

use CryptoCard\Models\User;

class AdminController
{
    private User $userModel;

    public function __construct()
    {
        $this->userModel = new User();
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Middleware Check
        if (!isset($_SESSION['user_id']) || ($_SESSION['role'] ?? '') !== 'admin') {
            header('Location: /login');
            exit;
        }
    }

    public function index()
    {
        $pendingUsers = $this->userModel->findAllPending();
        require __DIR__ . '/../views/admin/dashboard.php';
    }

    public function updateStatus()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /admin');
            exit;
        }

        $userId = $_POST['user_id'] ?? '';
        $status = $_POST['status'] ?? '';

        if ($userId && in_array($status, ['approved', 'rejected'])) {
            $this->userModel->updateStatus($userId, $status);
            $_SESSION['flash_success'] = "Usuário " . ($status === 'approved' ? 'aprovado' : 'rejeitado') . " com sucesso.";
        }

        header('Location: /admin');
        exit;
    }
}
