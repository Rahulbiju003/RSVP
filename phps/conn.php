<?php
$conn = mysqli_connect("localhost","root","","basic");
 
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
