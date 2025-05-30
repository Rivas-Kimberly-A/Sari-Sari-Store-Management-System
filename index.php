<?php include __DIR__ . '/../layout/header.php'; ?>

<h2>Users</h2>
<a href="index.php?page=user_create" class="btn btn-primary mb-3">Add User</a>

<table class="table table-bordered">
<thead>
  <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Role</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>
  <?php foreach ($users as $u): ?>
  <tr>
    <td><?= $u['id'] ?></td>
    <td><?= htmlspecialchars($u['username']) ?></td>
    <td><?= htmlspecialchars($u['role']) ?></td>
    <td>
      <a href="index.php?page=user_delete&id=<?= $u['id'] ?>" class="btn btn-success btn-sm" onclick="return confirm('Delete user?')">Delete</a>
    </td>
  </tr>
  <?php endforeach; ?>
</tbody>
</table>

<?php include __DIR__ . '/../layout/footer.php'; ?>