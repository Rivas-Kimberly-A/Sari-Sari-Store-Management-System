<?php
require_once __DIR__ . '/../database.php';

class Sale {
    public $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->conn;
    }

    // Get all sales with product name, ordered by sale_date descending
    public function all() {
        $stmt = $this->conn->query("
            SELECT s.*, p.name AS product_name 
            FROM sales s 
            JOIN products p ON s.product_id = p.id 
            ORDER BY s.sale_date DESC
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Create a new sale and update product quantity
    public function create($product_id, $quantity, $price) {
        $total = $quantity * $price;

        // Insert into sales table
        $stmt = $this->conn->prepare("
            INSERT INTO sales (product_id, quantity, price, total) 
            VALUES (?, ?, ?, ?)
        ");
        $stmt->execute([$product_id, $quantity, $price, $total]);

        // Update product quantity (subtract sold quantity)
        $updateStmt = $this->conn->prepare("
            UPDATE products 
            SET quantity = quantity - ? 
            WHERE id = ?
        ");
        $updateStmt->execute([$quantity, $product_id]);
    }

    // Get aggregated sales report data: total quantity and sales per product
    public function getReportData() {
        $sql = "
            SELECT 
                p.name AS product_name, 
                SUM(s.quantity) AS total_quantity, 
                SUM(s.total) AS total_sales
            FROM sales s
            JOIN products p ON s.product_id = p.id
            GROUP BY p.name
            ORDER BY total_quantity DESC
        ";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
