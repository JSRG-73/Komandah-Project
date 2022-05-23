<?php
  require "../../Funciones/Conectar.php";
    $conexion = conectar();
    $nombre = $_REQUEST['nombre'];
    $usuario = $_REQUEST['usuario'];
    $rol = $_REQUEST['rol'];
    $contrasena = $_REQUEST['contrasena'];
    $passEnc = md5($contrasena);
    $sql = "INSERT INTO usuarios(nombre,usuario,pass,rol) VALUES ('$nombre','$usuario','$passEnc ','$rol');";
    $respuesta = $conexion -> query($sql);
    header("Location: ./display.php");
?>