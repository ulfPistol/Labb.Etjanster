
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
	session_start();
	if (!isset($_SESSION['ID']))
			{
			header("Location: login.html");
			}
			$ID = $_SESSION['ID'];
			echo $ID;
	?>

		<div class="main">
<h1> Comment on anything you like!</h1>
<form id="commentForm" method="post" action= "saveComment.php">

	<p><textarea type="text" id="kommentar" name="kommentar" ></textarea></p>
	<span id="comment_error">Write a comment</span>

	<p><button type="submit" id="send_comment">Send!</button></p>
 </form>
 <h1> Comments: </h1>
<div class="commentBox" id="comments">
	 <?php
	getComments();
	 ?>
</div>
<p></P>
 </div>
 <form name="logout_form" method="post" action= "logout.php">
	<p><button type="submit">Logout</button></p>
 </form>
</body>
</html>
