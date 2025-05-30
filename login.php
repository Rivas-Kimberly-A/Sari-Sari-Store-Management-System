<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Sari-Sari Store Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Roboto font from Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
  <style>
    /* Apply Roboto font */
    body, html {
      height: 100%;
      margin: 0;
      overflow: hidden;
      font-family: 'Montserrat', sans-serif;
    }

    .carousel,
    .carousel-inner,
    .carousel-item,
    .carousel-item img {
      height: 100vh;
    }

    .carousel-item img {
      object-fit: cover;
      filter: brightness(0.5);
    }

    .login-form {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 100%;
      max-width: 400px;
      padding: 30px;
      transform: translate(-50%, -50%);
      background: rgba(255, 255, 255, 0.9);
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .login-form h2 {
      font-weight: 700;
    }

    .form-control {
      font-size: 16px;
    }

    .btn-primary {
      font-weight: 600;
    }
  </style>
</head>
<body>

<!-- Carousel Background -->
<div id="loginCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i.pinimg.com/736x/8d/8e/71/8d8e719a147e20f2e45437f21ed9d70c.jpg" class="d-block w-100" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="https://i.pinimg.com/736x/8a/56/0e/8a560e623fcb4c2274bf3abe796d9dee.jpg" class="d-block w-100" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="https://i.pinimg.com/736x/8d/8e/71/8d8e719a147e20f2e45437f21ed9d70c.jpg" class="d-block w-100" alt="Slide 3">
    </div>
    <div class="carousel-item">
      <img src="https://i.pinimg.com/736x/8d/8e/71/8d8e719a147e20f2e45437f21ed9d70c.jpg" class="d-block w-100" alt="Slide 4">
    </div>
  </div>
</div>

<!-- Login Form -->
<div class="login-form bg-light">
  <h2 class="text-center mb-4">Login to Sari-Sari Store Management System</h2>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
