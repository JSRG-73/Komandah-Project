<?php
  require "../../Funciones/Conectar.php";
    $conexion = conectar();
    $nombre = $_REQUEST['nombre'];
    $precio = $_REQUEST['precio'];
    $sql = "INSERT INTO productos(nombre,precio) VALUES ('$nombre','$precio');";
    if(isset($_REQUEST['descripcion'])){
      $desc = $_REQUEST['descripcion'];
      if($desc != '' && $desc != null){
        $sql = "INSERT INTO productos(nombre,precio,descripcion) VALUES ('$nombre','$precio','$desc');";
      }
  }
    $respuesta = $conexion -> query($sql);
    header('location: ./display.php');
?>