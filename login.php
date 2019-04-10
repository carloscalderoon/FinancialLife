<?php
require_once('header.php');
?>
<div class="container">
	<h1>Log In</h1>
	<form method="post" action="validation.php">
		<fieldset class="form-group">
			<label for="username" class="col-sm-2">Email:</label>
			<input name="username" required type="email" />
		</fieldset>
		<fieldset class="form-group">
			<label for="password" class="col-sm-2">Password:</label>
			<input name="password" required type="password" />
		</fieldset>
		<button type="submit" class="col-sm-offset-2 btn btn-success">Log In</button>
	</form>
</div>
<?php
require_once('footer.php');
?>