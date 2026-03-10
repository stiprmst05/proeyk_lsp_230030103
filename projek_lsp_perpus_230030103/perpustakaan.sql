-- membuat database
CREATE DATABASE perpustakaan;

-- mengaktifkan database
USE perpustakaan;

-- membuat table buku
CREATE TABLE buku(
id INT AUTO_INCREMENT PRIMARY KEY,
judul VARCHAR(100),
penulis VARCHAR(100),
tahun INT,
stok INT
);

-- membuat table user
CREATE TABLE user(
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50),
password VARCHAR(50)
);

-- mengisi data user
INSERT INTO user VALUES
(1,'admin','123');

-- mengisi data buku
INSERT INTO buku (judul,penulis,tahun,stok) VALUES
('Pemrograman PHP','Budi Santoso',2020,10),
('Belajar MySQL','Andi Pratama',2019,8),
('Algoritma dan Struktur Data','Rinaldi Munir',2018,5);

