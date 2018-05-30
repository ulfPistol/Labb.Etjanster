
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="assets/css/main.css">
		<title>Hemsida för kommentarer</title >
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="assets/js/main.js"></script>
	</head>
	<body>
			<?php
			include 'db.php';
			session_start();
			if (!isset($_SESSION['ID']))//om session inte finns, skicka till login
					{
						header("Location: login.php");
					}
			$ID = $_SESSION['ID'];
			echo $ID;
		?>

			<div class="main2">
				<h1> Comment on anything you like!</h1>
				<form id="commentForm" method="post" action="saveComment.php">
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
					<form name="logout_form" method="post" action= "logout.php">
					<p><button type="submit">Logout</button></p>
		   </form>
			<p></P>
		 </div>
	</body>
</html>
