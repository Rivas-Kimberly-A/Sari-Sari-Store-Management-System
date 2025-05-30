<?php
// app/models/User.php
require_once __DIR__ . '/../database.php';

class User {
    private $conn;

    public function __construct() {
        $database = new Database(); // Instantiate the Database class
        $this->conn = $database->conn; // Assign the PDO connection object
    }

    public function getByUsername($username) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        return $stmt->fetch();
    }

    public function getAll() {
        $stmt = $this->conn->query("SELECT * FROM users");
        return $stmt->fetchAll();
    }

    public function create($username, $password, $role) {
        $stmt = $this->conn->prepare("INSERT INTO users (username, password, role) VALUES (?, SHA2(?,256), ?)");
        return $stmt->execute([$username, $password, $role]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM users WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}