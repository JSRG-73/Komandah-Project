function ValidarDatos(){
        let datosllenos = document.getElementById("inputnombre").value !== "" ? true : false;
        datosllenos = datosllenos && document.getElementById("inputusuario").value !== "" ? true : false;
        datosllenos = datosllenos && document.getElementById("inputrol").value !== "" ? true : false;
        datosllenos = datosllenos && document.getElementById("inputclave").value !== "" ? true : false;

        return datosllenos;
}

function verificarLlenos(){
    if (ValidarDatos()){
        document.form1.method = 'post'
        document.form1.action = 'insertarEmpleado.php'
        document.form1.enctype= "multipart/form-data"
        document.form1.submit();
    }
    else{
        alert("Faltan datos por ingresar");
    }
}