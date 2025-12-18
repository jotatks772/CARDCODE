<?php

return [
    'connection' => $_ENV['DB_CONNECTION'] ?? 'mongodb',
    'uri' => $_ENV['DB_URI'] ?? 'mongodb://localhost:27017',
    'database' => $_ENV['DB_DATABASE'] ?? 'cryptocard',
];
