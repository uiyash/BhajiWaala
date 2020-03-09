<?php
  session_start();
  session_unset();
  session_destroy();
  header("Location: index.php");
  exit();
//  echo "<script>window.open('index.php','_self')</script>";

  ?>