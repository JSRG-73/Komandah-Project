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
function eliminarEmpleado(id){
    let eliminar = confirm("¿De verdad desea eliminar el registro con ID "+id+"?");
    if(eliminar){
        $.ajax({
            url: './delete.php?ID='+id,
            type: 'post',
            dataType: 'text',
            data: 'ID='+id,
            success: function(res){
                if(res == 1){
                    $('#row' + id).hide();
                    $('#mensajeEliminar').html('Registro con ID '+id+ ' eliminado.');
                } else{
                    $('#mensajeEliminar').html('Error al eliminar.');
                }
                MostrarMensaje("mensajeEliminar", true, 5000);
            }, error: function(){
                alert('Error: Archivo no encontrado.');
            }
        });
    }
    else{
        return;
    }
}
function MostrarMensaje(mensaje, band, time){    /* ID + true/false + tiempo en pantalla */
    if(band){
        document.getElementById(mensaje).style.display = "flex";
        setTimeout(function (){document.getElementById(mensaje).style.display = "none";}, time);
    } else{
        document.getElementById(mensaje).style.display = "none";
    }
}
