<?php
    require "Conectar.php";

    $con = conectar();

    $id = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $rol = $_REQUEST['rol'];

    $sql = "UPDATE Usuarios SET nombre = '$nombre',
        rol = '$rol' WHERE id = $id";

    if(isset($_REQUEST['contrasena'])){
        $pass = $_REQUEST['contrasena'];
        if($pass != '' && $pass != null){

            $passEnc = md5($pass);
            $sql = str_replace("' WHERE", "', pass = '$passEnc' WHERE", $sql);
        }
    }

    $res = $con->query($sql);

    header("Location: ../Empleados/display.php");
?>