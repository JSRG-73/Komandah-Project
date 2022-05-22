<?php 
    include("conexion.php");
    if(isset($_GET['deleteid'])){
        $id_empleado = $_GET['deleteid'];
        $resultado = mysqli_query($conexion, "DELETE FROM empleado WHERE id_empleado=$id_empleado");
        if($resultado){
            header("location:display.php");
        }
    }
?>