<?php 
    include("conexion.php");
    if(isset($_GET['deleteid'])){
        $id_comanda = $_GET['deleteid'];
        $resultado = mysqli_query($conexion, "DELETE FROM comanda WHERE id_comanda=$id_comanda");
        if($resultado){
            header("location:display.php");
        }
    }
?>