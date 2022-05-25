<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesero</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="scripts.js"></script>




</head>

<body>
    <div class="container">
        <form name="form1" action="querys.php" method="post">
            <div class="form-group my-5">

                <h1>Crear Komandas</h1>

                <br>
                <!--seleccionar mesa -->

                <h5>Mesa</h5>

                <?php
                require "../../Funciones/Conectar.php";
                $con = conectar();
                $sql = "SELECT COUNT(*) AS contador FROM mesas;";
                $resultado = $con->query($sql);

                $row = mysqli_fetch_assoc($resultado);
                $contador = $row['contador'];

                echo '<select id="mesa" name="mesa" >';

                foreach (range(1, $contador) as $x) {

                    echo '<option value=' . $x . '>' . $x . '</option>';
                }
                echo '</select>';
                ?>

                <br>
                <br>
                <br>
                <br>


                <!--seleccionar producto -->

                <h4>Productos</h4>

                <table id="customers">
                    <tr>
                        <th scope="col">ID Producto</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                    </tr>

                    <?php
                    $con = conectar();
                    $sql = "SELECT id_producto, nombre,precio FROM productos WHERE activo = 1";
                    $resultado = mysqli_query($con, $sql);
                    if ($resultado) {
                        while ($row = mysqli_fetch_assoc($resultado)) {
                            $id = $row['id_producto'];
                            $nombre = $row['nombre'];
                            $precio = $row['precio'];
                            echo '
                        <tr>

                          <td>' . $id . '</td> 
                          <td>' . $nombre . '</td> 
                          <td>
                          <select name="' . $id . '" >
                          
                          <option selected="selected" value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>

                        </select>

                        <td>$'.$precio .'</td> 
                          </td>
                        </tr>';
                        }
                    }

                    ?>

                </table>

                <br>
                <br>
                <br>
                <h5>Notas</h5>


                <!--Notas-->

                <input type="text" name="desc">

            </div>

            <input type="submit" class="btn btn-success name" name="register" value="Agregar comanda"  return false;">
            <!-- La función verificarLlenos también envialos datos a la BD -->

            
            <button class="btn btn-primary my-5"> <a href="../index.php" class="text-light">Volver</a> </button>

        </form>
    </div>

    <script>
        console.log("sadfvzsdfc");
        console.log(document.getElementById("producto3"));
    </script>
    

</body>

</html>