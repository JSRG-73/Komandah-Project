<?php
    session_start();
	if(isset($_SESSION['rol'])){
        $rol = $_SESSION['rol'];
		$idU = $_SESSION['idU'];
        $usuario = $_SESSION['usuario'];
        $nombre = $_SESSION['nombre'];
        
        if($rol != 1 && $rol == 2){
            header("Location: ../Cocinero/index.php");
        } else if($rol != 1 && $rol == 3){
            header("Location: ../Mesero/index.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <header>
        <a class="logo">KOMAN'DAH</a>
        <a class="logo">Gerente</a>
        <input type="checkbox" id="menu-bar">
        <label for="menu-bar">Menu</label>
        <nav class="navbar">
            <ul>
                <li><a>Empleados</a> 
                    <ul>
                        <li><a href="./empleado.php">Alta de empleado</a></li>
                        <li><a href="CRUD/empleados/delete.php">Baja de empleado</a></li>
                        <li><a href="CRUD/empleados/update.php">Modificacion de empleado</a></li>
                        <li><a href="CRUD/empleados/display.php">Mostrar empleados</a></li>
                    </ul>
                </li>

                <li> <a>Productos</a> 
                    <ul>
                        <!--Faltan los archivos de Baja y modificacion de productos-->
                        <li><a href="CRUD/productos/producto.php">Alta de producto</a></li>
                        <li><a href="#">Baja de producto</a></li>
                        <li><a href="#">Modificacion de producto</a></li>
                        <li><a href="CRUD/productos/display.php">Mostrar productos</a></li>
                    </ul>
                </li>

                <li> <a>Comandas</a> 
                    <ul>
                        <li><a href="CRUD/comandas/comanda.php">Alta de comanda</a></li>
                        <li><a href="CRUD/comandas/delete.php">Baja de comanda</a></li>
                        <li><a href="CRUD/comandas/update.php">Modificacion de comanda</a></li>
                        <li><a href="CRUD/comandas/display.php">Mostrar comandas</a></li>
                    </ul>
                </li>

                <li> <a>Mesas</a> 
                    <ul>
                        <li><a href="CRUD/mesas/mesa.php">Alta de mesa</a></li>
                        <li><a href="CRUD/mesas/delete.php">Baja de mesa</a></li>
                        <li><a href="CRUD/mesas/update.php">Modificacion de mesa</a></li>
                        <li><a href="CRUD/mesas/display.php">Mostrar mesas</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
</body>
</html>