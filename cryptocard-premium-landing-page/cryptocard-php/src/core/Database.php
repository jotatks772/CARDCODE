<?php

namespace CryptoCard\Core;

use MongoDB\Client;
use MongoDB\Database as MongoDatabase;

class Database
{
    private static ?Database $instance = null;
    private Client $client;
    private MongoDatabase $database;

    private function __construct()
    {
        $uri = $_ENV['DB_URI'] ?? 'mongodb://localhost:27017';
        $dbName = $_ENV['DB_DATABASE'] ?? 'cryptocard';

        try {
            $this->client = new Client($uri);
            $this->database = $this->client->selectDatabase($dbName);
        } catch (\Exception $e) {
            die("Database Connection Error: " . $e->getMessage());
        }
    }

    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getDatabase(): MongoDatabase
    {
        return $this->database;
    }

    public function getCollection(string $collectionName)
    {
        return $this->database->selectCollection($collectionName);
    }
}
