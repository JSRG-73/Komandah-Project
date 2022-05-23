<?php
    session_start();
	if(isset($_SESSION['rol'])){
        header("Location: ./Funciones/Redireccion.php");
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Login </title>
        <link rel="stylesheet" type="text/css" href="./Login/Login.css">
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="./Funciones/Generales.js"></script>
        <script>
            var usuarioValido = true;
        </script>
    </head>

<body>
    <div class="tablero">
        <h1>Login</h1>
            <form name="forma">
                <div class="field">
                    <input name="user" type="text" id="user">
                    <label>Introduce tu usuario</label>
                </div>
                <div class="field">
                    <input name="pass" type="password" id="pass">
                    <label>Introduce tu contraseña</label>
                </div>
                <input id="submit" type="submit" value="Login" onclick="checkLogin(); return false">
                </form>
            </div>
    </div>
    <div id="mensaje">
        Mensaje
    </div>
</body>
</html>