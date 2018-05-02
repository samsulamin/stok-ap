<htnl !DOCTYPE>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h2> Aplikasi Data Mahasiswa</h2>
	<hr>
	<form method="post" action="simpandata.php">
		<table>
			<tr>
				<td>NIM</td>
				<td> : <input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td> : <input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>JURUSAN</td>
				<td> : <input type="text" name="jurusan"></td>
			</tr>
		</table>
		<input type="submit" value="Simpan">
		<input type="reset" value="Batal">
	</form>
</body>
</html>