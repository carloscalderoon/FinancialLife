<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$location = $_POST['location'];
	$skills = $_POST['skills'];
	$password = $_POST['password'];

	requiere_once('db.php')

if (isset($_POST['save'])) {

	$sql = "INSERT INTO users (FirstName, LastName, Email, Location, Skills, Password) VALUES (:firstname, :lastname, email.    :location, :skills, :password)";
}

$conn = null;

echo "User Saved!";
?>