<?php ob_start();

require_once('authe.php');

require_once('header.php');

require_once('db.php');

// write the sql query
$sql = "SELECT * FROM users";

// execute the query and store the results
$cmd = $conn->prepare($sql);
$cmd->execute();
$users = $cmd->fetchAll();

// start the html display table
echo '
<table class="table table-striped table-hover"><thead><th>Username</th></thead><tbody>
';

// loop through the results and show each movie in a new row and each value in a new column
foreach ($users as $user) {
	echo '<tr><td>' . $user['user'] . '</td></tr>';
}

// close the table and body
echo '</tbody></table>';

// disconnect
$conn = null;

// embed footer
require_once('footer.php');
ob_flush();
?>