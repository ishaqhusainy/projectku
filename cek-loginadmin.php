<?php 
// mengaktifkan session php
session_start();
error_reporting("~EAL^Deprecated"); 

// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username_admin = $_POST['username-admin'];
$password_admin = $_POST['password-admin'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from tb_admin where username_admin='$username_admin' and password_admin='$password_admin'");
 
if(mysqli_num_rows($data) < 0) {
	echo "<div align='center'>Username tidak terdaftar! <a href='login-admin.php'>Back</a></div>";
} else {
	$datas = mysqli_fetch_array($data);
	if($password_admin <> $datas['password_admin']) {
		echo "<div align='center'>Password salah<a href='login-admin.php'>Back</a></div>";
	} else {
		$_SESSION['user'] = $datas['username_admin'];
		header('location: admin-index.php');
	}
}
?>