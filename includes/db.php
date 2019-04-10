<?php
try {
  //Connection to Database
  $db = new PDO('mysql:host=127.0.0.1:53694; dbname=localdb', 'azure','6#vWHD_$');
  echo "<p> You are connected! Yay! </p>";
} catch (PDOException $e) {
    echo "<p> Sorry you can't connect.</p>";
    echo $e;
}
?>