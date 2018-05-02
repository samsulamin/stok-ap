<h2>Aplikasi Stok Barang</h2>
<hr>
<a href="input.php">Tambah Data</a>
<table border="1">
    <tr>
        <th>KODE</th>
        <th>NAMABARANG</th>
        <th>STOK</th>
		<th colspan="2">PILIHAN</th>
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
    echo "<tr><td>";
    echo "TDAK ADA DATA";
    echo "</td></tr>";
}else {
    while ($row = $data->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["NIM"]. "</td>"; 
        echo "<td>" . $row["nama"]. "</td>";
        echo "<td>" . $row["jurusan"] . "</td>";
        echo '<td><a href="edit.php?nim='. $row["nim"] .'">Edit</a></td>';
        echo '<td><a href="hapus.php?nim='. $row["nim"] .'">Hapus</a></td>';
        echo "</tr>";
    }
}
$koneksi->close();
    ?>
    </table>