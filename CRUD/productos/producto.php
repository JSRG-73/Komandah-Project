<?php 
  include("conexion.php");
  if(isset($_POST['pizza'])){
      $nombre = "pizza";
      $descripcion = "pan, queso fundido y peperoni" ; 
      $precio = 50.30 ;
      $foraneo = $_POST['sel_pizza'];
    
      $resultado = mysqli_query($conexion, "INSERT INTO producto(nombre,descripcion,precio,foraneo) VALUES ('$nombre','$descripcion','$precio','$foraneo')");
      if($resultado){
        header("location:display.php");
      }
  }
  if(isset($_POST['hamburguesa'])){
      $nombre = "hamburguesa";
      $descripcion = "Pan de ajonjoli, queso gratinado, tocino, carne de res";
      $precio = 40.99;
      $foraneo = $_POST['sel_hamburguesa'];

      $resultado = mysqli_query($conexion, "INSERT INTO producto(nombre,descripcion,precio,foraneo) VALUES ('$nombre','$descripcion','$precio','$foraneo')");
      
      if($resultado){
        header("location:display.php");
      }
  }
  if(isset($_POST['tacos'])){
    $nombre = "tacos";
    $descripcion = "Tortilla de maiz, bistek, cebolla, cilantro";
    $precio = 35.70;
    $foraneo = $_POST['sel_tacos'];

    $resultado = mysqli_query($conexion, "INSERT INTO producto(nombre,descripcion,precio,foraneo) VALUES ('$nombre','$descripcion','$precio','$foraneo')");
      if($resultado){
        header("location:display.php");
      }
  
  }
  if(isset($_POST['coca'])){
    $nombre = "refresco";
    $descripcion = "Bebida gaseosa y refrescante";
    $precio = 9.45;
    $foraneo = $_POST['sel_coca'];

    $resultado = mysqli_query($conexion, "INSERT INTO producto(nombre,descripcion,precio,foraneo) VALUES ('$nombre','$descripcion','$precio','$foraneo')");
      if($resultado){
        header("location:display.php");
      }
  
  }
  if(isset($_POST['limonada'])){
    $nombre = "limonada";
    $descripcion = "Mezcla de jugo de limon, azucar y agua";
    $precio = 11.55;
    $foraneo = $_POST['sel_limonada'];

    $resultado = mysqli_query($conexion, "INSERT INTO producto(nombre,descripcion,precio,foraneo) VALUES ('$nombre','$descripcion','$precio','$foraneo')");
      if($resultado){
        header("location:display.php");
      }
  
   }
   if(isset($_POST['naranjada'])){
    $nombre = "naranjada";
    $descripcion = "Mezcla de jugo de naranja, azucar y agua";
    $precio = 11.44;
    $foraneo = $_POST['sel_naranjada'];

    $resultado = mysqli_query($conexion, "INSERT INTO producto(nombre,descripcion,precio,foraneo) VALUES ('$nombre','$descripcion','$precio','$foraneo')");
      if($resultado){
        header("location:display.php");
      }
  
   }  

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komandah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Komnadah</h1>
    <form method="post">
    <section class="items">
        <div class="item">
            <img src="pizza.jpg">
            <h4>Pizza</h4>
            <input type="submit" class="btn btn-primary name" name="pizza">
            <select name="sel_pizza">
            <?php
                  $sql = "SELECT * FROM mesa"; 
                  $resultado = mysqli_query($conexion,$sql);
                  if($resultado){
                      while($row=mysqli_fetch_assoc($resultado)){ 
                          $id_mesa = $row['id_mesa'];
                          $nota = $row['nota'];
                          echo '
                          <option>'.$id_mesa.'</option>';
                        }
                  }
                  ?>
            </select>
        </div>
        </div>
        <div class="item">
            <img src="hamburguesa.jpg">
            <h4>Hamburguesa</h4>
            <input type="submit" class="btn btn-primary name" name="hamburguesa">
            <select name="sel_hamburguesa">
            <?php
                  $sql = "SELECT * FROM mesa"; 
                  $resultado = mysqli_query($conexion,$sql);
                  if($resultado){
                      while($row=mysqli_fetch_assoc($resultado)){ 
                          $id_mesa = $row['id_mesa'];
                          $nota = $row['nota'];
                          echo '
                          <option>'.$id_mesa.'</option>';
                        }
                  }
                  ?>
            </select>
        </div>
        </div>
        <div class="item">
            <img src="tacos.jpg">
            <h4>Tacos</h4>
            <input type="submit" class="btn btn-primary name" name="tacos">
            <select name="sel_tacos">
            <?php
                  $sql = "SELECT * FROM mesa"; 
                  $resultado = mysqli_query($conexion,$sql);
                  if($resultado){
                      while($row=mysqli_fetch_assoc($resultado)){ 
                          $id_mesa = $row['id_mesa'];
                          $nota = $row['nota'];
                          echo '
                          <option>'.$id_mesa.'</option>';
                        }
                  }
                  ?>
            </select>
        </div>
        </div>
        <div class="item">
            <img src="coca.jpg">
            <h4>Refresco</h4>
            <input type="submit" class="btn btn-primary name" name="coca">
            <select name="sel_coca">
            <?php
                  $sql = "SELECT * FROM mesa"; 
                  $resultado = mysqli_query($conexion,$sql);
                  if($resultado){
                      while($row=mysqli_fetch_assoc($resultado)){ 
                          $id_mesa = $row['id_mesa'];
                          $nota = $row['nota'];
                          echo '
                          <option>'.$id_mesa.'</option>';
                        }
                  }
                  ?>
            </select>
        </div>
        </div>
        <div class="item">
            <img src="limonada.jpg">
            <h4>Limonada</h4>
            <input type="submit" class="btn btn-primary name" name="limonada">
            <select name="sel_limonada">
            <?php
                  $sql = "SELECT * FROM mesa"; 
                  $resultado = mysqli_query($conexion,$sql);
                  if($resultado){
                      while($row=mysqli_fetch_assoc($resultado)){ 
                          $id_mesa = $row['id_mesa'];
                          $nota = $row['nota'];
                          echo '
                          <option>'.$id_mesa.'</option>';
                        }
                  }
                  ?>
            </select>
        </div>
        </div>
        <div class="item">
            <img src="naranjada.jpg">
            <h4>Naranjada</h4>
            <input type="submit" class="btn btn-primary name" name="naranjada">
            <select name="sel_naranjada">
            <?php
                  $sql = "SELECT * FROM mesa"; 
                  $resultado = mysqli_query($conexion,$sql);
                  if($resultado){
                      while($row=mysqli_fetch_assoc($resultado)){ 
                          $id_mesa = $row['id_mesa'];
                          $nota = $row['nota'];
                          echo '
                          <option>'.$id_mesa.'</option>';
                        }
                  }
                  ?>
            </select>
        </div>
        </div>
        
    </section>
    </form>
    
</body>
</html>