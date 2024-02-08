<?php

namespace Database;

use PDO;
use PDOException;

class Database
{
    private $pdo;

    public function __construct()
    {
        $dbHost = $_ENV['DB_HOST'];
        $dbPort = $_ENV['DB_PORT'];
        $dbName = $_ENV['DB_NAME'];
        $dbUser = $_ENV['DB_USER'];
        $dbPassword = $_ENV['DB_PASSWORD'];
        $dbCharset = $_ENV['DB_CHARSET'];

        $dsn = "mysql:host=$dbHost:$dbPort;dbname=$dbName;charset=$dbCharset";

        try {
            $this->pdo = new \PDO($dsn, $dbUser, $dbPassword);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
            die();
        }
    }

    public function getPdo()
    {
        return $this->pdo;
    }
}
