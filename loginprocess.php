<?php
include 'db.php';
connect();


$email = prepareString($_POST["mail"]);
$salt = test_input(selectFromWhere('salt', 'User', 'email', $email));
$hash = selectFromWhere('hash', 'User', 'salt', $salt);
$pass = prepareString($_POST["pwo"]);
$userHash = sha1($salt.$pass);

if ($userHash == $hash)
		{
		session_start();
		$_SESSION['ID']= $email;
		 echo "Login successful!";
		 header("Refresh: 1; URL=index.php");
		 
		} 
else
		{
		echo "Login failed, please try again"; 
		header("Refresh: 3; URL=login.php");
		}



?>