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
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Producto</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $sql = "SELECT * FROM mesa"; 
      $resultado = mysqli_query($conexion,$sql);
      if($resultado){
          while($row=mysqli_fetch_assoc($resultado)){ 
             

             
            }
      }

        $id_mesa = $_GET['ticketid'];
        $sql2 = " SELECT p.nombre, p.precio FROM mesa m INNER JOIN producto p ON m.id_mesa = p.foraneo WHERE m.id_mesa = $id_mesa;"; 
        $mesa = mysqli_query($conexion,$sql2);
                if($mesa){
                    while($row=mysqli_fetch_assoc($mesa)){ 
                    $nombre = $row['nombre'];
                    $precio = $row['precio'];
                    echo '<tr>
                    <td>'.$nombre.'</td> 
                    <td>'.$precio.'</td>
                    </tr>';
                }
                }
      ?>
    
    
  </tbody>
</table>
    </div>
</body>
</html>
