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
        <h1>LOGIN</h1>
            <form name="forma">
                <div class="field">
                    <input name="user" type="text" id="user" placeholder="Usuario">
                </div>
                <div class="field">
                    <input name="pass" type="password" id="pass" placeholder="Contraseña">
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