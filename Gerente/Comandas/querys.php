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

consolelog($mesa);
consolelog($descripcion);

$sql = "INSERT INTO comandas(mesa,descripcion) VALUES ('$mesa','$descripcion');";
$respuesta = $conexion->query($sql);

$sql = "SELECT MAX(id_comanda) AS ultima FROM comandas;";
$resultado = $con->query($sql);
$row = mysqli_fetch_assoc($resultado);
$idcomanda = $row['ultima'];



foreach ($_POST as $idproducto => $cantidad) {

  if (is_numeric($idproducto) && $cantidad!=0) {
    
    $sql = "INSERT INTO detallecomanda(id_comanda,id_producto,cantidad) VALUES ('$idcomanda','$idproducto','$cantidad');";
    $respuesta = $conexion->query($sql);

  } 

}

?>