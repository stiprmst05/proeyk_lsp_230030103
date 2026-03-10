<?php

include "../konfig_koneksi.php";

$id=$_GET['id'];

//menghapus data buku yang ada
mysqli_query($conn,"DELETE FROM buku WHERE id='$id'");

header("Location: hal_daftar.php");

?>