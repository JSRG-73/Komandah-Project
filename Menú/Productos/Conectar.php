<?php
    define("HOST", 'localhost');
    define("BD", 'Komandah');
    define("USER_BD", 'root');
    define("PASS_BD",'');

    function conectar(){
        $con = new mysqli(HOST, USER_BD, PASS_BD, BD);
        return $con;
    }
?>