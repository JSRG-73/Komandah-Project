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

    <title>Alta de productos</title>
  </head>
  <body>
    <div class="container">
    <form method="post" name="form1">
    <div class="form-group my-5" >
    
        <label >Nombre</label>
        <input type="text" class="form-control" name="nombre" autocomplete="off" placeholder="Nombre del producto" id="inputnombre">
        
        <label >Descripcion</label>
        <input type="text" class="form-control" name="descripcion" autocomplete="off" placeholder="Descripcion del producto" id="inputdesc">

        <label >Precio</label>
        <input type="number" class="form-control" name="precio" autocomplete="off" id="inputprecio" min=0.1 max=1000000 >
    </div>
    <input type="submit" class="btn btn-primary name" name="register" onclick="verificarLlenos(); return false;">
    <!-- La función verificarLlenos también envialos datos a la BD -->

    
    <button class="btn btn-primary my-5"> <a href="../index.php" class="text-light">Volver</a> </button>

    <!--<button class="btn btn-primary my-5"> <a href="../index.php" class="text-light">Volver</a> </button> -->


    </form>
    </div>

  </body>
</html>