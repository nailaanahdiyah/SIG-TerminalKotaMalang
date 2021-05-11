<?php 

require 'koneksi.php';

if ($_POST['p']='tambahData') {
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

	$query = "INSERT INTO jadwal_keberangkatan VALUES($id, $id_terminal, '$operator', '$kelas', '$jam_berangkat', '$jam_datang', '$tujuan', '$waktu_tempuh', '$harga')";
	$sql2 = mysqli_query($koneksi, $query);

	header('Location: http://localhost/Terminal2/Admin/admin2.php');
	die();
}

 ?>