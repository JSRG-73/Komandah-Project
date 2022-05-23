<?php
    require "./Conectar.php";
    $con = conectar();
    $ban = 0;
    if(isset($_REQUEST['ID'])){
        $id = $_REQUEST['ID'];
        $sql = "UPDATE productos SET activo = 0 WHERE id = $id";
        $res = $con->query($sql);
        $ban = 1;
    }
    echo $ban;
?>