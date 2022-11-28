<?php
session_start();
$error = '';
$err_msg_repassword = '';
$err_msg_username='';
$err_msg_email='';
$err_msg_collegeid='';
if (isset($_POST['submit'])) {
   if (empty($_POST['fname']) || empty($_POST['email']) || empty($_POST['cid']) || empty($_POST['password']) || empty($_POST['re-password']) || empty($_POST['unicourse']) || empty($_POST['username'])) {
      //  $error = "Invalid Credentials";
      echo '<script>alert("Please Enter valid credentials");</script>';
   } else {
      if ($_POST['password'] != $_POST['re-password']) {
         $err_msg_repassword = "Passwords do not match";
         echo "<style>
#error-password{
   display:block;}
 </style>";
      } else {
         $err_msg_repassword = "";
         echo "<style>
 #error-password{
   display:None;}
 </style>";
      }
   }
   $fname = $_POST['fname'];
   $email = $_POST['email'];
   $cid = $_POST['cid'];
   $password = $_POST['password'];
   $unicourse = $_POST['unicourse'];
   $username=$_POST['username'];
   // echo "<script>alert('$unicourse ')</script>";

   // $course=$_POST['unicourse'];
   $conn = mysqli_connect("localhost", "root", "", "helpdesk");
   // $db = mysqli_select_db($conn, "helpdesk");
   $query = mysqli_query($conn, "SELECT * FROM user_registration WHERE username=TRIM('$username')");
   $rows = mysqli_num_rows($query);
   if($rows!=0){
      $err_msg_username="Username already exist";
      echo "<style>
#error-username{
   display:block;}
 </style>";
   }else{
      $err_msg_username="";
      echo "<style>
#error-username{
   display:None;}
 </style>";
   }
   $query1 = mysqli_query($conn, "SELECT * FROM user_registration WHERE email=TRIM('$email')");
   $rows1 = mysqli_num_rows($query1);
   if($rows1!=0){
      $err_msg_email="Email already exist";
      echo "<style>
#error-email{
   display:block;}
 </style>";
   }else{
      $err_msg_email="";
      echo "<style>
#error-email{
   display:None;}
 </style>";
   }
   $query2 = mysqli_query($conn, "SELECT * FROM user_registration WHERE userid=TRIM('$cid')");
   $rows2 = mysqli_num_rows($query2);
   if($rows!=0){
      $err_msg_collegeid="User already registered with this ID";
      echo "<style>
#error-collegeID{
   display:block;}
 </style>";
   }else{
      $err_msg_collegeid="";
      echo "<style>
#error-collegeID{
   display:None;}
 </style>";
   }
   if($err_msg_collegeid==="" && $err_msg_email==="" && $err_msg_repassword==="" && $err_msg_username===""){
   mysqli_query($conn,"INSERT into `helpdesk`.`user_registration`(`userid`, `fullname`, `email`,`username`, `pass`, `course`, `usertype`) values (TRIM('$cid'),TRIM('$fname'),TRIM('$email'),TRIM('$username'),TRIM('$password'),'$unicourse','1')");
   echo "<style>
   #user_msg{
      display:block;}
    </style>";
   // header("Location:../index.php");

   // echo "<script>console.log(' $password ')</script>";
   // echo "<script>console.log('$email ')</script>";
   // echo "<script>console.log(' $cid ')</script>";
   // echo "<script>console.log('$unicourse ')</script>";
   // echo "<script>console.log('$fname ')</script>";  
   }
}