<?php
  require "../Funciones/Conectar.php";
    $conexion = conectar();

    $nombre = $_REQUEST['nombre'];
    $usuario = $_REQUEST['usuario'];
    $rol = $_REQUEST['rol'];
    $contrasena = $_REQUEST['contrasena'];
    $sql = "INSERT INTO usuarios(nombre,usuario,pass,rol) VALUES ('$nombre','$usuario','$contrasena','$rol');";
    $respuesta = $conexion -> query($sql);
?>