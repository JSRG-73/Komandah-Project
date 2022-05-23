<?php
    session_start();

    require "../Funciones/Conectar.php";
    $con = conectar();

    $user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];
    $pass = md5($pass);

    $sql = "SELECT * FROM usuarios WHERE usuario = '$user' AND pass = '$pass'
            AND activo = 1";
    
    $res = $con->query($sql);
    $num = $res->num_rows;

    if($num){
        $row = $res->fetch_array();
        $idU = $row['id'];
        $nombre = $row['nombre'];
        $usuario = $row['usuario'];
        $rol = $row['rol'];

        $_SESSION['idU'] = $idU;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['usuario'] = $usuario;
        $_SESSION['rol'] = $rol;

        echo $rol;
    } else{
        echo "0";
    }
?>