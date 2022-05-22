<?php 
  include("../../Funciones/Conectar.php");
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
        <button class="btn btn-primary my-5"> <a href="empleado.php" class="text-light">Agregar</a> </button>
        <button class="btn btn-primary my-5"> <a href="../index.php" class="text-light">Volver</a> </button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID Empleado</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Rol</th>
      <th scope="col">Contraseña</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $sql = "SELECT * FROM usuarios"; 
      $resultado = mysqli_query($con,$sql);
      if($resultado){
          while($row=mysqli_fetch_assoc($resultado)){ 
              $id_empleado = $row['id_empleado'];
              $nombre = $row['nombre'];
              $apellido = $row['apellido'];
              $rol = $row['rol'];
              $contrasena = $row['contrasena'];
              echo '<tr>
              <td>'.$id_empleado.'</td> 
              <td>'.$nombre.'</td> 
              <td>'.$apellido.'</td> 
              <td>'.$rol.'</td> 
              <td>'.$contrasena.'</td> 
              <td>
              <button class="btn btn-primary"><a href="update.php? updateid='.$id_empleado.'" class="text-light" >Actualizar</a></button>
              <button class="btn btn-danger"><a href="delete.php? deleteid='.$id_empleado.'" class="text-light">Eliminar</a></button>
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