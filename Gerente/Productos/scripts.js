function ValidarDatos(){

        let datosllenos = document.getElementById("inputnombre").value !== "" ? true : false;
        datosllenos = datosllenos && document.getElementById("inputprecio").value !== "" ? true : false;

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

function eliminarProducto(id){
    let eliminar = confirm("¿De verdad desea eliminar el registro con ID "+id+"?");
    if(eliminar){
        $.ajax({
            url: './delete.php?ID='+id,
            type: 'post',
            dataType: 'text',
            data: 'ID='+id,
            success: function(res){
                if(res == 1){
                    window.location.href = './display.php';
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