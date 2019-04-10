<?php
	$Firstname = $_POST['firstname'];
	$Lastname = $_POST['lastname'];
	$Email = $_POST['email'];
	$Location = $_POST['location'];
	$Skills = $_POST['skills'];
	$Password = $_POST['password'];

	echo "My name is $Firstname $Lastname";

	requiere('db.php')

if (isset($_POST['save'])) {

	$sql = "INSERT INTO users (FirstName, LastName, Email, Location, Skills, Password) VALUES (:Firstname, :Lastname, :Email, :Location, :Skills, :Password)";
}

// $conn = null;

echo "User Saved!";
?>