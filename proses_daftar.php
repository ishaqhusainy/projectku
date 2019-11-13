<?php
  include 'koneksi.php';
  //  require_once("daftar.php");
  //  $nama = $_POST['nama'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   $cek = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE username = '$username'");
   if(mysqli_num_rows($cek) > 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";
   } else {
     if(!$username || !$password) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
     } else {
       $simpan = mysqli_query($koneksi, "INSERT INTO tb_siswa VALUES('','$username','$password')");
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='index.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>