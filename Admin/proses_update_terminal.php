<?php 

require 'koneksi.php';

if (isset($_POST['id'])) {
	# code...
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$longitude = $_POST['longitude'];
	$latitude = $_POST['latitude'];
	$tipe = $_POST['tipe'];

	$result = mysqli_query($koneksi, "UPDATE terminal SET id=$id, nama='$nama', alamat='$alamat', longitude= $longitude, latitude= $latitude, tipe='$tipe' WHERE id=$id");

	if ($result) {
		# code...
		echo 'Jadwal berhasil di update';
	} else{
		echo "jadwal gagal";
	}
}

 ?>