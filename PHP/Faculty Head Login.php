<?php
session_start();
// $PATH="C:\xampp\htdocs\OHD";
$error='';
if(isset($_POST['submit'])){
 if(empty($_POST['fid']) || empty($_POST['password'])||empty($_POST['username'])){
 $error = "Invalid Credentials";
 }
 else
 {

 $fid=$_POST['fid'];
 $pass=$_POST['password'];
 $username=$_POST['username'];

 $conn = mysqli_connect("localhost", "root","", "helpdesk");

 $db = mysqli_select_db($conn, "helpdesk");

 $query = mysqli_query($conn, "SELECT *  FROM user_registration WHERE pass='$pass' AND username=TRIM('$username') AND userid=TRIM('$fid') AND usertype=2");
 
 $rows = mysqli_num_rows($query);
// <h1>echo $rows</h1>
 if($rows == 1){
  $_SESSION['username']=$username;
  $_SESSION['userid']= $cid;
  $name=mysqli_query($conn, "SELECT fullname FROM user_registration WHERE pass='$pass' AND username=TRIM('$username') AND userid=TRIM('$fid') AND usertype=2");
  $fullname = mysqli_fetch_assoc($name);
  $_SESSION['name']=$fullname['fullname'];
  $_SESSION['usertype']="Faculty";
   //  echo 'successul login';
   header("Location: ../HTML/FacultyIntPage.php");
 }
 else
 {
   echo '<script>alert("Please enter valid credentials");</script>';
}
 mysqli_close($conn);
 }
}
?>