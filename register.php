<?php

	include ('config.php');

if(isset($_POST['submit'])){
	
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pass = md5($_POST['password']);
	$cpass = md5($_POST['cpassword']);
	
	$select = "SELECT * FROM user WHERE email = '$email' && pass = '$pass'";

	$result = mysqli_query($conn, $select);
	
	if(mysqli_num_rows($result) > 0){
		$error[] = 'user already exist';
		
	}else{
		if($pass != $cpass){
			$error[] = 'password not matched';
		}else{
			$insert = "INSERT INTO user(name, email, pass) VALUES('$name', '$email', '$pass')";
			mysqli_query($conn, $insert);
			header('location:index_login.php');
		}
	}
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="widt=device-width, initial-scale-1.0">
	<title>Inregistreaza-te</title>
	<link rel="stylesheet" type="text/css" href="register_style.css">

</head>
<body>

<div class="form-container">
	
	<form action="" method="post">
	<h3>Inregistreaza-te</h3>
	<?php
	if(isset($error)){
		foreach($error as $error){
			echo '<span class="error-msg">' .$error. '</span>';
		};
	};
	?>
	<input type="text" name="name" required placeholder="Nume">
	<input type="email" name="email" required placeholder="Email">
	<input type="password" name="password" required placeholder="Parola">
	<input type="password" name="cpassword" required placeholder="Confirma parola">
	<input type="submit" name="submit" value="Inregistreaza-te" class="form-btn">
	<p>Ai deja cont?<a href="index_login.php">Logheaza-te acum!</a></p>
	</form>
</div>
</body>

</html>
