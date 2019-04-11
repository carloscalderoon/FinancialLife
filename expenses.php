<?php ob_start();

require_once('authe.php');

require_once('header.php');

require_once('db.php');

// write the sql query
$sql = "SELECT * FROM expenses";

// execute the query and store the results
$cmd = $conn->prepare($sql);
$cmd->execute();
$expenses = $cmd->fetchAll();

// start the html display table
echo '<a href="addExpense.php"">Add a Charge</a>
<table class="table table-striped table-hover"><thead><th>Origin</th><th>Amount</th>
<th>Edit</th><th>Delete</th></thead><tbody>';

// loop through the results and show each movie in a new row and each value in a new column
foreach ($expenses as $expense) {
	echo '<tr><td>' . $expense['origin'] . '</td>
		<td>' . $expense['amount'] . '</td>
		<td><a href="expenses.php?expenseId=' . $expense['expenseId'] . '">Edit</a></td>
		<td><a href="delete-movie.php?expenseId=' . $expense['expenseId'] . '" 
			onclick="return confirm(\'Are you sure you want to delete this charge?\');">Delete</td></tr>';
}

// close the table and body
echo '</tbody></table>';

// disconnect
$conn = null;

// embed footer
require_once('footer.php');
ob_flush();
?>