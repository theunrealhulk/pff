<?php

class Database {
    // Database configuration
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'pm';
    private $dbh;

    public function __construct() {
        // Set up database connection
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            die("Error!: " . $e->getMessage());
        }
    }

    public function getDBH() {
        return $this->dbh;
    }

    public function runQuery($sql, $params = array()) {
        try {
            $stmt = $this->dbh->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            echo ("Error executing query: " . $e->getMessage());
        }
    }
}


// Create a new database configuration instance
$db = new Database();


