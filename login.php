<?php
session_start();
include('login_connect.php');
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $pass = $_POST['password'];

  //query to search and check for the email and password
  $query = "SELECT * FROM registration WHERE email = '$email' &&  password = '$pass'";
  $data = mysqli_query($con,$query);

  //find the number of matched rows
  $total = mysqli_num_rows($data);
  //echo $total;  it will be 1 or 0 that is true or false

  //fetch associate data and store into row array
  $row = mysqli_fetch_assoc($data);

  //checking if login credentials matched only 1 time
  if($total==1){
    extract($row);
    $u_name = $fullName;
    $_SESSION["user_name"] = $u_name;
    header("location: Dashboard.php");
    exit();
  }
  else{
    echo "<font color='red'>Login FAILED</font>";
  }
}
// Close database connection
$con->close();
?>
