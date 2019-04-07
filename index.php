<!DOCTYPE HTML>

<!DOCTYPE html>
<html>
<head>
  <title>Project</title>
  <link rel="stylesheet" type="text/css" href="style/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <?php  requiere_once 'process.php';?>
    <!-- Initial Form -->
    <div class="row justify-content-center">
    <form action="process.php" method="POST">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="Enter your Name">        
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="Enter your Email">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
      </div>
      <div class="form-group">
        <label>Location</label>
        <input type="text" name="location" class="form-control" value="Enter your Location">
      </div>
      <div class="form-group">
        <label>Skills</label>
        <input type="text" name="skills" class="form-control" value="Enter your Skills">
      </div>
      <button class="btn btn-primary" type="submit" name="save">Save</button>
    </form>
  </div>
</body>
</html>

<?php

?>





