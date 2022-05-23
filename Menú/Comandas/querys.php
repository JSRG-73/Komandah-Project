
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
  $mesa = $_REQUEST['numero_mesas'];
  //$precio = $_REQUEST['precio'];
  //$nombre = $_REQUEST['notas'];

  consolelog($mesa);

  $sql = "INSERT INTO comandas(mesa) VALUES ('$mesa');";
  $respuesta = $conexion->query($sql);
  ?>

