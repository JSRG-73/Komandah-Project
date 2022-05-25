<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Comandas actuales</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="./scripts.js"></script>

</head>

<body>
    <h1>Lista de comandas</h1>

    <br>
    <br>
    <br>

    <label>¿Cuántas mesas hay en el restaurantes?</label>

    <?php



    require "Conectar.php";
    $con = conectar();



    $sql = "DROP TABLE mesas;";
    $resultado = $con->query($sql);

    $sql = "CREATE TABLE mesas;";
    $resultado = $con->query($sql);

    $sql = "INSERT INTO mesas;";
    $respuesta = $conexion->query($sql);

    

    ?>

</body>

</html>