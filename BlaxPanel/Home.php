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
   $user_check = $_SESSION['login_user'];
   $ses_sql = mysqli_query($connect,"SELECT username FROM administration WHERE username = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
     header("location: index.php");
   }

   $ip = $_SERVER['REMOTE_ADDR'];

?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
  
      <h1>Bienvenido <?php echo $login_session; ?></h1> 
      <h1>TU IP --> <?php echo $ip; ?></h1>
      <h2><a href = "logout.php">Salir</a></h2>
      <center><h1>Informacion</h1></center>
   <center> <form action="Register.php" method="POST">
        ID: <input type="text" name="username"><br>
        Pass: <input type="text" name="password"><br>
        Hwid: <input type="text" name="hwid"><br>
        Fecha: <input type="date" name="date"><br>
        <h1>Fecha <?php $data_inicial =  date('d-m-y'); echo $data_inicial; ?></h1> 
        <button type="submit">Register</button>
    </form></center>

    <center><a href="https://www.youtube.com/channel/UCRuk-LotQlhPOs5XMWU8bwA?view_as=subscriber" target="_blank">By Crazy99</a></center>
   </body>
   
</html>