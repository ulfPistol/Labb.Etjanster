<?php
include 'db.php';
connect();
	
//Funktion som randomiserar ett unikt salt i registreringsprocessen

// array för att samla errors 
$errors = array();			

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	if (empty(test_input($_POST["email"]))) {
    $errors["email"] = "A email is required"; 
	}// kollar att email inehåller text@text.
	else if(0 === preg_match("/.+@.+\../", $_POST["email"])){
	$errors["email2"] = "Enter a valid email"; 
	}
	else {
    $email = prepareString($_POST["email"]);}
	
  if (strlen(test_input($_POST["pword"])) < 6) {
    $errors["pword"] = "A password is required and has to be at least 6 characters long";
  } else {
    $password = prepareString($_POST["pword"]);
	$unique_salt = unique_salt();
	$hash = sha1($unique_salt.$password);
  }
}
if(test_input(checkEmail($email)) != $email)
		{		
			if(0 === count($errors))
			{	
			insertUser($email, $hash, $unique_salt);
			echo "Registration successful! Please log in." ;
			header("Refresh: 5; URL=login.php");
			}
			
			else
			{
			echo '<pre>'; print_r($errors); echo '</pre>';
			header("Refresh: 5; URL=registration.php");
			}	
		} 
else 	
		{
		echo "Email does already exist." ;
		header("Refresh: 5; URL=registration.php");
		}
	
?>