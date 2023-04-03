<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Easy Mart</title>
	<link rel = "icon" href ="favicon.jpg" type = "image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="MainPage.css">
</head>
<body>

	<video class="video-bg" autoplay loop muted>
		<source src="bg_video.mp4" type="video/mp4">
	</video>

	<div class="header">
		<table border="0" width="100%" height="50px" bgcolor="" class="header1">
		  <tr align="center">
		    <td align="right"><img src="MainLogo.png" width="70" height="25"></td>
		    <td>
					<form action="https://www.google.co.in/search" method="get" class="search-bar">
						<input type="text" name="" placeholder="Search for your needs">
						<button type="submit"><span class="material-symbols-rounded">search</span></button>
					</form>
				</td>
		    <td width="12%"><label for="show">Login</label></td>
		    <td><a href="Registration.php" target="_blank">Signup</a></td>
		    <td>More</td>
		    <td>Cart<span class="material-symbols-rounded">shopping_cart</span></td>
		  </tr>
		</table>

		<table border="0" width="100%" height="45px" bgcolor="" class="header2">
		<tr align="center">
	      <td width="14.29%">Electronics</td>
		  	<td width="14.29%">Mobile</td>
	      <td width="14.29%">Home</td>
	      <td width="14.29%">Fashion</td>
	      <td width="14.29%">Appliances</td>
	      <td width="14.29%">Furniture</td>
	      <td width="14.29%">More Offer</td>
	    </tr>
		</table>
	</div>

	<div class="box">
		<h2>EasyMart</h2>
	</div>

	<div class="center">
		<input type="checkbox" id="show">
		<div class="container">
			<label for="show" class="close-btn fas fa-times" title="close"></label>
			<div class="text">Login Form</div>
				<form action="login.php" method="post">
					<div class="data">
						<label>Email or Phone</label>
						<input type="email" name="email" placeholder="Enter email of phone number" required>
					</div>
					<div class="data">
						<label>Password</label>
						<input type="text" name="password" placeholder="Enter password" required>
					</div>
					<div class="forgot-pass">
							<a href="#">Forgot Password?</a>
					</div>
					<div class="btn">
						<div class="inner"></div>
						<button type="submit" name="login">login</button>
					</div>
					<div class="signup-link">Not a member?
						<a href="Registration.php" target="_blank">Signup now</a>
					</div>
				</form>
		</div>
	</div>
</body>
</html>
