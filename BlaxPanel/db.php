<?php


$host = "localhost";
$user = "root";
$pass = "";
$data = "users";

$connect = new mysqli($host, $user, $pass, $data);
if($connect->connect_errno){

    printf("Error: %s\n", $con->connect_error);


}


?>