<?php
	$host = "localhost";
	$user = "root";
	$password = "root";
	$dbname = "AppInventori";

	$koneksi = mysqli_connect($host, $user, $password, $dbname);

	if ($koneksi) {
		echo "sukses";
	}else{
		echo "Koneksi Gagal";
	}