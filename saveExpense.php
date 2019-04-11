<?php ob_start();

// auth check
require_once('authe.php');

require_once('header.php');

// save form inputs into variables
$origin = $_POST['origin'];
$amount = $_POST['amount'];


// create a variable to indicate if the form data is ok to save or not
$ok = true;

// check each value
if (empty($origin)) {
	// notify the user
	echo 'Origin is required<br />';
	
	// change $ok to false so we know not to save
	$ok = false;
}

if (empty($amount)) {
	// notify the user
	echo 'Amount is required<br />';
	
	// change $ok to false so we know not to save
	$ok = false;
}
elseif (is_numeric($amount) == false) {
	echo 'Amount is invalid<br />';
	$ok = false;
}

if ($ok == true) {
	// connect to the database
	require_once('db.php');
	
	if (empty($expenseId)) {
		$sql = "INSERT INTO expenses (origin, amount) VALUES (:origin, :amount)";
	}
	else {
		$sql = "UPDATE expenses SET origin = :origin, amount = :a,ount WHERE expenseId = :expenseId";
	}
	
	// create a command object and fill the parameters with the form values
	$cmd = $conn->prepare($sql);
	$cmd->bindParam(':origin', $origin, PDO::PARAM_STR, 50);
	$cmd->bindParam(':amount', $amount, PDO::PARAM_INT);


	if (!empty($expenseId)) {
		$cmd->bindParam(':expenseId', $expenseId, PDO::PARAM_INT);
	}

	$cmd->execute();

	$conn = null;
	
	// show confirmation
	echo "Expense Saved";
}

require_once('footer.php');
ob_flush();
?>
