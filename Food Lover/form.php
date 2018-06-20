<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>form</title>
		<link rel="stylesheet" href="css/form.css">	
	</head>
	<body>
		<div class="headertop">
			<ul >
				<li><a href="index.php" style="text-decoration: none; font-weight: bold; color:white;">Home</a></li>
				<li><a href="rest.php" style="text-decoration: none; font-weight: bold; color:white;">About Restaurant</a></li>
				<li><a href="about fonders.php" style="text-decoration: none; font-weight: bold; color:white;">Team</a></li>
				<li><a href="contact.php" style="text-decoration: none; font-weight: bold; color:white;">Contact</a></li>
				<li>
					<i class="fa fa-user"></i>
					<li><a href="login.php" style="text-decoration: none; font-weight: bold; color:white;">Log in</a></li>
				</li>
			</ul>
		</div>
		<div class="bg">
			<h1>sign up</h1> 
			<form method="post" action="ensure_new_owner.php">
				<input type="text" placeholder="Enter Your Name" name="username" required>
				<input type="password" placeholder="Enter Your Password" name="pass" required>
				<input type="password" placeholder="Confirm Your Password" name="newpass" required>
				<input type="email" placeholder="Enter Your Email Address" name="email" required>				
				<input type="number" placeholder="Enter Your Phone Number" name="tel" required>
				<input type="submit" value="OK">
				<a href="restaurant_content.php">BACK</a>
				
			<form>
		</div>
	</body>
</html>