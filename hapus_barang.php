<?php
include "koneksi.php";

$id_barang = $_GET['id'];

$sql = "DELETE FROM barang WHERE id_barang='$id_barang'";

$barang = mysqli_query($koneksi, $sql);

	if ($barang) {
		echo "Barang berhasil di hapus";
	}else{
		echo "Barang gagal di hapus";
	}
?>