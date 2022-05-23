<?php
    session_start();
	if(isset($_SESSION['rol'])){
        $rol = $_SESSION['rol'];
		$idU = $_SESSION['idU'];
        $usuario = $_SESSION['usuario'];
        $nombre = $_SESSION['nombre'];
        
        if($rol != 2 && $rol == 1){
            header("Location: ../Gerente/index.php");
        } else if($rol != 2 && $rol == 3){
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
        <a class="logo">Cocinero</a>
        <input type="checkbox" id="menu-bar">
        <label for="menu-bar">Menu</label>
        <nav class="navbar">
            <ul>
                <li> <a>Productos</a> 
                    <ul>
                        <!--Faltan los archivos de Baja y modificacion de productos-->
                        <li><a href="/../display.php">Mostrar productos</a></li>
                    </ul>
                </li>

                <li> <a>Comandas</a>  
                    <ul>
                        <li><a href="CRUD/comandas/display.php">Mostrar comandas</a></li>
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