<?php
session_start();
$PATH="C:\xampp\htdocs\OHD";
$error='';
if(isset($_POST['submit'])){
 if(empty($_POST['cid']) || empty($_POST['password'])||empty($_POST['username'])){
 $error = "Invalid Credentials";
 }
 else
 {

 $cid=$_POST['cid'];
 $pass=$_POST['password'];
 $username=$_POST['username'];

 $conn = mysqli_connect("localhost", "root","", "helpdesk");

 $db = mysqli_select_db($conn, "helpdesk");

 $query = mysqli_query($conn, "SELECT *  FROM user_registration WHERE pass='$pass' AND username='$username' AND userid='$cid'");
 
 $rows = mysqli_num_rows($query);
// <h1>echo $rows</h1>
 if($rows == 1){
    $_SESSION['username']=$username;
    $_SESSION['userid']= $cid;
    // echo 'successul login';
    header("Location: ../success.html");
 }
 else
 {
  //  %error ="Enter Valid Credentials";  
  //  header("Location:https://stackoverflow.com/questions/4871942/how-to-redirect-to-another-page-using-php");    
  echo 'database failed';
}
 mysqli_close($conn);
 }
}
?>