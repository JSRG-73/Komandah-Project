<?php
//administradres_listas.php
require "conecta.php";
$con=conecta();

$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];
$pass=$_REQUEST['pass'];
$rol=$_REQUEST['rol'];
$passenc=md5($pass);



$sql="INSERT INTO  empleados
        (nombre, apellido, rol, pass)
        VALUES ('$nombre', '$apellido',$rol,'$passenc')";
$res=$con->query($sql);
header("Location: index.php");
?>