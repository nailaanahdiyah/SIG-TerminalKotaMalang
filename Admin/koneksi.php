<?php 

$server = "localhost";
$username = "root";
$pass="";
$db = "prakgis_project";

$koneksi = mysqli_connect($server, $username, $pass);
$db = mysqli_select_db($koneksi, $db);

if ($koneksi -> connect_errno) {
	# code...
	echo "koneksi error";
	exit();
}

 ?>