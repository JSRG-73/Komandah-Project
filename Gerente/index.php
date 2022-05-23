<?php
    session_start();
	if(isset($_SESSION['rol'])){
        $rol = $_SESSION['rol'];
		$idU = $_SESSION['idU'];
        $usuario = $_SESSION['usuario'];
        $nombre = $_SESSION['nombre'];
        
        if($rol != 1){
            header("Location: ../Funciones/Redireccion.php");
        }
    } else{
        header("Location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerente</title>
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
                        <li><a href="Empleados/empleado.php">Alta de empleado</a></li>
                        <li><a href="Empleados/display.php">Mostrar empleados</a></li>

                    </ul>
                </li>

                <li> <a>Productos</a> 
                    <ul>
                        <!--Faltan los archivos de Baja y modificacion de productos-->
                        <li><a href="Productos/alta_producto.php">Alta de producto</a></li>
                        <li><a href="Productos/display.php">Mostrar productos</a></li>
                    </ul>
                </li>

                <li> <a>Comandas</a> 
                    <ul>
                        <li><a href="Comandas/comanda.php">Alta de comanda</a></li>
                        <li><a href="Comandas/display.php">Mostrar comandas</a></li>
                    </ul>
                </li>
                <li> <a href="../Funciones/Cerrar_sesion.php">Salir (<?php echo $nombre; ?>)</a> 
                    <ul>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
</body>
</html>