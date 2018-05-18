<?php
include 'db.php';
connect();




$email = mysqli_real_escape_string(connect(), test_input("olof.edin@hotmail.com"));



getComments();
?>