<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sari-Sari Store Management System</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Google Fonts: Great Vibes -->
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet" />

  <style>
    body, html {
      height: 100%;
      margin: 0;
    }

    .full-cover {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: url('https://i.pinimg.com/736x/0f/94/b0/0f94b05fc2692d121f7d9fc5cad08283.jpg') no-repeat center center;
      background-size: cover;
      position: relative;
    }

    .overlay {
      background-color: rgba(0, 0, 0, 0.6); /* dark overlay */
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
    }

    .cover-content {
      position: relative;
      color: white;
      text-align: center;
      z-index: 1;
    }

    .great-vibes {
      font-family: 'Great Vibes', cursive;
      font-size: 10rem;
    }

    .btn {
      min-width: 120px;
    }

    /* Offcanvas custom background */
    #loginSidebar .offcanvas-body {
      background: url('https://i.pinimg.com/736x/8d/8e/71/8d8e719a147e20f2e45437f21ed9d70c.jpg') no-repeat center center;
      background-size: cover;
      padding: 2rem;
      color: white;
    }

    #loginSidebar form {
      background-color: rgba(0, 0, 0, 0.6);
      padding: 20px;
      border-radius: 10px;
    }

    #loginSidebar label {
      color: #fff;
    }

    .btn-teal {
    background-color: #008080;
    color: white;
    border: none;
  }

  .btn-teal:hover,
  .btn-teal:focus {
    background-color: #006666;
    color: white;
  }
  </style>
</head>
<body>

<!-- Cover Section -->
<div class="full-cover">
  <div class="overlay"></div>
  <div class="cover-content">
    <h1 class="mb-4"><span class="great-vibes">Sari-Sari Store</span></h1>
    <p class="mb-4 fs-4">Management System</p>
    <p class="mb-4">Welcome! Please log in to continue:</p>
    <button class="btn btn-primary me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#loginSidebar">
      Login
    </button>
  </div>
</div>

<!-- Offcanvas Sidebar Login -->
<div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="loginSidebar">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Login</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <?php if (isset($error)): ?>
      <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <form method="POST" action="index.php?page=login">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" id="username" class="form-control" required />
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" required />
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
