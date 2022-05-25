function ValidarDatos(){

        let datosllenos = document.getElementById("inputnombre").value !== "" ? true : false;
        datosllenos = datosllenos && document.getElementById("inputprecio").value !== "" ? true : false;

        return datosllenos;
}

function verificarLlenos(){
    if (true){
        document.form1.method = 'post'
        document.form1.action = 'querys.php'
        document.form1.enctype= "multipart/form-data"
        document.form1.submit();
    }
    else{
        alert("Faltan datos por ingresar");
    }
}

function marcarCompletada(id){
    window.location.href = 'completada.php?id='+id;
}