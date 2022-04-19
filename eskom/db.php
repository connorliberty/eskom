<?php
  $connection = mysqli_connect('localhost', 'root', '', 'eskom');
  if (!$connection) {
    die("Database connection failed");
  }

?>