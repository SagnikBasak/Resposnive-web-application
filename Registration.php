<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Now</title>
    <link rel="stylesheet" href="Registration.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script type="text/javascript" src="Reg_user_validation.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   </head>

<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="registration_connect.php" method="post" onsubmit="return validation()">
        <div class="user-details">
          <div class="input-box">
            <label class="details">Full Name</label>
            <input type="text" placeholder="Enter your name" name="fullName"  id="fullname">
            <span id="username" style="color:red"> </span>
          </div>
          <div class="input-box">
            <label class="details">Email</label>
            <input type="email" placeholder="Enter your email" name="email" id="email">
            <span id="emailid" style="color:red"></span>
          </div>

          <div class="input-box">
            <label class="details">Phone Number</label>
            <input type="tel" placeholder="Enter your number" name="number" id="phone">
            <span id="mobileno" style="color:red"> </span>
          </div>
          <div class="input-box">
            <label class="details">Date of Birth</label>
            <input type="date" placeholder="Enter your DOB" name="dob" id="dob">
          </div>
          <div class="input-box">
            <label class="details" id="gen">Select Gender</label>
          </div>
          <div class="gender-details">
            <input type="radio" name="gender" value="m" >Male</input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gender" value="f" >Female</input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gender" value="o" >Others</input>
          </div>
          <div class="input-box">
            <label class="details">Password</label>
            <input type="text" placeholder="Enter your password" name="password" id="pass" onInput="pass_check()">
            <span id="pass_valid"> </span>
            <div id="check0">
                <i class="far fa-check-circle"></i>  <span> Length more than 5</span>
            </div>
            <div id="check1">
                <i class="far fa-check-circle"></i>  <span> Length less than 20</span>
            </div>
            <div id="check2">
                <i class="far fa-check-circle"></i>  <span> Contains numerical character</span>
            </div>
            <div id="check3">
                <i class="far fa-check-circle"></i>   <span>Contains special character</span>
            </div>
            <div id="check4">
                <i class="far fa-check-circle"></i>  <span>Shouldn't contain spaces</span>
            </div>
            <div id="check5">
                <i class="far fa-check-circle"></i>  <span>Password Shouldn't be empty</span>
            </div>
          </div>
          <div class="input-box">
            <label class="details">Confirm Password</label>
            <input type="text" placeholder="Confirm your password" name="conpass" id="conpass" >
            <span id="confrmpass" style="color:red"> </span>
          </div>
        </div>
        <div class="btn">
          <div class="submit">
            <input type="submit" id="submit">
          </div>
          <div class="reset">
            <input type="reset">
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
