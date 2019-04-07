<?php

$mysqli = new mysqli('127.0.0.1:53694', 'localdb', 'azure', '6#vWHD_$') or die(mysqli_error($mysqli));

if (isset($_POST['save'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$location = $_POST['location'];
	$skills = $_POST['skills'];
	$password = $_POST['password'];


	$mysqli->query("INSERT INTO users (Name, Email, Location, Skills, Password) VALUES ('$name', '$email'. '$location', '$skills', '$password')") or die(mysql_error($mysqli));
}