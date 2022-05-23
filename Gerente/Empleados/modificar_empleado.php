<?php
    session_start();
	if(isset($_SESSION['rol'])){
        $rol = $_SESSION['rol'];
		$idU = $_SESSION['idU'];
        $usuario = $_SESSION['usuario'];
        $nombre = $_SESSION['nombre'];
        
        if($rol != 1 && $rol == 2){
            header("Location: ../Cocinero/index.php");
        } else if($rol != 1 && $rol == 3){
            header("Location: ../Mesero/index.php");
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

    <!-- Scripts -->
    <script src="./scripts.js"></script>

    <title>Modificar empleado</title>
  </head>
  <body>
  <?php
      if(isset($_REQUEST['id'])){
        $id = $_REQUEST["id"];
      }
        require "./Conectar.php";
        $con = conectar();
        $sql = "SELECT * FROM Usuarios WHERE id = $id";
        $res = $con->query($sql);

        while($row = $res->fetch_array()){
            $nombre = $row["nombre"];
            $usuario = $row["usuario"];
            $rol = $row["rol"];
            $pass = $row["pass"];
        }
        ?>
    <div class="container">
    <form name="form1">
    <div class="form-group my-5" >
      <input name="id" type="text" value="<?php echo $id;?>" class="input" id="usuarioID" style="display: none;">
        <label >Nombre</label>
        <input type="text" class="form-control" name="nombre" autocomplete="off" value="<?php echo $nombre;?>" id="inputnombre">
        <label >Usuario</label>
        <input type="text" class="form-control" name="usuario" autocomplete="off" value="<?php echo $usuario;?>" id="inputusuario">
        <label >Rol</label>
        <select class="form-control" name="rol" id="inputrol">
          <option value="" disabled selected>Seleccionar Rol</option>
          <option value="1">Gerente</option>
          <option value="2">Mesero</option>
          <option value="3">Cocinero</option>
        </select>
        <!-- <input type="text" class="form-control" name="rol" autocomplete="off" placeholder="Agregar rol" > -->
        <label >Contraseña</label>
        <input type="password" class="form-control" name="contrasena" autocomplete="off" placeholder="Ingresar nueva (opcional)" id="inputclave">
    </div>
    <input value="Guardar" type="button" class="btn btn-success name" name="register" onclick="ActualizarDatos(); return false;">
    <!-- La función verificarLlenos también envialos datos a la BD -->

    
    <button class="btn btn-primary my-5"> <a href="../index.php" class="text-light">Volver</a> </button>

    <!--<button class="btn btn-primary my-5"> <a href="../index.php" class="text-light">Volver</a> </button> -->
    
    </form>
    </div>

  </body>
</html>