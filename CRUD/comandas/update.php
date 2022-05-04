<?php 
  include("conexion.php");
  if(isset($_POST['register'])){
      $id_comanda = $_GET['updateid'];
      $nota = $_POST['nota'];
      $resultado = mysqli_query($conexion, "UPDATE comanda SET nota='$nota' WHERE id_comanda=$id_comanda");
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
        <label >Nota update</label>
        <input type="text" class="form-control" name="nota" autocomplete="off" placeholder="Enter nota" >
    </div>
    <input type="submit" class="btn btn-primary name" name="register">
    
    
    </form>
    </div>

  </body>
</html>