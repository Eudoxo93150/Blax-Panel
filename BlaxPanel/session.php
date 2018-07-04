<?php
include('index.php');
   $host = "localhost";
   $user = "root";
   $pass = "";
   $data = "users";
   
   $connect = new mysqli($host, $user, $pass, $data);
   if($connect->connect_errno){
   
       printf("Error: %s\n", $con->connect_error);
   }
   session_start();
   //$sql = "SELECT * FROM data WHERE username = '$myusername' and password = '$mypassword'";
   $user_check = $_SESSION['login_user'];
   //$ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   $ses_sql = mysqli_query($connect,"SELECT username FROM data WHERE username = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: index.php");
   }
?>