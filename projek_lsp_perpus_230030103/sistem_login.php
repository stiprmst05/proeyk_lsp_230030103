<?php

session_start();
include "konfig_koneksi.php";

// memanggil data login
$user = $_POST['username'];
$pass = $_POST['password'];

// menjalankan query untuk mengecek apakah username dan password ada di database
$data = mysqli_query($conn,"SELECT * FROM user WHERE username='$user' AND password='$pass'");


// menentukan apakah login berhasil atau tidak
if(mysqli_num_rows($data)>0){

$_SESSION['login']=true;

header("Location: hal_daftar.php");

}else{

echo "Login gagal";

}

?>