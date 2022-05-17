<?php 
  include("conexion.php");
  if(isset($_POST['register'])){
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $rol = $_POST['rol'];
      $contrasena = $_POST['contrasena'];
    
      $resultado = mysqli_query($conexion, "INSERT INTO empleado(nombre,apellido,rol,contrasena) VALUES ('$nombre','$apellido','$rol','$contrasena')");
      if($resultado){
        header("location:display.php");
      }
      

  }
  
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>CRUD</title>
  </head>
  <body>
    <div class="container">
    <form method="post">
    <div class="form-group my-5" >
    
        <label >Nombre</label>
        <input type="text" class="form-control" name="nombre" autocomplete="off" placeholder="Agregar nombre" >
        <label >Apellido</label>
        <input type="text" class="form-control" name="apellido" autocomplete="off" placeholder="Agregar apellido" >
        <label >Rol</label>
        <input type="text" class="form-control" name="rol" autocomplete="off" placeholder="Agregar rol" >
        <label >Contraseña</label>
        <input type="password" class="form-control" name="contrasena" autocomplete="off" placeholder="Agregar contrasena" >
    </div>
    <input type="submit" class="btn btn-primary name" name="register">
    <button class="btn btn-primary my-5"> <a href="../index.php" class="text-light">Volver</a> </button>
    
    
    </form>
    </div>

  </body>
</html>