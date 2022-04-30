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
    <form action="post" name="forma01">
        <label for="nombre">Ingrese el nombre: </label>
        <input name="nombre" type="text" placeholder="ingrese el nombre">
        <br> <br>
        <label for="apellido">Ingrese el apellido: </label>
        <input name="apellido" type="text" placeholder="ingrese el apellido">
        <br><br>
        <label for="pass">Ingrese su contraseña: </label>
        <input name="pass" type="password" placeholder="ingrese su contaseña">
        <br><br>
        <select name="rol" id="rol">
            <option value="0">Seleccione un rol</option>
            <option value="1">Mesero</option>
            <option value="2">Cocinero</option>
            <option value="3">Administrador</option>
        </select>
        <br><br>
        <input type="button" value="enviar" onclick="valida_empleado(); return false;">
</form>
</body>
</html>