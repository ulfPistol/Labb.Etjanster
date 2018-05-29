<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="assets/css/main.css">
		<title>Hemsida för kommentarer</title >
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="assets/js/main.js"></script>
	</head>
	<body>
		<?php
			include 'db.php';
			connect();
		?>
		<div class="main">
			<h1>Log in:</h1>
			<form id=login method="post" action="loginprocess.php">
				<p><label>Email:</label>	<input type="text" id="email" name="mail" class="loginInput"></p>
				<span id="email_error">Email must contain "@" and "."</span>
				<p><label>Password:</label>	<input type="password" id="password" name="pwo" class="loginInput"></p>
				<span id="password_error">Password must be at least 6 characters long</span>
				<p><button type="submit" id="subBtn">Log in</button></p>
		 	</form>
			<form name="Reg_Form" method="post" action="registration.php">
				 <p><button>Register</button></p>
		 	</form>
		 </div>
	</body>
</html>
