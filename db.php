<?php
try {
  //Connection to Database
  $conn = new PDO('mysql:host=127.0.0.1:53694; dbname=localdb', 'azure','6#vWHD_$');
} catch (PDOException $e) {
    echo $e;
}
?>