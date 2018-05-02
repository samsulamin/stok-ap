<?php
include "koneksi.php";

$koneksiObj = new koneksi();
$koneksi = $koneksiObj->getKoneksi();

if($koneksi->connect_error) {
    echo "gagal koneksi : ".$koneksi->connect_error;
}else {
    echo "sambungan basis data berhasil";
}

$qry = "delete from mahasiswa where nim=" . $_GET["nim"];

if($koneksi->query($qry) === true) {
    echo "<br> data ". $_GET["nim"]. " berhasil dihapus".'<a href="main.php">lihat data</a>';
}else {
    echo "<br>data gagal dihapus";
}

$koneksi->close();
?>
