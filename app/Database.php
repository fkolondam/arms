<?php

namespace App;

use PDO;
use PDOException;

class Database
{
    private $host;
    private $database;
    private $username;
    private $password;
    private $charset;
    private $options;
    public $connection;

    public function __construct()
    {
        $config = require __DIR__ . '/../config/database.php';
        $this->host = $config['host'];
        $this->database = $config['database'];
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->charset = $config['charset'];
        $this->options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
    }

    public function connect()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->database};charset={$this->charset}";
        try {
            $this->connection = new PDO($dsn, $this->username, $this->password, $this->options);
            return $this->connection;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
}
?>
