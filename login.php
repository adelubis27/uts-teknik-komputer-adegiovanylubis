<?php
require 'config.php';
if (!empty($_SESSION['admin'])) { header('Location: admin/index.php'); exit; }
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare('SELECT * FROM admins WHERE username = ?');
    $stmt->execute([trim($_POST['username'] ?? '')]);
    $user = $stmt->fetch();
    if ($user && password_verify($_POST['password'] ?? '', $user['password'])) {
        session_regenerate_id(true);
        $_SESSION['admin'] = $user['username'];
        header('Location: admin/index.php'); exit;
    }
    $error = 'Username atau password salah.';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Admin - My Store</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>body{min-height:100vh;background:linear-gradient(135deg,#1e3c72,#2a5298);}</style>
</head>
<body class="d-flex align-items-center justify-content-center">
<div class="card shadow border-0" style="width:380px">
  <div class="card-body p-4">
    <h4 class="text-center fw-bold mb-1">My Store</h4>
    <p class="text-center text-muted mb-4">Login Admin</p>
    <?php if ($error): ?><div class="alert alert-danger py-2"><?= e($error) ?></div><?php endif; ?>
    <form method="post">
      <div class="mb-3"><label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" required autofocus></div>
      <div class="mb-3"><label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required></div>
      <button class="btn btn-primary w-100">Masuk</button>
    </form>
  </div>
</div>
</body>
</html>
