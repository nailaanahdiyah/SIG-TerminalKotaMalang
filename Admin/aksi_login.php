<?php 
session_start();
include 'koneksi.php';
$user = $_POST['user'];
$pass = md5($_POST['pass']);
$op = $_GET['op'];
if($op == "in"){
	$sql = "SELECT * FROM akun WHERE username='$user' AND password='$pass'";
	$tampil = $koneksi->query($sql);
	if(mysqli_num_rows($tampil)==1){
		$hasil = $tampil->fetch_array();
		$_SESSION['username'] = $hasil['username'];
		$_SESSION['level'] = $hasil['level'];
		$_SESSION['login'] = true;
		if($hasil['level']=='admin'){
			echo "<script 
				type = 'text/javascript'>
				alert('Anda Sukses Login');
				window.location.href = ('admin.php');
			</script>";
		}
	}else{
		die("password salah <a href=\"javascript:history.back()\">kembali</a>");}
}else if($op == "out"){
	unset($_SESSION['username']);
	unset($_SESSION['level']);
	header("location:authenticationia.html"); }
?>