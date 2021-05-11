<?php 

require 'koneksi.php';

if (isset($_POST['id'])) {
	# code...
	$id = $_POST['id'];
	$id_terminal = $_POST['id_terminal'];
	$operator = $_POST['operator'];
	$kelas = $_POST['kelas'];
	$jam_berangkat = $_POST['jam_berangkat'];
	$jam_datang = $_POST['jam_datang'];
	$tujuan = $_POST['tujuan'];
	$waktu_tempuh = $_POST['waktu_tempuh'];
	$harga = $_POST['harga'];

	$result = mysqli_query($koneksi, "UPDATE jadwal_keberangkatan SET id=$id, id_terminal=$id_terminal, operator='$operator', kelas='$kelas', jam_berangkat='$jam_berangkat', jam_datang='$jam_datang', tujuan='$tujuan', waktu_tempuh='$waktu_tempuh', harga='$harga' WHERE id=$id");

	if ($result) {
		# code...
		echo 'Jadwal berhasil di update';
	} else{
		echo "jadwal gagal";
	}
}

 ?>