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
<h1>Registration</h1>
<form id=register method="post" action="saveUser.php">

	<p><label>Email:</label>	<input type="text" name="email" id="email" ></p>
    <span id="email_error">Email must contain "@" and "."</span>
	<p><label>Password:</label>	<input type="password" name="pword" id="password"></p>
    <span id="password_error">Password must be at least 6 characters long</span>
  <p><label>Retype password:</label>	<input type="password" name="pword" id="repassword"></p>
    <span id="repassword_error">repeat password</span>

	<p><button type="submit">Confirm</button></p>
 </form>
 </div>
</body>

</html>
