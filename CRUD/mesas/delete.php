<?php 
    include("conexion.php");
    if(isset($_GET['deleteid'])){
        $id_mesa = $_GET['deleteid'];
        $resultado = mysqli_query($conexion, "DELETE FROM mesa WHERE id_mesa=$id_mesa");
        if($resultado){
            header("location:display.php");
        }
    }
?>