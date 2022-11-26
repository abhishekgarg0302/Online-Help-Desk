<?php
session_start();
$error='';
if(isset($_POST['submit'])){
 if(empty($_POST['fname']) || empty($_POST['email'])||empty($_POST['cid'])||empty($_POST['password'])||empty($_POST['re-password'])||empty($_POST['unicourse'])||empty($_POST['username'])){
 $error = "Invalid Credentials";
 echo '<script>alert("Please Enter valid credentials");</script>';
 
//  else if($_POST['password']!=$_POST['re-password']){
 echo '<script>alert("Passwords do not match");</script>';
 }

else
 {
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $cid=$_POST['cid'];
    $password=$_POST['password'];
    $unicourse=$_POST['unicourse'];
    $conn = mysqli_connect("localhost", "root","", "helpdesk");
    // $db = mysqli_select_db($conn, "helpdesk");
 $query = mysqli_query($conn, "SELECT * FROM user_registration WHERE  username='($username')");
 $rows = mysqli_num_rows($query);}
 if($rows!=0){
 echo '<script>alert("Username already exist");</script>';
 }
}