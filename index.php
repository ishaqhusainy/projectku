<!DOCTYPE html>
<html>
<head>
	<title> - Login E-Learning</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2><b>SELAMAT DATANG</b></h2></center>	
	<br/>
	<div class="login">
	<br/>
		<form action="cek_login.php" method="post" onSubmit="return validasi()">
			<div>
				<label><b> Username:</b></label>
				<input type="text" name="username" id="username" placeholder="masukkan username" autocomplete="off" />
			</div>
			<div>
				<label><b>Password:</b></label>
				<input type="password" name="password" id="password" placeholder="masukkan password" autocomplete="off" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol"> 
			</div>
		</form>
		<div>
				<a href="#">   Forget Password ? </a>
			</div>
		<br/>
		<div>
               <a class="tombol" href="register.php">Create an Account!</a>
            </div>
	</div>
</body>


 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>