<?php include __DIR__ . '/../../layout/header.php'; ?>

<h2>Add User</h2>
<form method="POST" action="">
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" id="username" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <select name="role" id="role" class="form-select" required>
            <option value="admin">Admin</option>
            <option value="cashier">Cashier</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Add User</button>
</form>

<?php include __DIR__ . '/../../layout/footer.php'; ?>