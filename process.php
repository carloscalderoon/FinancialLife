<?php
if (isset($_POST['save'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$location = $_POST['location'];
	$skills = $_POST['skills'];
	$password = $_POST['password'];


	$mysqli->query("INSERT INTO users (FirstName, LastName, Email, Location, Skills, Password) VALUES (':firstname', ':lastname', 'email'. '$location', '$skills', '$password')") or die(mysql->error);
}
?>