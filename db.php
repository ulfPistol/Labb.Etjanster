<?php
	function connect()//connectar till min databas
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
	//trimmar, tar bort specialtecken osv
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
	function insertUser($email, $password)
			{
				$unique_salt = unique_salt();
				$hash = sha1($unique_salt.$password);
			  $query =  "INSERT INTO User (email, hash, salt) VALUES ('". $email ." ','". $hash ." ', '". $unique_salt ." ')";
			  connect() -> query ($query);
			}
	// funktion som kollar om en email redan finns i databasen och returnerar den isåfall
	function checkEmail($email)
			{
				$queryCheck = "SELECT email FROM User WHERE email = ('".$email."')";
				$exist = connect() -> query ( $queryCheck ) ;
				$row = $exist->fetch_assoc();
				return $exist = $row["email"];
			}
	function saveComment($email, $kommentar)//insertar kommentar i databasen
			{
				$query = " INSERT INTO Comments ( email, comment) VALUES ('". $email ." ', '". $kommentar ." ')";
				connect() -> query ( $query ) ;
			}
	function prepareString($data)//Skyddar mot sql-injections genom att lägga till grejer i sträng
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
	function getComments()//Skriver ut kommentarer från databasen
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
