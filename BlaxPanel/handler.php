<?php
include('db.php');
$action = $_GET['action'];
$username = $connect->real_escape_string($_GET['username']);
$password = $connect->real_escape_string($_GET['password']);
//$date = $connect->real_escape_string($_GET['date']);
$hwid = $connect->real_escape_string($_GET['hwid']);

if(!$action){
    echo "Error.";
}else{
    
    }
    if($action == "login"){
        $query = $connect->query("SELECT * FROM date WHERE username = '$username' and password = '$password' and hwid = '$hwid'");
        $cnt = $query->num_rows;

        if($cnt > 0){
            echo "true";
 
        }else{
            echo "false";


        }
    }else{
        echo "Accion Invalida.";

    }




?>