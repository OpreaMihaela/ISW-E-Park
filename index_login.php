<?php
	include ('config.php');
	include ('login.php')
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="widt=device-width,initial-scale=1.0">
	<title>Logheaza-te</title>
	<link rel="stylesheet" type="text/css" href="login_style.css">
</head>
<body>
	<div id="form">
		<h1>Logheaza-te</h1>
	<form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
		<label>Email:</label> 
		<input type="email" id="email" name="email"><br><br>
		<label>Parola:</label>
		<input type="password" id="pass" name="pass"><br><br>
		
		<input type="submit" id="btn" name="submit" value="Login"/>
		<p style="font-size: 20px;">Nu ai cont?<a href="register.php">Inregistreaza-te acum</a></p>
	</form>
	</div>
	<script>
		function isvalid(){
			var email = document.form.email.value;
			var pass = document.form.pass.value;
			if(email.length=="" && pass.length==""){
				alert("Username and password field is empty!");
				return false
			}
</body>
</html>
