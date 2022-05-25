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
    <script src="scripts.js"></script>



</head>

<body>
    <h1>Lista de comandas</h1>

    <br>
    <br>
    <br>

    <?php

    function consolelog($data)
    {
        $console = $data;
        if (is_array($console))
            $console = implode(',', $console);

        echo "<script>console.log('Console: " . $console . "' );</script>";
    }

    ?>

    <table id="customers">
        <tr>
        <th scope="col">¿Completadas?</th>
            <th scope="col">Numero de comanda</th>
            <th scope="col">Mesa</th>
            <th scope="col">Productos</th>
            <th scope="col">Notas</th>
        </tr>

        <?php

        require "../../Funciones/Conectar.php";
        $con = conectar();
        $sql = "SELECT id_comanda,id_mesa,descripcion FROM comandas WHERE completada = 1";
        $resultado = mysqli_query($con, $sql);
        if ($resultado) {
            while ($row = mysqli_fetch_assoc($resultado)) {
                $lista_productosYcantidades='';
                $nombres_productos = '';
                $lista_detalles = '';
                $idcomanda = $row['id_comanda'];
                $idmesa = $row['id_mesa'];
                $descripcion = $row['descripcion'];


                $sub_sql = "SELECT id_producto,cantidad FROM detallecomanda WHERE id_comanda = ${idcomanda}";
                $detalles_comanda = mysqli_query($con, $sub_sql);

                while ($row = mysqli_fetch_assoc($detalles_comanda)) {

                    $idproducto = $row['id_producto'];
                    $cantidadproducto = $row['cantidad'];

                    $sql_productos = "SELECT nombre FROM productos WHERE id_producto = ${idproducto}";
                    $consultanombres = mysqli_query($con, $sql_productos);

                    while ($row = mysqli_fetch_assoc($consultanombres)) {

                        $nombres_productos = $row['nombre'];
                        Consolelog($nombres_productos);

                        $productoYcantidad=$cantidadproducto."x ".$nombres_productos;
                    }

                    $lista_productosYcantidades = $lista_productosYcantidades.$productoYcantidad."<br>";
                }

                echo '
                <tr>
                    <td>' . '</td> 
                    <td>' . $idcomanda . '</td> 
                    <td>' . $idmesa . '</td> 
                    <td>' . $lista_productosYcantidades . ' </td>
                    <td>' . $descripcion . '</td> 

                </tr>';
            }
        }

        ?>

    </table>

</body>

</html>