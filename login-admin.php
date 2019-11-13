<!DOCTYPE html>
<html>
<head>
	<title> - LOGIN ADMIN </title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2><b>ADMINISTRATOR</b></h2></center>	
	<br/>
	<div class="login-admin">
	<br/>
		<form action="cek-loginadmin.php" method="post" onSubmit="return validasi()">
			<div>
				<label><b> Username:</b></label>
				<input type="text" name="username-admin" id="username-admin" placeholder="masukkan username" autocomplete="off" />
			</div>
			<div>
				<label><b>Password:</b></label>
				<input type="password" name="password-admin" id="password-admin" placeholder="masukkan password" autocomplete="off" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol"> 
			</div>
		</form>
		
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