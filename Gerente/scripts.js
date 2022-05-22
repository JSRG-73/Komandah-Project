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
        document.form1.action = 'querys.php'
        document.form1.enctype= "multipart/form-data"
        document.form1.submit();
    }
    else{
        alert("Faltan datos por ingresar");
    }
}
function VerificarUsuarioAlta() {
    let user = $("#inputusuario").val();
    if(user){
        $.ajax({
            type: "POST",
            dataType: 'text',
            url: '../Funciones/Verificar_Usuario.php',
            data: ('usuario='+user),

            success: function (res) {
                if(res == 1){
                    console.log("El Usuario ya existe");
                    document.getElementById("enviar").disabled = true;
                    document.getElementById("inputusuario").style.backgroundColor = "rgba(216, 112, 147, 0.7)";
                    UsuarioValido = false;
                } else{
                    console.log("Correcto");
                    document.getElementById("enviar").disabled = false;
                    document.getElementById("inputusuario").style.backgroundColor = "rgba(127, 255, 212, 0.65)";
                    UsuarioValido = true;
                }
            }, error: function(){
                alert('Error: Archivo no encontrado.');
            }
        });
    }
}