<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="assets\css\main.css">
<title>Hemsida för kommentarer</title >
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
</head>
<body>
<?php
$uname = "dbtrain_744";
$pass = "mpxgwk";
$host = "dbtrain.im.uu.se";
$dbname = "dbtrain_744";

$connection = new mysqli($host, $uname, $pass, $dbname);

if ($connection->connect_error)
    {
        die("Connection failed: ".$connection.connect_error);
    }
echo "Connection worked.";
?>

<div class="main">
<h1>Registration</h1>	
<form name="Reg_Form" method="post" onsubmit="return validateFieldUser();"
 action="saveUser.php">
	
	<p><label>Email:</label>	<input type="text" name="email" id="email" ></p>
	
	<p><label>Password:</label>	<input type="password" name="pword" id="pword"></p>
	
	<p><button type="submit">Confirm</button></p>
 </form>
 </div>
 	<script src="/assets/js/main.js"></script>
</body>

</html>