<?php
// Database connection
$con=mysqli_connect("localhost","root","","accounts");
//check connection
if (mysqli_connect_errno()) {
  echo "Connection Failed".mysqli_connect_error();
}
?>
