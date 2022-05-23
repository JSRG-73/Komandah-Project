<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form method="post" name="form1">
    <div class="form-group my-5" >
    
        <label >Nombre</label>
        <input type="text" class="form-control" name="nombre" autocomplete="off" placeholder="Nombre del producto" id="inputnombre">
        <label >Precio</label>
        <input type="number" class="form-control" name="precio" autocomplete="off" id="inputprecio">
    </div>
    <input type="submit" class="btn btn-primary name" name="register" onclick="verificarLlenos(); return false;">
    <!-- La función verificarLlenos también envialos datos a la BD -->

    
    <button class="btn btn-primary my-5"> <a href="../index.php" class="text-light">Volver</a> </button>

    </form>
    </div>
</body>
</html>