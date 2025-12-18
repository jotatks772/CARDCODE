<?php

namespace CryptoCard\Models;

use CryptoCard\Core\Database;

class User
{
    private $collection;

    public function __construct()
    {
        $this->collection = Database::getInstance()->getCollection('users');
    }

    public function create(string $name, string $email, string $password, string $role = 'user'): bool
    {
        try {
            // Check if email exists
            if ($this->findByEmail($email)) {
                return false;
            }

            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            $result = $this->collection->insertOne([
                'name' => $name,
                'email' => $email,
                'password' => $hashedPassword,
                'role' => $role, // 'user' or 'admin'
                'kyc_status' => 'pending', // 'pending', 'approved', 'rejected'
                'created_at' => new \MongoDB\BSON\UTCDateTime(),
            ]);

            return $result->getInsertedCount() === 1;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function updateStatus(string $userId, string $status): bool
    {
        try {
            $result = $this->collection->updateOne(
                ['_id' => new \MongoDB\BSON\ObjectId($userId)],
                ['$set' => ['kyc_status' => $status]]
            );
            return $result->getModifiedCount() === 1;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function findAllPending(): array
    {
        return $this->collection->find(['kyc_status' => 'pending'])->toArray();
    }

    public function findByEmail(string $email)
    {
        return $this->collection->findOne(['email' => $email]);
    }
}
