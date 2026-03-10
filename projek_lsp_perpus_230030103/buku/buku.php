<?php
// untuk memanggil data buku
class Buku{

public $judul;
public $penulis;
public $tahun;
public $stok;

function __construct($judul,$penulis,$tahun,$stok){

$this->judul=$judul;
$this->penulis=$penulis;
$this->tahun=$tahun;
$this->stok=$stok;

}

function info(){
return $this->judul." - ".$this->penulis;
}

}

?>