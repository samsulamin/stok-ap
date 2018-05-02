<h2> formulir update mahasiswa</h2>
<hr>
<?php
include "koneksi.php";

$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();

if($koneksi->connect_error) {
    echo "Gagal koneksi : ". $koneksi->connect_error;
}
$query = "select * from mahasiswa where nim='".
    $_GET["nim"]. "'";
$data = $koneksi->query($query);
$namaBarang = "";
$stok = "";
if($data->num_rows <= 0) {
    echo "mas/mba, kalau isi data sesuai prosedur yah!";
}else {
    while($row =$data->fetch_assoc()) {
        $nama = $row["nama"];
        $jurusan = $row["jurusan"];
    }
}
?>
<form action="update.php" method="post">
    <table>
        <tr>
            <td>NIM </td>
            <td>: <input type="text" name="nim" readonly="true"
                value="<?php echo $_GET["nim"]; ?>"></td>
        </tr>
        <tr>
            <td>NAMA LENGKAP</td>
            <td>: <input type="text" name="nama"
                value="<?php echo $nama; ?>"></td>
        </tr>
        <tr>
            <td>JURUSAN</td>
            <td> : <input type="text" name="jurusan"
            value="<?php echo $jurusan; ?>"></td>
        </tr>
        </table>
        <input type="submit" value="simpan">
    </form>