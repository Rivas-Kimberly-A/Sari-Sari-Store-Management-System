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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Google Fonts: Poppins (modern, clean font) -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

  <style>
    body {
      background-color: #ffffff;
      color: #000000;
      font-family: 'Poppins', sans-serif;
    }

    .navbar {
      background-color: #008080 !important; /* Teal navbar */
    }

    .navbar-brand {
      font-weight: 600;
      font-size: 1.8rem;
      color: white !important;
      font-family: 'Poppins', sans-serif;
    }

    .navbar-nav .nav-link,
    .navbar-text {
      color: white !important;
      font-weight: 500;
    }

    .btn-teal {
      background-color: #008080;
      color: white;
      border: none;
      font-weight: 500;
    }

    .btn-teal:hover,
    .btn-teal:focus {
      background-color: #006666;
      color: white;
    }

    .btn-outline-light.btn-sm {
      border-color: white;
      color: white;
      font-weight: 500;
    }

    .btn-outline-light.btn-sm:hover {
      background-color: white;
      color: #008080;
    }

    .table th,
    .table td {
      background-color: white;
      color: #000;
    }

    .card {
      border: 1px solid #008080;
      font-family: 'Poppins', sans-serif;
    }

    .card .card-title {
      color: #008080;
      font-weight: 600;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php?page=dashboard">Sari-Sari Store Management System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php if (isset($_SESSION['user_id'])): ?>
    <div class="collapse navbar-collapse" id="navbarsExample07">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="index.php?page=dashboard">Dashboard</a></li>

        <?php if ($_SESSION['role'] === 'admin'): ?>
        <li class="nav-item"><a class="nav-link" href="index.php?page=user">Users</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?page=product_admin">Products</a></li>
        <?php endif; ?>

        <li class="nav-item"><a class="nav-link" href="index.php?page=sales">Sales</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?page=sales_report">Sales Report</a></li>
      </ul>

      <span class="navbar-text me-3">
        Logged in as <strong><?= htmlspecialchars($_SESSION['username']) ?></strong> (<?= htmlspecialchars($_SESSION['role']) ?>)
      </span>
      <a href="index.php?page=logout" class="btn btn-outline-light btn-sm">Logout</a>
    </div>
    <?php endif; ?>
  </div>
</nav>

<div class="container mt-4">
