<?php 
  include("../../Funciones/Conectar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de empleados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/display.css">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="./scripts.js"></script>
</head>
<body>
    <div class="container">
        <button class="btn btn-success my-5"> <a href="empleado.php" class="text-light">Agregar</a> </button>
        <button class="btn btn-primary my-5"> <a href="../index.php" class="text-light">Volver</a> </button>
        <button class="btn btn-warning my-5"><a href="#" class="text-light" >Modificar</a></button>
        <button class="btn btn-danger my-5"><a href="#" class="text-light">Eliminar</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID Empleado</th>
      <th scope="col">Nombre</th>
      <th scope="col">Usuario</th>
      <th scope="col">Rol</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $con = conectar();
      $sql = "SELECT id, nombre, usuario, rol FROM usuarios where activo = 1"; 
      $resultado = mysqli_query($con,$sql);
      if($resultado){
          while($row=mysqli_fetch_assoc($resultado)){ 
              $id = $row['id'];
              $nombre = $row['nombre'];
              $usuario = $row['usuario'];
              $rol = $row['rol'];
              echo '<tr>;
              <td>'.$id.'</td> 
              <td>'.$nombre.'</td> 
              <td>'.$usuario.'</td> 
              <td>'.$rol.'</td> 
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