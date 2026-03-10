<?php
//mengoneksikan program koneksi dan fungsi pengecekan status
include "../konfig_koneksi.php";
include "fungsi_stok.php";
include "../sistem_login.php"

$data=mysqli_query($conn,"SELECT * FROM buku");
?>

<h2>Daftar Buku</h2>

<!-- tampilan table-->

<table border="1">

<tr>
<th>No</th>
<th>Judul</th>
<th>Penulis</th>
<th>Tahun</th>
<th>Stok</th>
<th>Aksi</th>
</tr>

<?php
$no=1;

while($row=mysqli_fetch_array($data)){
$status = cekStok($row['stok']);

?>

<!--memanggil data table-->
<tr>

<td><?php echo $no++; ?></td>
<td><?php echo $row['judul']; ?></td>
<td><?php echo $row['penulis']; ?></td>
<td><?php echo $row['tahun']; ?></td>
<td><?php echo $row['stok']; ?></td>
<td><?php echo $status; ?></td>

<td>

<!-- menghapus data--> 
<a href="sistem_hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>

</td>

</tr>

<?php } ?>

</table>
</br>

<!-- ke halaman tambah buku-->
 <button><a href="hal_tambah.php">Tambah Buku</a></button>