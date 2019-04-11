<?php ob_start();

// authentication check
require_once('authe.php');

require_once('header.php');

$expenseId = null;
$origin = null;
$amount = null;


if (empty($_GET['expenseId']) == false) {
	$expenseId = $_GET['expenseId'];

	require_once('db.php');

	$sql = "SELECT * FROM expenses WHERE expenseId = :expenseId";
	
	$cmd = $conn->prepare($sql);
	$cmd->bindParam(':expenseId', $expenseId, PDO::PARAM_INT);
	$cmd->execute();
	$movies = $cmd->fetchAll();

	foreach ($expenses as $expense) {
		$origin = $expense['origin'];
		$amount = $expense['amount'];
	}

	$conn = null;
}

?>

	<div class="container">
		<h1>Charge</h1>
	    <form method="post" action="saveExpense.php">
	        <fieldset class="form-group">
	            <label for="origin" class="col-sm-2">Origin:</label>
	            <input name="origin" id="origin" required value="<?php echo $origin; ?>" />
	        </fieldset>
	         <fieldset class="form-group">
	            <label for="amount" class="col-sm-2">Amount:</label>
	            <input name="amount" id="amount" required type="number" value="<?php echo $amount; ?>" />
	        </fieldset>
	        <input name="expenseId" type="hidden" value="<?php echo $expenseId; ?>" />
	        <button type="submit" class="col-sm-offset-2 btn btn-success">Submit</button>
	    </form>
	</div>

<?php 
require_once('footer.php'); 
ob_flush(); ?>