<?php 
$server="localhost";
$user="root";
$pass="";
$db="crud";

$conexion = new mysqli($server,$user,$pass,$db);

if($conexion->connect_errno){
    die("la conexion ha fallado". $conexion->connecy_errno);
}
?>