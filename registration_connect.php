<?php
session_start();

function getIp() {
  if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
  else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
  return $ip;
}


function getOS() {
  $u_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
  $operating_system = 'Unknown Operating System';
  if($u_agent) {
    if (preg_match('/linux/i', $u_agent)) {
      $operating_system = 'Linux';
    } elseif (preg_match('/macintosh|mac os x|mac_powerpc/i', $u_agent)) {
      $operating_system = 'Mac';
    } elseif (preg_match('/windows|win32|win98|win95|win16/i', $u_agent)) {
      $operating_system = 'Windows';
    } elseif (preg_match('/ubuntu/i', $u_agent)) {
      $operating_system = 'Ubuntu';
    } elseif (preg_match('/iphone/i', $u_agent)) {
      $operating_system = 'IPhone';
    } elseif (preg_match('/ipod/i', $u_agent)) {
      $operating_system = 'IPod';
    } elseif (preg_match('/ipad/i', $u_agent)) {
      $operating_system = 'IPad';
    } elseif (preg_match('/android/i', $u_agent)) {
      $operating_system = 'Android';
    } elseif (preg_match('/blackberry/i', $u_agent)) {
      $operating_system = 'Blackberry';
    } elseif (preg_match('/webos/i', $u_agent)) {
      $operating_system = 'Mobile';
    }
  } else {
    $operating_system = php_uname('s');
  }
    return $operating_system;
}


function getBrowser() {
  $arr_browsers = ["Opera", "Edg", "Chrome", "Safari", "Firefox", "MSIE", "Trident"];
  $agent = $_SERVER['HTTP_USER_AGENT'];
  $user_browser = '';
  foreach ($arr_browsers as $browser) {
      if (strpos($agent, $browser) !== false) {
          $user_browser = $browser;
          break;
      }
  }
  switch ($user_browser) {
      case 'MSIE':
          $user_browser = 'Internet Explorer';
          break;

      case 'Trident':
          $user_browser = 'Internet Explorer';
          break;

      case 'Edg':
          $user_browser = 'Microsoft Edge';
          break;
  }
      return $user_browser;
}

  $fullName = $_POST['fullName'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $dob = date('y-m-d', strtotime($_POST['dob']));
  $password = $_POST['password'];
  $gender = $_POST['gender'];
  $ip = getIp();
  $os = getOS();
  $browser = getBrowser();

  // Database connection
  $con=mysqli_connect("localhost","root","","accounts");
  //print_r($con);
  if ($con->connect_error) {
    echo "Connection Failed: ".mysqli_connect_error();
  }
  else {
    //email checking
    $sql = "SELECT email FROM registration WHERE email = '".$email."'";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
      echo "<script>alert('Email id already registered, please use another email id.'); window.location.href = document.referrer;</script>";
      mysqli_close($con);
    }
    else {
      $sql = "INSERT INTO registration(fullName, email, number, dob, password, gender, ip, os, browser)
      VALUES ('$fullName', '$email', $number, '$dob', '$password', '$gender', '$ip', '$os', '$browser')";
      if ($con->query($sql) === TRUE) {
        echo "<script>alert('Registration Successful. Please login to your account');document.location='MainPage.php'</script>";
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
      }
    }
  }
  // Close database connection
  mysqli_close($con);
?>
