<html !DOCTYPE>
<head>
	<title> Data Mahasiswa </title>
	<style>
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>
<h2>Aplikasi Data Mahasiswa</h2>
<hr>
<a class="one" href="input.php">Tambah Data</a>
<br>
<br>
<table border="1">
    <tr>
        <th>NIM</th>
        <th>NAMA</th>
        <th>JURUSAN</th>
		<th colspan="2">OPSI</th>
    <tr>
<?php
include "koneksi.php";

$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();

if($koneksi->connect_error) {
    echo "<tr><td>";
    echo "Gagal koneksi : ". $koneksi->connect_error;
    echo "</td></tr>";
}

$query = "select * from mahasiswa";
$data = $koneksi->query($query);
if($data->num_rows <= 0) {
    echo "<tr><td colspan='4'>";
    echo "<p align='center'>Tidak ada data</p>";
    echo "</td></tr>";
}else {
    while ($row = $data->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nim"]. "</td>"; 
        echo "<td>" . $row["nama"]. "</td>";
        echo "<td>" . $row["jurusan"] . "</td>";
        echo '<td><a href="form-edit.php?nim='. $row["nim"] .'">Edit</a></td>';
        echo '<td><a href="hapus.php?nim='. $row["nim"] .'">Hapus</a></td>';
        echo "</tr>";
    }
}
$koneksi->close();
    ?>
    </table>