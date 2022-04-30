<?php
//administradres_listas.php
require "conecta.php";
$con=conecta();

$sql="SELECT * FROM productos WHERE status = 1";

                $res=$con->query($sql);//ejecuta la consulta
                while($row = $res->fetch_array()){ //guarda el numero de filas para ejecutar el while
                    $nombre    =$row["nombre"];
                    $descripcion    =$row["descripcion"];
                    $precio       =$row["precio"];

                    echo "<h3> $nombre </h3>";
                    echo "<h3> $descripcion </h3>";
                    echo "<h3> $ $precio </h3>";//con eso se muestra ahi haganle lo que quieran bola de putos
                    //att la backend-gang

                }

                //recuerda meter esto adentro de la estructura html, perro

?>