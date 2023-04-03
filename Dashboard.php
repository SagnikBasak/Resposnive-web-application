<?php
session_start();
$username = $_SESSION["user_name"];
if($username == true){

}
else{
  header("location: MainPage.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
</head>
<body>

<center><h1>Welcome, <?php echo $_SESSION["user_name"]; ?></h1></center>
<center><p>This is the dashboard page.</p></center>
<a href="logout.php"><center><button type="submit" name="" value="Logout" style="height: 35px; width: 100px;">Logout</button></center></a>

</body>
</html>
