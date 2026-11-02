<form method="post" class="card card-body shadow-sm">
  <div class="row g-3">
    <div class="col-md-8"><label class="form-label">Nama Produk</label>
      <input name="name" class="form-control" required value="<?= e($p['name']) ?>"></div>
    <div class="col-md-4"><label class="form-label">Kategori</label>
      <input name="category" class="form-control" required value="<?= e($p['category']) ?>"></div>
    <div class="col-md-6"><label class="form-label">Harga (Rp)</label>
      <input type="number" min="0" name="price" class="form-control" required value="<?= e($p['price']) ?>"></div>
    <div class="col-md-6"><label class="form-label">Stok</label>
      <input type="number" min="0" name="stock" class="form-control" required value="<?= e($p['stock']) ?>"></div>
    <div class="col-12"><label class="form-label">Deskripsi</label>
      <textarea name="description" rows="3" class="form-control"><?= e($p['description']) ?></textarea></div>
  </div>
  <div class="mt-3"><button class="btn btn-primary">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Batal</a></div>
</form>
