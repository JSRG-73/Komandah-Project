<?php
//administradres_listas.php
require "conecta.php";
$con=conecta();

$nombre=$_REQUEST['nombre'];
$descripcion=$_REQUEST['descripcion'];
$precio=$_REQUEST['precio'];




$sql="INSERT INTO  productos
        (nombre, descripcion ,precio)
        VALUES ('$nombre', '$descripcion',$precio)";
$res=$con->query($sql);
header("Location: index.php");
?>