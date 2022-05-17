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
        <button class="btn btn-primary my-5"> <a href="comanda.php" class="text-light">Agregar</a> </button>
        <button class="btn btn-primary my-5"> <a href="../index.php" class="text-light">Volver</a> </button>
        <table class="table">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id_comanda</th>
      <th scope="col">Nota</th>
      <th scope="col">Operaciones</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $sql = "SELECT * FROM comanda"; 
      $resultado = mysqli_query($conexion,$sql);
      if($resultado){
          while($row=mysqli_fetch_assoc($resultado)){ 
              $id_comanda = $row['id_comanda'];
              $nota = $row['nota'];
              echo '<tr>
              <td>'.$id_comanda.'</td> 
              <td>'.$nota.'</td> 
              <td>
              <button class="btn btn-primary"><a href="update.php? updateid='.$id_comanda.'" class="text-light" >Actualizar</a></button>
              <button class="btn btn-danger"><a href="delete.php? deleteid='.$id_comanda.'" class="text-light">Eliminar</a></button>
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