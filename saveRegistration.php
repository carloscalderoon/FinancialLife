<?php
require_once ('header.php');

// store the inputs into variables
$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$ok = true;

// validation
if (empty($username)) {
    echo 'Username is required<br />';
    $ok = false;
}

if (empty($password)) {
    echo 'Password is required<br />';
    $ok = false;
}

if ($password != $confirm) {
    echo 'Passwords must match<br />';
    $ok = false;
}

if ($ok) {
    // connect
    require_once ('db.php');

    $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";

    $cmd = $conn->prepare($sql);
    $cmd->bindParam(':username', $username, PDO::PARAM_STR, 50);
    $cmd->bindParam(':password', $password, PDO::PARAM_STR, 128);
    $cmd->execute();

    $conn = null;

    echo 'Your registration was successful.  Click to <a href="login.php">Log In</a>';
}

require_once ('footer.php');
?>
