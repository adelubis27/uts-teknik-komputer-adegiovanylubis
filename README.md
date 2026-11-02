# My Store - UTS (Admin Login & CRUD Produk)



- Nama: Ade Giovany Lubis
- NIM: 25110094
- Prodi: Teknik Komputer

## Fitur
1. Login Admin berbasis UI (session + `password_verify`).
2. Dashboard admin (redirect otomatis setelah login berhasil) dengan:
   - **Create** produk baru
   - **Update** produk yang sudah ada
   - **Delete** produk yang tidak lagi diproduksi / discontinued
   - Pencarian produk berdasarkan nama/kategori
3. Data dummy 25 produk (toko gadget & aksesoris) di `database.sql`.
4. Halaman admin diproteksi: tanpa login akan diarahkan ke `login.php`.

## Teknologi
PHP Native (PDO), MySQL, Bootstrap 5 (CDN), XAMPP.

## Struktur Folder
```
my-store/
├── admin/
│   ├── _top.php / _bottom.php / _form.php   (layout & form)
│   ├── index.php    (daftar produk / Read)
│   ├── create.php   (tambah produk)
│   ├── edit.php     (ubah produk)
│   └── delete.php   (hapus produk)
├── screenshoot/     (bukti screenshot hasil kerja)
├── config.php       (koneksi database & helper)
├── database.sql     (struktur tabel + 25 data dummy + akun admin)
├── login.php
├── logout.php
└── README.md
```

## Cara Menjalankan
1. Jalankan **Apache** dan **MySQL** di XAMPP.
2. Salin folder project ke `C:\xampp\htdocs\my-store`.
3. Buka `http://localhost/phpmyadmin`, lalu **Import** file `database.sql`.
4. Buka `http://localhost/my-store/login.php`.
5. Login dengan akun:
   - Username: `admin`
   - Password: `password`

## Screenshot
Lihat folder `screenshoot/`:
- `01-login.png` - halaman login
- `02-dashboard.png` - dashboard daftar produk (25+ data)
- `03-create.png` - form tambah produk
- `04-update.png` - form edit produk
- `05-delete.png` - konfirmasi hapus produk

