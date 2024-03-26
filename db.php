<?php

class Database
{
    private $pdo;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=tasks';
        $username = 'root';
        $password = '';

        try {
            $this->pdo = new PDO($dsn, $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Connection failed: ' . $e->getMessage());
        }
    }

    public function insertUser($name, $surname, $email, $password, $created, $updated)
    {
        $stmt = $this->pdo->prepare('INSERT INTO user (`name`, surname, email, password, created, updated) VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->execute([$name, $surname, $email, $password, $created, $updated]);

        return $this->pdo->lastInsertId();
    }


    public function __destruct()
    {
        $this->pdo = null;
    }
}


