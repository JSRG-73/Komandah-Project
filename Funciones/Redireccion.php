<?php
    session_start();
    if(isset($_SESSION['rol'])){
        $rol = $_SESSION['rol'];
            
        switch($rol){
            case 1:
                header("Location: ../Gerente/Index.php");
             break;
             case 2:
                header("Location: ../Cocinero/Index.php");
             break;
            case 3:
                header("Location: ../Mesero/Index.php");
            break;
            default:
                header("Location: ../index.php");
            break;
        }
        } else {
        header("Location: ../index.php");
        }
?>