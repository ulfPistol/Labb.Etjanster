<?php
  session_start();
  unset($_SESSION['ID']); //stänger sessionen och skickar till loginpage
  header("location: login.php");
?>
