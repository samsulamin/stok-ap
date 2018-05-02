<?php
include "koneksi.php";

$koneksiObj = new koneksi();
$koneksi = $koneksiObj->getKoneksi();

if($koneksi->connect_error) {
    echo "gagal koneksi : ".$koneksi->connect_error;
}else {
    echo "sambungan basis data berhasil";
}

$nim 	= $_POST['nim'];
$nama   = $_POST['nama'];
$jurusan = $_POST['jurusan'];

$query = "update mahasiswa set nama = '$nama', jurusan = '$jurusan' where nim = '$nim'";
        echo $query;

if($koneksi->query($query) === true) {
    echo "<br> Data ". $_POST["nama"]. " berhasil Diubah". 
	'<a href="main.php">Lihat Data</a>';
}else{
    $koneksi->error;
    echo "<br>Data gagal disimpan" ;
}

$koneksi->close();
?>