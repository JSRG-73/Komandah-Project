<?php
    session_start();
    if(isset($_SESSION['rol'])){
        $rol = $_SESSION['rol'];
    
    if($rol == 1){
        header("Location: ./Gerente/Index.php");
    } else if($rol == 2){
        header("Location: ./Cocinero/Index.php");
    } else if($rol == 3){
        header("Location: ./Mesero/Index.php");
    } else {
        header("Location: ./Login/Error.php");
    }
} else {
    header("Location: ./Login/Error.php");
}
?>