
  <?php

  function consolelog($data)
  {
    $console = $data;
    if (is_array($console))
      $console = implode(',', $console);

    echo "<script>console.log('Console: " . $console . "' );</script>";
  }

  ?>



  <?php
  require "../../Funciones/Conectar.php";

  $con = conectar();
  $sql = "SELECT COUNT(*) AS contador FROM mesas;";
  $resultado = $con->query($sql);

  $row = mysqli_fetch_assoc($resultado);
  $contador = $row['contador'];

  $conexion = conectar();
  $mesa = $_REQUEST['mesa'];
  $descripcion = $_REQUEST['desc'];
  $producto1 = $_REQUEST['producto1'];

  consolelog($mesa);

  $sql = "INSERT INTO comandas(mesa,descripcion) VALUES ('$mesa','$descripcion');";
  $respuesta = $conexion->query($sql);

  consolelog($contador);


  $sql = "INSERT INTO detallecomanda(id_producto) VALUES ('$producto1');";
  $respuesta = $conexion->query($sql);
  ?>