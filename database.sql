CREATE DATABASE IF NOT EXISTS mystore CHARACTER SET utf8mb4;
USE mystore;

CREATE TABLE IF NOT EXISTS admins (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(150) NOT NULL,
  category VARCHAR(80) NOT NULL,
  price INT NOT NULL DEFAULT 0,
  stock INT NOT NULL DEFAULT 0,
  description TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Akun admin: username "admin", password "password"
INSERT INTO admins (username, password) VALUES
('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

INSERT INTO products (name, category, price, stock, description) VALUES
('Smartphone Nova X1 128GB', 'Smartphone', 2999000, 25, 'Layar AMOLED 6.5 inci, baterai 5000 mAh'),
('Smartphone Lumi A5 64GB', 'Smartphone', 1799000, 40, 'Kamera ganda 50MP, pengisian cepat'),
('Laptop Zenbook Air 14', 'Laptop', 9499000, 10, 'Intel Core i5, RAM 8GB, SSD 512GB'),
('Laptop Gaming Raptor 15', 'Laptop', 14999000, 6, 'Ryzen 7, RTX 4050, RAM 16GB'),
('Tablet Tabby 10 inci', 'Tablet', 2399000, 18, 'Layar 10 inci, RAM 4GB, 64GB'),
('Smartwatch FitBand Pro', 'Wearable', 749000, 32, 'Sensor detak jantung dan GPS'),
('Smartband Mi Fit 7', 'Wearable', 399000, 50, 'Tahan air 5ATM, baterai 14 hari'),
('Earbuds Wireless Beat', 'Audio', 299000, 60, 'Bluetooth 5.3, noise cancelling'),
('Headphone Studio Max', 'Audio', 899000, 15, 'Over-ear, bass mendalam'),
('Speaker Bluetooth Boomy', 'Audio', 459000, 28, 'Tahan air IPX7, baterai 12 jam'),
('Power Bank 10000mAh', 'Aksesoris', 189000, 80, 'Fast charging 22.5W'),
('Power Bank 20000mAh', 'Aksesoris', 329000, 45, 'Dual output USB-C dan USB-A'),
('Charger GaN 65W', 'Aksesoris', 259000, 55, '3 port, kompatibel laptop dan HP'),
('Kabel USB-C 1 Meter', 'Aksesoris', 49000, 150, 'Kabel braided tahan lama'),
('Casing Smartphone Armor', 'Aksesoris', 79000, 90, 'Anti benturan, tersedia banyak warna'),
('Tempered Glass Premium', 'Aksesoris', 35000, 200, 'Anti gores 9H'),
('Mouse Wireless Slim', 'Periferal', 119000, 70, 'Silent click, 2.4GHz'),
('Mouse Gaming RGB', 'Periferal', 249000, 35, '7200 DPI, 6 tombol programmable'),
('Keyboard Mechanical TKL', 'Periferal', 549000, 22, 'Blue switch, backlight RGB'),
('Keyboard Wireless Compact', 'Periferal', 229000, 40, 'Bluetooth, multi device'),
('Webcam Full HD 1080p', 'Periferal', 349000, 26, 'Mikrofon bawaan, autofocus'),
('Flashdisk 64GB USB 3.0', 'Penyimpanan', 89000, 100, 'Kecepatan baca hingga 120MB/s'),
('SSD Eksternal 500GB', 'Penyimpanan', 899000, 14, 'USB-C, kecepatan 1000MB/s'),
('Router WiFi 6 AX1800', 'Jaringan', 699000, 17, 'Dual band, 4 antena'),
('Monitor LED 24 inci', 'Monitor', 1649000, 12, 'Full HD IPS, 75Hz, HDMI');
