<?php include __DIR__ . '/../layout/header.php'; ?>

<style>
  .container {
    max-width: 900px;
    margin: 20px auto;
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    justify-content: center;
  }

  .card {
    width: 200px;
    min-height: 150px;
    border: 1px solid #008080;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 128, 128, 0.2);
    background-color: #fff;
    padding: 15px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .card-title {
    font-size: 1.1rem;
    color: #008080;
    font-weight: bold;
    margin-bottom: 10px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  .card-text {
    font-size: 0.9rem;
    margin: 4px 0;
  }

  .btn-teal {
    padding: 6px 10px;
    background-color: #008080;
    border: none;
    border-radius: 4px;
    color: white;
    cursor: pointer;
    font-size: 0.85rem;
    transition: background-color 0.3s;
    user-select: none;
    text-decoration: none;
    margin-top: 5px;
    display: inline-block;
  }

  .btn-teal:hover {
    background-color: #006666;
  }

  .btn-danger {
    background-color: #dc3545;
    border: none;
    border-radius: 4px;
    color: white;
    cursor: pointer;
    font-size: 0.85rem;
    padding: 6px 10px;
    margin-top: 5px;
    transition: background-color 0.3s;
    user-select: none;
    text-decoration: none;
    display: inline-block;
  }

  .btn-danger:hover {
    background-color: #b02a37;
  }

  .btn-group {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
  }
</style>

<h2 style="text-align: center; color: #008080;">Products</h2>

<div class="container">
  <?php foreach ($products as $product): ?>
    <div class="card">
      <div class="card-title" title="<?= htmlspecialchars($product['name']) ?>"><?= htmlspecialchars($product['name']) ?></div>
      <div class="card-text">Price: ₱<?= number_format($product['price'], 2) ?></div>
      <div class="card-text">Quantity: <?= (int)$product['quantity'] ?></div>
      <div class="btn-group">
        <a href="index.php?page=product_admin_edit&id=<?= $product['id'] ?>" class="btn-teal">Edit</a>
        <a href="index.php?page=product_admin_delete&id=<?= $product['id'] ?>" class="btn-danger" onclick="return confirm('Delete this product?')">Delete</a>
      </div>
    </div>
  <?php endforeach; ?>

  <!-- Add new product card -->
  <div class="card" style="text-align: center;">
    <div class="card-title">Add New Product</div>
    <div class="card-text">Click below to add a new product</div>
    <a href="index.php?page=product_admin_create" class="btn-teal" style="margin-top: 20px;">Add Product</a>
  </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
