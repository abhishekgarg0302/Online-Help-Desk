<html>

<head>
	<link rel="stylesheet" href="../CSS/College Head.css">
</head>

<body id="bo">
	<a href="../index.php" class="logo"><img src="../IMAGES/logo.png" width="110px" height="110px"></a>
	<div class="dropdown" style="float:right;" id="accbtn">
		<button class="btn btn1 dropbtn1">User Login</button>
		<div class="dropdown-content">
			<a href="../index.php">Student Login</a>
			<a href="College Head Login.php">College Head Login</a>
			<a href="Faculty Head Login.php">Faculty Head Login</a>
		</div>
	</div>
	<form method="POST" action="../PHP/Forgot password_db.php" class="login-form">
		<h1 class="ha1">Change Password</h1>
		<div class="txtb">
			<center><input type="email" placeholder="Enter Your E-mail" name="email" id="email" required><br></center>
		</div>
		<div class="txtb">
			<center><input type="password" placeholder="Enter Your New Password" id="password" name="password"
					pattern=".{8,}" required></center>
		</div>
		<div class="txtb">
			<center><input type="password" placeholder="Re-Enter the Password" id="repass" required></center>
		</div>
		<div class="select txtb">
			<select id="user-type" name="unicourse" class="unicourse" required>
				<option>Student</option>
				<option>Faculty Head</option>
				<option>College Head</option>
			</select>
		</div>

		<center><input type="submit" class="logbtn" value="Update" name="submit"></center>

	</form>
	<div id="page"></div>
	<div class="footer">
		<div class="footer-content">

			<div class="footer-section about">
				<h1 id="text">About Website</h1>
				<p id="text">This site represents an online helpdesk for SKIT students.<br>It allows
					students to raise their queries and let faculty members guide them. </p>
			</div>
			<div class="footer-section links"></div>
			<div id="footerimgW">
				<a href="https://web.whatsapp.com/"><img src="../IMAGES/whatapp.jpg" width="30px" height="30px"></a>
				<a href="https://www.youtube.com/"><img src="../IMAGES/youtube.png" width="30px" height="30px"></a>
				<a href="https://www.facebook.com/"><img src="../IMAGES/facebook.png" width="30px" height="30px"></a>
			</div>
		</div>
		<div class="footer-bottom" id="text">
			&copy;Techies
		</div>
	</div>
</body>

</html>