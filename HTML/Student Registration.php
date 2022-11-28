<html>

<head>
    <link rel="stylesheet" href="../CSS/College Head.css">
    <link rel="stylesheet" href="../CSS/registration form.css">
</head>

<body id="bo">
    <a href="../index.php" class="logo"><img src="../IMAGES/logo.png" width="110px" height="110px"></a>
    <div class="dropdown" style="float:right;" id="accbtn">
        <button class="btn btn1 dropbtn1">User Login</button>
        <div class="dropdown-content">
            <a href="../index.php">Student Login</a>
            <a href="#">College Head Login</a>
            <a href="Faculty Head Login.php">Faculty Head Login</a>
        </div>
    </div>
    <!-- <div class="login-form"> -->
    <?php
      include '../PHP/Student Register.php'
    ?>
    <!-- onsubmit="return cla()" -->
     <form method="POST"  class="signup-form login-form">
        <h1 class="ha1">Sign Up</h1>
        <p id="user_msg">User has been registered. <a href="../index.php">Click Here</a> to login.</p>
        <div class="txtb">
            <input type="text" placeholder="Enter Your Full Name" id="fname" name="fname" required>
        </div>
        <div class="txtb">
            <input type="text" placeholder="Enter a Unique Username" id="username" name="username" required>
        </div>
        <p class=err-msg id=error-username><?= $err_msg_username ?></p>
        <div class="txtb">
            <input type="email" placeholder="Enter your Email" id="email" name="email" required>
        </div>
        <p class=err-msg id=error-email><?= $err_msg_email ?></p>
        <!-- <p class=err-msg id=error-email>hksdfhhsifh</p> -->

        <div class="txtb">
            <input type="text" placeholder="Enter your College ID" id="cid" name="cid" required>
        </div>
        <p class=err-msg id=error-collegeID><?= $err_msg_collegeid ?></p>
        <div class="txtb">
            <input type="password" placeholder="Enter your Password" id="pass" name="password" required>
        </div>
        <div class="txtb">
            <input type="password" placeholder="Re-Enter your Password" id="rpass" name="re-password" required>
        </div>
        <p class=err-msg id=error-password><?= $err_msg_repassword?></p>

        <!-- <label for="unicourse" class="font2">University Coures</label><br> -->
        <div class="select txtb">
            <select id="unicourse" name="unicourse" class="unicourse" required>
                <option value=1>Computer Science and Engineering</option>
                <option value=2>Information Technology</option>
                <option value=3>Electrical Engineering</option>
                <option value=4>Electronics and Communication Engineering</option>
                <option value=5>Mechanical Engineering</option>
                <option value=6>Civil Engineering</option>
            </select>
        </div>
        <!-- <p class=err-msg id=error-u>Please select an option</p> -->

        <input type="submit" class="logbtn" value="Create Account" name="submit">
        <div class="bottom-text">
            <a href="../index.php">Already Have one ?</a>
        </div>
    </form>
    <!-- </div> -->
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