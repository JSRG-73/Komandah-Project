<?php

function consolelog($data)
{
  $console = $data;
  if (is_array($console))
    $console = implode(',', $console);

  echo "<script>console.log('Console: " . $console . "' );</script>";
}

?>



<table>
  <?php

  foreach ($_POST as $key => $value) {
    echo "<tr>";
    echo "<td>";
    echo $key;
    echo "</td>";
    echo "<td>";
    echo $value;
    echo "</td>";
    echo "</tr>";
  }

  ?>
</table>



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

foreach ($_POST as $key => $value) {

  if (is_numeric($key) && $value!=0) {

    consolelog($key);
    consolelog($value);

  } else {
    
  }

}


$sql = "INSERT INTO comandas(mesa,descripcion) VALUES ('$mesa','$descripcion');";
$respuesta = $conexion->query($sql);

//consolelog($contador);


//$sql = "INSERT INTO detallecomanda(id_producto) VALUES ('$producto1');";
$respuesta = $conexion->query($sql);



?>