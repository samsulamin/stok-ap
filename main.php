<html !DOCTYPE>
<head>
	<title> Data Mahasiswa </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
<h2>Aplikasi Data Mahasiswa</h2>
<hr>
<a href="input.php"><button type="button" class="btn btn-success">Tambah Data</button></a>
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