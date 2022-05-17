<?php 
  include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"> <a href="producto.php" class="text-light">Agregar</a> </button>
        <button class="btn btn-primary my-5"> <a href="../index.php" class="text-light">Volver</a> </button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id_producto</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Foraneo</th>
    </tr>
  </thead>
  <tbody>
      <?php
      //SELECT m.id_mesa, m.nota, p.nombre, p.descripcion FROM mesa m INNER JOIN producto p ON m.id_mesa = p.foraneo;
      $sql = "SELECT * FROM producto"; 
      $resultado = mysqli_query($conexion,$sql);
      if($resultado){
          while($row=mysqli_fetch_assoc($resultado)){ 
              $id_producto = $row['id_producto'];
              $nombre = $row['nombre'];
              $descripcion = $row['descripcion'];
              $precio = $row['precio'];
              $foraneo = $row['foraneo'];
              echo '<tr>
              <td>'.$id_producto.'</td> 
              <td>'.$nombre.'</td> 
              <td>'.$descripcion.'</td> 
              <td>'.$precio.'</td> 
              <td>'.$foraneo.'</td> 
              <td>
              <button class="btn btn-primary"><a href="update.php? updateid='.$id_producto.'" class="text-light" >Actualizar</a></button>
              <button class="btn btn-danger"><a href="delete.php? deleteid='.$id_producto.'" class="text-light">Eliminar</a></button>
              </td>
              </tr>';
            }
      }
      ?>
    
    
  </tbody>
</table>
    </div>
</body>
</html>