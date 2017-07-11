<?php
$db = mysqli_connect("localhost","root","","dss");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
      //echo"Succesful connection to MySQL";
  }
?>