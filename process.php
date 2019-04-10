<?php
	$Firstname = $_POST['firstname'];
	$Lastname = $_POST['lastname'];
	$Email = $_POST['email'];
	$Location = $_POST['location'];
	$Skills = $_POST['skills'];
	$Password = $_POST['password'];

	echo "My name is $Firstname $Lastname";

	

if (isset($_POST['save'])) {

	$conn = new PDO('mysql:host=127.0.0.1:53694; dbname=localdb', 'azure','6#vWHD_$');

	$sql = "INSERT INTO users (FirstName, LastName, Email, Location, Skills, Password) VALUES (:Firstname, :Lastname, :Email, :Location, :Skills, :Password)";

	echo "User Saved!";
	echo mysql_error();
}

// $conn = null;

?>