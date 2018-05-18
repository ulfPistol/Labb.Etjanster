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
<?php include 'db.php';
	connect();			?>
<div class="main">
<h1>Log in:</h1>	
<form name="login_Form" method="post" onsubmit="return validateFieldUser(); validateEmail(); validatePass()" action="loginprocess.php">
	
	<p><label>Email:</label>	<input type="text" name="mail" id="mail" ></p>
	
	<p><label>Password:</label>	<input type="password" name="pwo" id="pwo"></p>
	
	<p><button type="submit">Log in</button></p>
 </form>
 <form name="Reg_Form" method="post" action="registration.php">
 <p><button>Register</button></p>
 </form>
 </div>
</body>

</html>