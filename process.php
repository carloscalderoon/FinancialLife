<?php

try {
	//Connection to Database
	$db = new PDO('mysql:host=127.0.0.1:53694; dbname=localdb', 'azure','6#vWHD_$');
	echo "<p> You are connected! Yay! </p>";
} catch (PDOException $e) {
		echo "<p> Sorry you can't connect.</p>";
		echo $e;
}

if (isset($_POST['save'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$location = $_POST['location'];
	$skills = $_POST['skills'];
	$password = $_POST['password'];


	$mysqli->query("INSERT INTO users (FirstName, LastName, Email, Location, Skills, Password) VALUES (':firstname', ':lastname', 'email'. '$location', '$skills', '$password')") or die(mysql->error);
}