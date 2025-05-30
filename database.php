<?php
// app/database.php
class Database {
    public $conn;

    public function __construct() {
        $host = 'localhost';
        $db   = 'pos_db';      // imong database name
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

        try {
            $this->conn = new PDO($dsn, $user, $pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die('Database connection failed: ' . $e->getMessage());
        }
    }
}