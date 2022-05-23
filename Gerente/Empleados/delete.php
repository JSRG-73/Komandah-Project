<?php
    require ".../Conectar.php";
    $con = conectar();
    $ban = 0;
    if(isset($_REQUEST['ID'])){
        $id = $_REQUEST['ID'];
        $sql = "UPDATE Usuarios SET activo = 0 WHERE ID = $id";
        $res = $con->query($sql);
        $ban = 1;
    }
    echo $ban;
?>