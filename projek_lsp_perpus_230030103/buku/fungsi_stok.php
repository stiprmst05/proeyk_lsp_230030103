<?php
// fungsi pengecekan status buku

function cekStok($stok){

if($stok > 0){
return "Tersedia";
}else{
return "Habis";
}

}

?>