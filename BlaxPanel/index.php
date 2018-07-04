<?php
   $host = "localhost";
   $user = "root";
   $pass = "";
   $data = "users";
   
   $connect = new mysqli($host, $user, $pass, $data);
   if($connect->connect_errno){
   
       printf("Error: %s\n", $con->connect_error);
   
   
   }
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    
      
      $myusername = mysqli_real_escape_string($connect,$_POST['username']);
      $mypassword = mysqli_real_escape_string($connect,$_POST['password']); 
      
      $sql = "SELECT * FROM administration WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($connect,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      $count = mysqli_num_rows($result);
      
     
		
      if($count == 1) {
        //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         header("location: Home.php");
      }else {
         $error = "Su nombre de usuario o contraseña no es válido";
      }
   }
?>

<html>

   <head>
      <title>Panel Blax</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <center><label>ID   :</label><input type = "text" name = "username" class = "box"/><br /><br /></center>
                  <label>PASS  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px">Su nombre de usuario o contraseña no es válido</div>
					
            </div>
				
         </div>
			
      </div>
      
   </body>
</html>