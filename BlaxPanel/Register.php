<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar</title>
</head>
<body>
<?php
        $server = "localhost";
        $usuario = "root";
        $pass = "";
        $bd = "users";

        $conexion = mysqli_connect($server, $usuario, $pass, $bd)
        or die("Error en la conexion");

        $Nombre = $_POST['username'];
        $pwd = $_POST['password'];
        $fecha = $_POST['date'];
        $hwid = $_POST['hwid'];

        $insertar = "INSERT into date values ('$Nombre','$pwd','$fecha', '$hwid')";

        $resultado = mysqli_query($conexion,$insertar)
        or die ("failed Register");

        mysqli_close($conexion);
        header("location: Home.php");
        echo "";
    ?>
</body>
</html>