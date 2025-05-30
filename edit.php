<?php include __DIR__ . '/../layout/header.php'; ?>

<style>
  .edit-form-container {
    max-width: 400px;
    margin: 40px auto;
    border: 1px solid #008080;
    border-radius: 8px;
    padding: 20px;
    background-color: #fff;
  }

  label {
    display: block;
    margin-top: 15px;
    color: #008080;
    font-weight: bold;
  }

  input[type="text"],
  input[type="number"] {
    width: 100%;
    padding: 8px;
    margin-top: 6px;
    border: 1px solid #008080;
    border-radius: 4px;
    box-sizing: border-box;
  }

  .btn-teal {
    margin-top: 20px;
    background-color: #008080;
    border: none;
    padding: 10px 15px;
    color: white;
    cursor: pointer;
    border-radius: 4px;
    font-size: 1rem;
    width: 100%;
    transition: background-color 0.3s;
  }

  .btn-teal:hover {
    background-color: #006666;
  }

  .btn-cancel {
    margin-top: 10px;
    background-color: #ccc;
    border: none;
    padding: 10px 15px;
    color: #333;
    cursor: pointer;
    border-radius: 4px;
    font-size: 1rem;
    width: 100%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
  }

  .btn-cancel:hover {
    background-color: #aaa;
  }
</style>

<h2 style="text-align:center; color:#008080;">Edit Product</h2>

<div class="edit-form-container">
  <form method="POST" action="index.php?page=product_admin_edit&id=<?= htmlspecialchars($product['id']) ?>">
    <label for="name">Product Name</label>
    <input type="text" id="name" name="name" required value="<?= htmlspecialchars($product['name']) ?>" />

    <label for="price">Price (₱)</label>
    <input type="number" step="0.01" id="price" name="price" required value="<?= htmlspecialchars($product['price']) ?>" />

    <label for="quantity">Quantity</label>
    <input type="number" id="quantity" name="quantity" required value="<?= htmlspecialchars($product['quantity']) ?>" />

    <button type="submit" class="btn-teal">Save Changes</button>
  </form>

  <a href="index.php?page=product_admin" class="btn-cancel">Cancel</a>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
