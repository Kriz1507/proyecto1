<?php
    $host = getenv("MYSQLHOST");
    $user = getenv("MYSQLUSER");
    $password = getenv("MYSQLPASSWORD");
    $db = getenv("MYSQLDATABASE");
    $port = getenv("MYSQLPORT");

    $con=mysqli_connect($host, $user, $password, $db, $port)or die("Problemas al conectar"); 
        mysqli_select_db($con,$db);

    //TRABAJANDO CON LAS VARIABLES
    $nombres=$_POST["nombres"];
    $direction=$_POST["direction"];
    $correo=$_POST["correo"];
    $comentarios=$_POST["comentarios"];
    $sql="INSERT INTO datos VALUES (NULL,'$nombres','$direction','$correo','$comentarios')";
    $ejecutar=mysqli_query($con,$sql);

    //USAMOS LAS CONDICIONES
    if(!$ejecutar){
        echo "<script>alert('Problemas al enviar')</script>";
        echo "<script>window.location.href=('index.html')</script>";
    }
    else{
        echo "<script>alert('Datos enviados correctamente')</script>";
        echo "<script>window.location.href=('index.html')</script>";
    }
?>
