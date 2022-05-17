<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header>
        <a class="logo">KOMAN'DAH</a>
        <a class="logo">Mesero</a>
        <input type="checkbox" id="menu-bar">
        <label for="menu-bar">Menu</label>
        <nav class="navbar">
            <ul>
                <li> <a>Productos</a> 
                    <ul>
                        <li><a href="CRUD/productos/display.php">Mostrar productos</a></li>
                    </ul>
                </li>

                <li> <a>Comandas</a> 
                    <ul>
                        <li><a href="CRUD/comandas/comanda.php">Alta de comanda</a></li>
                        <li><a href="CRUD/comandas/update.php">Modificacion de comanda</a></li>
                        <li><a href="CRUD/comandas/display.php">Mostrar comandas</a></li>
                    </ul>
                </li>

                <li> <a>Mesas</a> 
                    <ul>
                        <li><a href="CRUD/mesas/display.php">Mostrar mesas</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
</body>
</html>