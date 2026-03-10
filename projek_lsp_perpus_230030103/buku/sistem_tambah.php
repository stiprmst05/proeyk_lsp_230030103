<?php

include "../konfig_koneksi.php";

$judul=$_POST['judul'];
$penulis=$_POST['penulis'];
$tahun=$_POST['tahun'];
$stok=$_POST['stok'];

// memasukan data kepada table
mysqli_query($conn,"INSERT INTO buku VALUES(NULL,'$judul','$penulis','$tahun','$stok')");

header("Location: hal_daftar.php");

?>