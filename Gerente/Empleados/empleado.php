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

    <title>Alta de empleado</title>
  </head>
  <body>
    <div class="container">
    <form method="post" name="form1">
    <div class="form-group my-5" >
    
        <label >Nombre</label>
        <input type="text" class="form-control" name="nombre" autocomplete="off" placeholder="Agregar nombre" id="inputnombre">
        <label >Usuario</label>
        <input type="text" class="form-control" name="usuario" autocomplete="off" placeholder="Agregar usuario" id="inputusuario">
        <label >Rol</label>
        <select class="form-control" name="rol" id="inputrol">
          <option value="" disabled selected>Seleccionar Rol</option>
          <option value="1">Gerente</option>
          <option value="2">Mesero</option>
          <option value="3">Cocinero</option>
        </select>
        <!-- <input type="text" class="form-control" name="rol" autocomplete="off" placeholder="Agregar rol" > -->
        <label >Contraseña</label>
        <input type="password" class="form-control" name="contrasena" autocomplete="off" placeholder="Agregar contrasena" id="inputclave">
    </div>
    <input type="submit" class="btn btn-success name" name="register" onclick="verificarLlenos(); return false;">
    <!-- La función verificarLlenos también envialos datos a la BD -->

    
    <button class="btn btn-primary my-5"> <a href="../index.php" class="text-light">Volver</a> </button>

    <!--<button class="btn btn-primary my-5"> <a href="../index.php" class="text-light">Volver</a> </button> -->
    
    </form>
    </div>

  </body>
</html>