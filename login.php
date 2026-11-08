<?php
    $host = getenv("MYSQLHOST");
    $user = getenv("MYSQLUSER");
    $password = getenv("MYSQLPASSWORD");
    $db = getenv("MYSQLDATABASE");
    $port = getenv("MYSQLPORT");

    $con=mysqli_connect($host, $user, $password, $db, $port)or die("Problemas al conectar"); 
        mysqli_select_db($con,$db);

    //TRABAJANDO CON LOS VARIABLES
    $usuario=$_POST["usuario"];
    $password=$_POST["password"];
    $sql=mysqli_query($con,"SELECT * FROM academia WHERE usuario='".$usuario."'and password='".$password."' ");
    $nr=mysqli_num_rows($sql);
    //USO DE MI CONDICIONAL
    if($nr==1){
        header("Location:pagina.html");
    }else{
        echo "<script>alert('Usuario Incorrecto');</script>";
        echo "<script>window.location.href=('login.html');</script>";
    }

?>
