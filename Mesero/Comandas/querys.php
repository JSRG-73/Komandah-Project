
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
  $conexion = conectar();
  $mesa = $_REQUEST['mesa'];
  $cmesa = $_REQUEST['cmesas'];
  $notas = $_REQUEST['notas'];
  $producto1 = $_REQUEST['producto1'];

  consolelog($mesa);

  $sql = "INSERT INTO comandas(mesa,descripcion) VALUES ('$mesa','$notas');";
  $respuesta = $conexion->query($sql);

  consolelog($cmesas);


  $sql = "INSERT INTO detallecomanda(id_producto) VALUES ('$producto1');";
  $respuesta = $conexion->query($sql);
  ?>

