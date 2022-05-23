<?php 
  include("../../Funciones/Conectar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/display.css">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="./scripts.js"></script>
</head>
<body>
    <div class="container">
        <button class="btn btn-success my-5"> <a href="./alta_producto.php" class="text-light">Agregar Producto</a></button>
        <button class="btn btn-primary my-5"> <a href="../index.php" class="text-light">Inicio</a></button>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID Producto</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Precio</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $con = conectar();
              $sql = "SELECT id_producto,	nombre,	descripcion, precio FROM productos where activo = 1"; 
              $resultado = mysqli_query($con,$sql);
              if($resultado){
                  while($row=mysqli_fetch_assoc($resultado)){ 
                      $id = $row['id_producto'];
                      $nombre = $row['nombre'];
                      $descripcion = $row['descripcion'];
                      $precio = $row['precio'];
                      echo '<tr>
                        <td>'.$id.'</td> 
                        <td>'.$nombre.'</td> 
                        <td>'.$descripcion.'</td> 
                        <td>'.$precio.'</td> 
                        <td>
                          <button class="btn btn-warning"><a href="delete.php?id='.$id.'" class="text-light">(Pending)</a></button>
                          <button class="btn btn-danger"onclick=eliminarProducto('.$id.');>Eliminar</a></button>
                        </td>
                      </tr>';
                    }
              }
              ?>
          </tbody>
        </table>
      </div>
      <div class="mensaje" id="mensajeEliminar">
          Mensaje
      </div>
</body>
</html>