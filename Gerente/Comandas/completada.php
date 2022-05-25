<?php
    $id = $_REQUEST['id'];

    require "./Conectar.php";
    $con = conectar();
    $sql = "UPDATE comandas SET completada = 1 WHERE id_comanda = $id";
    $res = $con->query($sql);
    echo 1;
?>