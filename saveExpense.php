<?php ob_start();

require_once('authe.php');

require_once('header.php');

$origin = $_POST['origin'];
$amount = $_POST['amount'];

$ok = true;

if (empty($origin)) {

	echo 'Origin is required<br />';

	$ok = false;
}

if (empty($amount)) {

	echo 'Amount is required<br />';

	$ok = false;
}
elseif (is_numeric($amount) == false) {
	echo 'Amount is invalid<br />';
	$ok = false;
}

if ($ok == true) {

	require_once('db.php');
	
	if (empty($expenseId)) {
		$sql = "INSERT INTO expenses (origin, amount) VALUES (:origin, :amount)";
	}
	else {
		$sql = "UPDATE expenses SET origin = :origin, amount = :a,ount WHERE expenseId = :expenseId";
	}

	$cmd = $conn->prepare($sql);
	$cmd->bindParam(':origin', $origin, PDO::PARAM_STR, 50);
	$cmd->bindParam(':amount', $amount, PDO::PARAM_INT);


	if (!empty($expenseId)) {
		$cmd->bindParam(':expenseId', $expenseId, PDO::PARAM_INT);
	}

	$cmd->execute();

	$conn = null;

	echo "Expense Saved";
}

require_once('footer.php');
ob_flush();
?>
