<?php
  require "./Conectar.php";
    $conexion = conectar();
    $sql = "SELECT * FROM Usuarios WHERE id > 0";
    $respuesta = $conexion -> query($sql);

    echo $respuesta;
?>