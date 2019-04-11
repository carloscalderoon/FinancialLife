<?php ob_start();
require_once('authe.php');

$expenseId = $_GET['expenseId'];

require_once('db.php');

$sql = "DELETE FROM expenses WHERE expenseId = :expenseId";

$cmd = $conn->prepare($sql);
$cmd->bindParam(':expenseId', $expenseId, PDO::PARAM_INT);

$cmd->execute();

$conn = null;

header('location:expenses.php');

require_once('footer.php');
ob_flush(); ?>