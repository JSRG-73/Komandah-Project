<?php 
  include("conexion.php");
  if(isset($_POST['register'])){
      $nota = $_POST['nota'];
      $resultado = mysqli_query($conexion, "INSERT INTO comanda(nota) VALUES ('$nota')");
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
    
        <label >Nota</label>
        <input type="text" class="form-control" name="nota" autocomplete="off" placeholder="Enter nota" >
    </div>
    <input type="submit" class="btn btn-primary name" name="register">
    <button class="btn btn-primary my-5"> <a href="../index.php" class="text-light">Volver</a> </button>
    
    
    </form>
    </div>

  </body>
</html>