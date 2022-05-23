<?php
  require "../../Funciones/Conectar.php";
    $conexion = conectar();
    $nombre = $_REQUEST['nombre'];
    $precio = $_REQUEST['precio'];
    $sql = "INSERT INTO productos(nombre,precio) VALUES ('$nombre','$precio');";
    $respuesta = $conexion -> query($sql);
?>