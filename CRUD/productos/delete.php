<?php 
    include("conexion.php");
    if(isset($_GET['deleteid'])){
        $id_mesa = $_GET['deleteid'];
        $resultado = mysqli_query($conexion, "DELETE FROM producto WHERE id_producto=$id_mesa");
        if($resultado){
            header("location:display.php");
        }
    }
?>