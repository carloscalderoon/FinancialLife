<?php ob_start();

require_once('authe.php');

require_once('header.php');

require_once('db.php');

$sql = "SELECT * FROM users";

$cmd = $conn->prepare($sql);
$cmd->execute();
$users = $cmd->fetchAll();

echo '
<table class="table table-striped table-hover"><thead><th>Username</th></thead><tbody>
';

foreach ($users as $user) {
	echo '<tr><td>' . $user['username'] . '</td></tr>';
}

echo '</tbody></table>';

$conn = null;

require_once('footer.php');
ob_flush();
?>