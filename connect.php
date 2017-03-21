<?php
require_once 'config.php';
$con=mysqli_connect(HOST, USERNAME, PASSWORD, 'test' );
if(!$con)

  {
      
      echo "failed!";
  }