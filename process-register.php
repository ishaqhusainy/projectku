<?php
  include 'koneksi.php';
  $first_name = $_POST['first_name_reg'];
  $last_name = $_POST['last_name_reg'];
  $username = $_POST['username_reg'];
  $email = $_POST['email_reg'];
  $password = $_POST['password_reg'];
  $passwords = $_POST['passwords'];
  $password_hash = password_hash($password, PASSWORD_DEFAULT);

  mysqli_query($koneksi, "SELECT * FROM siswa WHERE username = '$username'");

  if(mysqli_affected_rows($koneksi) > 0){
    echo "<div align='center'>Username Sudah Terdaftar! <a href='register.php'>Back</a></div>";
   } else {
     if(!$username || !$password) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='register.php'>Back</a>";
     } elseif ($_POST['password_reg'] <> $_POST['passwords']) {
      echo "<div align='center'>Data password tidak Sama! <a href='register.php'>Back</a>";
    } else {
      $ekstensi_diperbolehkan  = array('png','jpg');
      $nama = $_FILES['file']['name'];
      $x = explode('.', $nama);
      $ekstensi = strtolower(end($x));
      $ukuran = $_FILES['file']['size'];
      $file_tmp = $_FILES['file']['tmp_name'];  
      $simpan = mysqli_query($koneksi, "INSERT INTO siswa VALUES('','$username','$password','$first_name','$last_name','$email','$nama')");


      if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){  
        if($simpan) {
         move_uploaded_file($file_tmp, 'C:/xampp/htdocs/PROJECT/'.$nama);
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='index.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
       } else {
         echo 'UKURAN FILE TERLALU BESAR';
       }
     } else {
       echo 'UKURAN FILE tidak diterima';
     }
   }
 }
?>
