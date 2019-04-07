<?php

?>

<div class="body-content">
  <div class="module">
    <h1>Create an user</h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="text" placeholder="Name" name="name" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="text" placeholder="Location" name="location" required />
      <input type="text" placeholder="Skills" name="skills" required />
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>