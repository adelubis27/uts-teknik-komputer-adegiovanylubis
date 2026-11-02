<?php require_once __DIR__ . '/../config.php'; require_login(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard Admin - My Store</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="index.php">My Store &middot; Admin</a>
    <div class="text-white">Halo, <b><?= e($_SESSION['admin']) ?></b>
      <a href="../logout.php" class="btn btn-sm btn-outline-light ms-3">Logout</a></div>
  </div>
</nav>
<div class="container pb-5">
