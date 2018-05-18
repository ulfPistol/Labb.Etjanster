<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="assets/css/main.css">
	<title>Hemsida för kommentarer</title >
	<script src="assets/js/main.js"></script>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
</head>
<body>

<?php
include 'db.php';
session_start();
if (isset($_SESSION['ID'])) 
		{ 
		echo "Inloggad som: ";
		echo $_SESSION['ID']; ?>
		<div class="main">
<h1> Comment on anything you like!</h1>
<form name="newForm" method="post" onsubmit="return validateFields()"
 action= "saveComment.php">

	<p><textarea type="text" id="kommentar" name="kommentar" ></textarea></p>
	
	<p><button type="submit">Send!</button></p>
 </form>
 <h1> Comments: </h1>
<div class="commentBox">
 <?php
getComments();
?>
</div>

 </div>
 <form name="logout_form" method="post" 
 action= "logout.php">
	
	<p><button type="submit">Logout</button></p>
 </form>
<?php	
	}

 else
		{
			echo "Please login!";
			header("Refresh: 5; URL=login.php");
		}

?>



</body>

</html>