<?php
//    session_start();
//    if(isset($_SESSION['username'])) {
//    header('location:index.php'); }
?>

<title>Form Pendaftaran</title>
<div align='center'>
  <form action="proses_daftar.php" method="post">
  <p>
      <h1>Daftar Baru</h1>
      </p>

  <p>
      Username : <input name="username" id="username">
      </p>
  <p>
      Password : <input name="password" id="password">
      </p>
  <p>
      <input name="submit_daftar" value="Daftar" type="submit"> <input value="Reset" type="reset">
      </p>
  <p>
      Sudah Punya akun ? <a href="index.php"><b>Login</b></a>
      </p>
  </form>
</div>