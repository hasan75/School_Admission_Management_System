<?php
    session_start();
    include '../conn.php'; // MySQL Connection

   $user_check = $_SESSION['name'];
   
   $ses_sql = mysqli_query($con,"select username from user_list where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['name'])){
      header("location:../login");
      die();
   }
?>