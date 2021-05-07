<?php

  $server = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'test';
  $conn = new mysqli($server, $user, $pass, $db);
  if($conn -> connect_errno > 0){
    echo "<script>console.log('not connected to database')</script>";
  }
  else{
    echo "<script>console.log('connected to database')</script>";
  }

 ?>
