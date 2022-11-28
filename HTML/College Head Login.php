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
			<!-- <a href="#">College Head Login</a> -->
			<a href="Faculty Head Login.php">Faculty Head Login</a>
		</div>
	</div>
	<?php require '../PHP/College Head Login.php'?>
    <form method="POST"  class="login-form">
		<h1 class="ha1">College Head Login</h1>
		<div class="txtb">
			<input type="text" placeholder="Unique ID" id="cid" name="cid" required>
		</div>
        <div class="txtb">
			<input type="text" placeholder="Username" id="username" name="username" required>
		</div>
		<div class="txtb">
			<input type="password" placeholder="Password" id="pass" name="password" required>
		</div>

		<input type="submit" class="logbtn" value="Login" name="submit">

		<div class="bottom-text">
			<a href="Forgot password page.php">Forgot the Password</a>
		</div>
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
				<a href="https://www.instagram.com/skitjaipurofficial/"><img src="../IMAGES/instagram.svg" width="30px" height="30px"></a>
				<a href="https://www.youtube.com/@SKITJaipurOfficial/"><img src="../IMAGES/youtube.png" width="30px" height="30px"></a>
				<a href="https://www.facebook.com/SKITJAIP"><img src="../IMAGES/facebook.png" width="30px" height="30px"></a>
			</div>
		</div>
		<div class="footer-bottom" id="text">
			&copy;Techies
		</div>
	</div>
</body>
</html>