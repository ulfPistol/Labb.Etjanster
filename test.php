<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="assets/css/main.css">
<title>Hemsida f�r kommentarer</title >
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="assets/js/main.js"></script>
</head>
<body>
<?php include 'db.php';
	connect();			?>

  <h1>Log in:</h1>
  <form id=login method="post" action="loginprocess.php">

  	<p><label>Email:</label>	<input type="text" id="email" ></p>
  	<span id="email_error">Email must be valid</span>
  	<p><label>Password:</label>	<input type="password" id="password"></p>
  	<span id="password_error">Password must be at least 6 characters long</span>
  	<p><button type="submit" id="subBtn">Log in</button></p>
   </form>
   <form id="regform" method="post" action="registration.php">
   <p><button>Register</button></p>
   </form>
   </div>




</body>

</html>
