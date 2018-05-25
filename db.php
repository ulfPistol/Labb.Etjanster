<?php
function connect()
		{
			$uname = "root";
			$pass = "";
			$host = "localhost";
			$dbname = "etjanster";

			$connection = new mysqli($host, $uname, $pass, $dbname);

		if ($connection->connect_error)
			{
			   return die("Connection failed: ".$connection.connect_error);
			}
			return $connection;
		}
//fixar till strängar
function test_input($data)
		{
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
		//Funktion som randomiserar ett unikt salt i registreringsprocessen
function unique_salt()
		{
			return substr(sha1(mt_rand()),0,22);
		}
//lägger till användare i databasen
function insertUser($email, $hash, $unique_salt)
		{
		 $query =  "INSERT INTO User (email, hash, salt) VALUES ('". $email ." ','". $hash ." ', '". $unique_salt ." ')";
		 connect() -> query ($query);
		}
//Booleansk funktion som kollar om en email redan finns i databasen och returnerar den
function checkEmail($email)
		{
		$queryCheck = "SELECT email FROM User WHERE email = ('".$email."')";
		$exist = connect() -> query ( $queryCheck ) ;
		$row = $exist->fetch_assoc();
		return $exist = $row["email"];
		}
function saveComment($email, $kommentar)
		{
		$query = " INSERT INTO Comments ( email, comment) VALUES ('". $email ." ', '". $kommentar ." ')";
		connect() -> query ( $query ) ;
		}
function prepareString($data)
		{
		return mysqli_real_escape_string(connect(), test_input($data));
		}
//funktion som utför ett query och returnerar värdet i en variabel
function selectFromWhere($select, $from, $where, $data)
		{
		$query = "SELECT ".$select." FROM ".$from." WHERE ".$where." = ('".$data."')";
		$result = connect()->query($query);
		$row = $result->fetch_assoc();
		return $row[$select];
		}
function getComments()
		{
		$query = "SELECT * FROM Comments";
		$result = connect()->query($query);
		while ( $row = $result->fetch_assoc())
			{
			echo "<div class='comments'>";
				echo $row["email"].": ";
				echo $row["timestamp"]."<br>";
				echo $row["comment"]."<br>";
			echo "</div>";
			}
		}














?>
