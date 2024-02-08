<?php

namespace Database;

use PDO;
use PDOException;

class Database
{
    /*private $pdo;

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
    }*/

    private $dbname;
    private $host;
    private $port;
    private $username;
    private $password;
    private $pdo;

    public function __construct(string $dbname, string $host, string $port, string $username, string $password)
    {
        $this->dbname = $dbname;
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
    }

    public function getPDO() : PDO
    {
        return $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8;port={$this->port}", $this->username, $this->password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET CHARACTER SET UTF8'
        ]);
    }


}
