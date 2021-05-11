<?php

  $server = 'cornerstudy.cpbyo9ppx7l7.eu-central-1.rds.amazonaws.com';
  $user = 'admin';
  $pass = 'adminadmin';
  $db = 'cornerstudy';
  $conn = new mysqli($server, $user, $pass, $db);
  if($conn -> connect_errno > 0){
    echo "<script>console.log('not connected to database')</script>";
  }
  else{
    echo "<script>console.log('connected to database')</script>";
  }

 ?>
