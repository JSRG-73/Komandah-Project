<?php
    require "Conectar.php";
    $conexion = conectar();
    $res = 0;

    $user = $_REQUEST['usuario'];
    $resultado=$conexion->query("SELECT EXISTS (SELECT * FROM usuarios WHERE usuario='$user');");
    $row=mysqli_fetch_row($resultado);

    if ($row[0]=="1") {                 
        $res = 1;
    }
    echo $res;
?>