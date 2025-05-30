<?php
require_once __DIR__ . '/../database.php';

class Product {
    public $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->conn;
    }

    public function all() {
        $stmt = $this->conn->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($name, $price, $quantity) {
        $stmt = $this->conn->prepare("INSERT INTO products (name, price, quantity) VALUES (?, ?, ?)");
        return $stmt->execute([$name, $price, $quantity]);
    }

    public function update($id, $name, $price, $quantity) {
        $stmt = $this->conn->prepare("UPDATE products SET name = ?, price = ?, quantity = ? WHERE id = ?");
        return $stmt->execute([$name, $price, $quantity, $id]);
    }

    public function delete($id) {
        // Check if product has linked sales first
        $checkStmt = $this->conn->prepare("SELECT COUNT(*) FROM sales WHERE product_id = ?");
        $checkStmt->execute([$id]);
        $count = $checkStmt->fetchColumn();

        if ($count > 0) {
            throw new Exception("Cannot delete product. There are existing sales records linked to it.");
        }

        $stmt = $this->conn->prepare("DELETE FROM products WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
