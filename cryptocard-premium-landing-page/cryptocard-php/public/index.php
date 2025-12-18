<?php

require_once __DIR__ . '/../vendor/autoload.php';

use CryptoCard\Controllers\AuthController;
use CryptoCard\Core\Database;
use Dotenv\Dotenv;

// Load Environment Variables
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();

// Basic Router
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Routes
switch ($uri) {
    case '/':
    case '/index.php':
        require __DIR__ . '/../src/views/pages/home.php';
        break;

    case '/login':
        if ($method === 'POST') {
            (new AuthController())->handleLogin();
        } else {
            require __DIR__ . '/../src/views/pages/login.php';
        }
        break;

    case '/register':
        if ($method === 'POST') {
            (new AuthController())->handleRegister();
        } else {
            require __DIR__ . '/../src/views/pages/register.php';
        }
        break;
        
    case '/logout':
        (new AuthController())->logout();
        break;

    case '/dashboard':
        // Auth Check Middleware (Simple)
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }
        require __DIR__ . '/../src/views/pages/dashboard.php';
        break;

    case '/api/recommend':
        if ($method === 'POST') {
            require __DIR__ . '/../src/api/recommend.php';
        } else {
            http_response_code(405);
            echo json_encode(['error' => 'Method Not Allowed']);
        }
        break;

    // Admin Routes
    case '/admin':
        (new \CryptoCard\Controllers\AdminController())->index();
        break;
    
    case '/admin/status':
        (new \CryptoCard\Controllers\AdminController())->updateStatus();
        break;

    default:
        // Serve static assets if they exist (for local php server)
        $file = __DIR__ . $uri;
        if (file_exists($file) && !is_dir($file)) {
            // Get mime type
            $ext = pathinfo($file, PATHINFO_EXTENSION);
            $mimes = [
                'css' => 'text/css',
                'js' => 'application/javascript', 
                'png' => 'image/png',
                'jpg' => 'image/jpeg',
                'svg' => 'image/svg+xml'
            ];
            $mime = $mimes[$ext] ?? 'text/plain';
            header("Content-Type: $mime");
            readfile($file);
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }
        break;
}
