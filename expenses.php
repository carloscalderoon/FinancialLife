<?php ob_start();

require_once('authe.php');

require_once('header.php');

require_once('db.php');


$sql = "SELECT * FROM expenses";

$cmd = $conn->prepare($sql);
$cmd->execute();
$expenses = $cmd->fetchAll();


echo '<a href="addExpense.php" class="btn btn-primary btn-xl text-uppercase">Add a Charge</a>
<table class="table table-striped table-hover"><thead><th>Origin</th><th>Amount</th>
<th>Edit</th><th>Delete</th></thead><tbody>';


foreach ($expenses as $expense) {
	echo '<tr><td>' . $expense['origin'] . '</td>
		<td>' . $expense['amount'] . '</td>
		<td><a href="addExpenses.php?expenseId=' . $expense['expenseId'] . '">Edit</a></td>
		<td><a href="deleteExpense.php?expenseId=' . $expense['expenseId'] . '" 
		onclick="return confirm(\'Are you sure you want to delete this charge?\');">Delete</td></tr>';
}

echo '</tbody></table>';

$conn = null;

require_once('footer.php');
ob_flush();
?>