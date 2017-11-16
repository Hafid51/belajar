<?php

if(isset($_POST['submit'])) {
	
	include "koneksi.php";

	$nama = $_POST['nama'];
	$jumlah = $_POST['jumlah'];
	$jenis = $_POST['jenis'];
	$keadaan = $_POST['keadaan'];

	// echo $nama.", ".$jumlah.", ".$jenis.", ".$keadaan;

	$sql = "INSERT INTO barang(nama_barang, jumlah_barang, id_jenis, keadaan_barang) VALUES ('$nama', '$jumlah', '$jenis', '$keadaan')";

	$barang = mysqli_query($koneksi, $sql);

	if($barang) {
		echo "Barang berhasil tersimpan<br/>";
	}else{
		echo "Barang gagal disimpan<br/>";
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Inventori</title>
</head>
<body>
	<form method="POST">
		<label>Nama Barang : </label>
			<input type="text" name="nama" /><br/>
		<label>Jumlah Barang : </label>
			<input type="number" name="jumlah" /><br/>
		<label>Jenis : </label>
			<select name="jenis">
				<option value="1">Berbahaya</option>
				<option value="2">Mudah Pecah</option>
				<option value="3">Beracun</option>
			</select><br/>
		<label>Keadaan : </label>
			<select name="keadaan">
				<option value="baru">Baru</option>
				<option value="bekas">Bekas</option>
			</select><br/>
			<input type="submit" name="submit" value="Simpan">
	</form>
</body>
</html>