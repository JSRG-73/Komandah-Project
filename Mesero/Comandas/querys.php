
  <?php
  require "../../Funciones/Conectar.php";
    $conexion = conectar();
    $mesa = $_REQUEST['numero_mesas'];
    $precio = $_REQUEST['precio'];
    $nombre = $_REQUEST['notas'];
    
    $sql = "INSERT INTO comandas(id_mesa) VALUES ('$mesa');";
    $respuesta = $conexion -> query($sql);
?>

