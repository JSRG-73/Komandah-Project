<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/funciones.js"></script>
</head>
<body>
    <form action="post" name="forma02">
        <label for="nombre">Ingrese el nombre del producto: </label>
        <input name="nombre" type="text" placeholder="ingrese el nombre">
        <br> <br>
        <label for="descripcion">descripcion: </label>
        <br>
        <textarea name="descripcion" cols="30" rows="5"></textarea>
        <br><br>
        <label for="precio">Ingrese el precio: </label>
        <input name="precio" type="number" min="0" max="10000">
        <br><br>
        <input type="button" value="enviar" onclick="valida_producto(); return false;">
</form>
</body>
</html>