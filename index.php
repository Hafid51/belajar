<?php
include "koneksi.php";

$sql = "SELECT id_barang,nama_barang,jumlah_barang,tgl_masuk,keadaan_barang,id_jenis FROM barang";

$data = mysqli_query($koneksi, $sql);

function tampilJenis($idJenis, $koneksi){
	$sql = "SELECT nama_jenis FROM jenis WHERE id_jenis='$idJenis'";
	$data = mysqli_query($koneksi, $sql);
	$jenis = mysqli_fetch_assoc($data);
	//die mysqli_error($koneksi)
	return $jenis['nama_jenis'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Inventori</title>
</head>
<body>
	<label>Barang di Gudang</label>
	<br/>
	<a href="input_barang.php">Tambah Barang Baru</a>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Tanggal Masuk</th>
			<th>Jenis</th>
			<th>Keadaan</th>
			<th>Aksi</th>
		</tr>
<?php
	foreach ($data as $barang):
?>
		<tr>
			<td>
				<?php echo $barang['nama_barang']; ?>
			</td>
			<td>
				<?php echo $barang['jumlah_barang']; ?>
			</td>
			<td>
				<?php echo $barang['tgl_masuk']; ?>
			</td>
			<td>
				<?php echo tampilJenis($barang['id_jenis'],$koneksi); ?>
			</td>
			<td>
				<?php echo $barang['keadaan_barang']; ?>
			</td>
			<td>
				<a href="ubah_barang.php?id=<?php echo $barang['id_barang']; ?>">Edit</a> |
				<a href="hapus_barang.php?id=<?php echo $barang['id_barang']; ?>">Hapus</a>
			</td>
		</tr>
<?php endforeach; ?>
	</table>
</body>
</html>