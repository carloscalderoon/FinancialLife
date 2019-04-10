<?php
$page_title = null;
$page_title = 'Login';
require_once('header.php'); ?>


<!-- Initial Form -->
    <div class="row justify-content-center">
    <form action="process.php" method="post" >
      <div class="form-group">
        <label>First Name</label>
        <input type="text" name="firstname" class="form-control">        
      </div>
      <div class="form-group">
        <label>Last Name</label>
        <input type="text" name="lastname" class="form-control">        
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
      </div>
      <div class="form-group">
        <label>Location</label>
        <input type="text" name="location" class="form-control">
      </div>
      <div class="form-group">
        <label>Skills</label>
        <input type="text" name="skills" class="form-control">
      </div>
      <button class="btn btn-primary" type="submit" value="Save">Save</button>
    </form>
  </div>

  <?php require_once('footer.php'); ?>