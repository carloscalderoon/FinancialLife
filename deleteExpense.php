<?php ob_start();
require_once('authe.php');

// save form inputs into variables
$expenseId = $_GET['expenseId'];

// connect to the database
require_once('db.php');

// set up the SQL DELETE command to remove the selected movie
$sql = "DELETE FROM expenses WHERE expenseId = :expenseId";

	
// create a command object and fill the parameters with the movie_id value
$cmd = $conn->prepare($sql);
$cmd->bindParam(':expenseId', $expenseId, PDO::PARAM_INT);

// execute the command
$cmd->execute();

// disconnect from the database
$conn = null;

// redirect to updated movies.php 
header('location:expenses.php');

require_once('footer.php');
ob_flush(); ?>