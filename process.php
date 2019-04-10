<?php
	$conn = new PDO('mysql:host=127.0.0.1:53694; dbname=localdb', 'azure','6#vWHD_$');

	$Firstname = $_POST['firstname'];
	$Lastname = $_POST['lastname'];
	$Email = $_POST['email'];
	$Location = $_POST['location'];
	$Skills = $_POST['skills'];
	$Password = $_POST['password'];

	echo "My name is $Firstname $Lastname";

	$sql = "INSERT INTO users (FirstName, LastName, Email, Location, Skills, Password) VALUES ('$Firstname', '$Lastname', '$Email', '$Location', '$Skills', '$Password')";

	if (!mysql_query($conn,$sql)) {
		echo "Not inserted";
	}else{
		echo "Inserted";
	}

try {
  //Connection to Database
  $conn = new PDO('mysql:host=127.0.0.1:53694; dbname=localdb', 'azure','6#vWHD_$');
  echo "Yey!";
} catch (PDOException $e) {
    echo "<p> Sorry you can't connect.</p>";
    echo $e;
}

?>