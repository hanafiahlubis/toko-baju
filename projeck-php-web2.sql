CREATE DATABASE toko_baju2;
USE toko_baju2;
CREATE TABLE admin_toko(
	id INT AUTO_INCREMENT PRIMARY KEY,
	user_admin VARCHAR(30),
	pass_admin VARCHAR(30)
);

INSERT INTO admin_toko VALUES ("","hafiz1970@gmail.com","PUB20");

CREATE OR REPLACE TABLE pembukuan(
	id INT AUTO_INCREMENT PRIMARY KEY,
	nama_baju VARCHAR(100),
	stok_terjual INT,
	harga INT,
	total_terjual INT
);
CREATE OR REPLACE TABLE kategori(
	id_kategori INT AUTO_INCREMENT PRIMARY KEY,
	ukuran VARCHAR(3)
);
INSERT INTO kategori VALUES
('','S'),('','M'),('','L'),('','XL');
CREATE OR REPLACE TABLE penjualan(
	id INT AUTO_INCREMENT PRIMARY KEY,
	nama_baju VARCHAR(100),
	harga INT ,
	stok INT,
	pilih_kategori INT,
	gambar VARCHAR(300),
	CONSTRAINT fk_penjualan FOREIGN KEY (pilih_kategori) REFERENCES kategori(id_kategori) 
);

INSERT INTO penjualan VALUES
("","ayana","180000",250,2,"ayana.jpg"),
("","Gamis + Hijab","150000",280,1,"baju gamis.jpg"),
("","Baju Adat Aceh","580000",450,2,"baju-adat-aceh.jpg");
