<?php require '_top.php';
$q = trim($_GET['q'] ?? '');
$stmt = $pdo->prepare('SELECT * FROM products WHERE name LIKE ? OR category LIKE ? ORDER BY id DESC');
$stmt->execute(["%$q%", "%$q%"]);
$products = $stmt->fetchAll();
?>
<?php if (!empty($_SESSION['flash'])): ?>
  <div class="alert alert-success"><?= e($_SESSION['flash']); unset($_SESSION['flash']); ?></div>
<?php endif; ?>
<div class="d-flex justify-content-between align-items-center mb-3">
  <h4 class="mb-0">Data Produk <span class="badge bg-secondary"><?= count($products) ?></span></h4>
  <a href="create.php" class="btn btn-success">+ Tambah Produk</a>
</div>
<form class="mb-3"><div class="input-group">
  <input name="q" class="form-control" placeholder="Cari nama / kategori..." value="<?= e($q) ?>">
  <button class="btn btn-outline-primary">Cari</button></div></form>
<div class="table-responsive card shadow-sm">
<table class="table table-striped table-hover mb-0 align-middle">
  <thead class="table-dark"><tr><th>#</th><th>Nama</th><th>Kategori</th><th>Harga</th><th>Stok</th><th width="170">Aksi</th></tr></thead>
  <tbody>
  <?php foreach ($products as $i => $r): ?>
    <tr>
      <td><?= $i + 1 ?></td><td><?= e($r['name']) ?></td><td><?= e($r['category']) ?></td>
      <td>Rp <?= number_format($r['price'], 0, ',', '.') ?></td><td><?= (int)$r['stock'] ?></td>
      <td>
        <a href="edit.php?id=<?= $r['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
        <form action="delete.php" method="post" class="d-inline" onsubmit="return confirm('Hapus produk ini?')">
          <input type="hidden" name="id" value="<?= $r['id'] ?>">
          <button class="btn btn-sm btn-danger">Hapus</button>
        </form>
      </td>
    </tr>
  <?php endforeach; ?>
  <?php if (!$products): ?><tr><td colspan="6" class="text-center text-muted">Tidak ada data.</td></tr><?php endif; ?>
  </tbody>
</table>
</div>
<?php require '_bottom.php'; ?>
