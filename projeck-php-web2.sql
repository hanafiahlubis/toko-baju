CREATE DATABASE toko_baju2;
USE toko_baju2;

CREATE TABLE admin_toko(
	id INT AUTO_INCREMENT PRIMARY KEY,
	user_admin VARCHAR(30),
	pass_admin VARCHAR(30)
);
CREATE TABLE user_pembeli(
	id INT AUTO_INCREMENT PRIMARY KEY,
	nama VARCHAR(30),
	email VARCHAR(30),
	user_pem VARCHAR(30),
	pass_pem VARCHAR(30)
);

CREATE TABLE pembukuan(
	id INT AUTO_INCREMENT PRIMARY KEY,
	nama_barang VARCHAR(100),
	harga INT,
	stok INT,
	total_terjual INT,
	stok_berkurang INT
);

CREATE TABLE penjualan(
	id INT AUTO_INCREMENT PRIMARY KEY,
	nama_barang VARCHAR(100),
	harga INT ,
	stok INT
);
