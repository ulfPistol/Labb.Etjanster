<?php
include 'db.php';
connect();


	
$errors = array();			
session_start();
$email = $_SESSION['ID'];
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{	
  if (empty(test_input($_POST["kommentar"]))) {
    $errors["kommentar"] = "A comment is required";
  } else {
    $kommentar =  prepareString($_POST["kommentar"]);
  }
}
			
if(0 === count($errors))
{			
echo saveComment($email, $kommentar);
header("Refresh: 0; URL=index.php");
}else{
echo '<pre>'; print_r($errors); echo '</pre>';
header("Refresh: 5; URL=index.php");
}		
	

	

?>
