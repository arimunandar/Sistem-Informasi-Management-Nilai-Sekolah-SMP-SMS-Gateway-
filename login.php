<?php
include "config.php";
if(isset($_POST['login'])){
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$hasil = mysql_query("SELECT * FROM user WHERE username='$user' AND password='$pass'");
	$data = mysql_fetch_array($hasil);
	$username = $data['username'];
	$password = $data['password'];
	$nama = $data['nama'];
	if($user==$username && $pass=$password){
		session_start();
		$_SESSION['username']=$username;
		$_SESSION['nama']=$nama;

		header('Location: dashboard.php');
	}else {
		header('Location: index.php');
	}
}
?>