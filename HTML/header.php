<style>
<?php 
include '../CSS/header.css';?>
</style>
<div class="pageheader">
  <!-- <div class="navbar navbar-fixed-top navbar-custom "> -->
    <!-- <div class="container"> -->
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><img class="logo" src="../IMAGES/logo.png" alt=""></a>
      </div>
      <!-- <div class="nav navbar-nav navbar-right"> -->
        <div class="dropdown toggle-position">

          <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <?php
            session_start(); 
            $username=$_SESSION['username'];
            echo "$username";?>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li class="dropdown-item">
              <?php $name=$_SESSION['name']; 
            // $row = mysql_fetch_row($name);
            echo "$name";  ?>
            </li>
            <li class="dropdown-item">
              <?php  $usertype=$_SESSION['usertype'];
            echo "$usertype";?>
            </li>
            <li class="dropdown-item">
              <?php  $userid=$_SESSION['userid'];
            echo "$userid";?>
            </li>
            <?php
            if(isset($_POST['logout'])){
              session_destroy();
              header('Location:../index.php');
            }?>
            <form method="POST">
            <input type="submit" name="logout" value="Logout" id="logout">
            </form>
          </div>
        <!-- </div> -->
      </div>
    <!-- </div> -->
  <!-- </div> -->
</div>