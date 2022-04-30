function valida_empleado(){
    var nombre = document.forma01.nombre.value;
    var apellido = document.forma01.apellido.value;
    var pass = document.forma01.pass.value;
    var rol = document.forma01.rol.value;
    if(nombre=="" || apellido=="" || pass=="" || rol ==0){
            alert("faltan campos por llenar");
        }
        else{
            document.forma01.method = 'post';
            document.forma01.action = '../recibe_empleado.php';
            document.forma01.submit();  
        }
}

function valida_producto(){
    var nombre = document.forma02.nombre.value;
    var descripcion = document.forma02.descripcion.value;
    var precio = document.forma02.precio.value;
    if(nombre=="" || descripcion=="" || precio==""){
            alert("faltan campos por llenar");
        }
        else{
            document.forma02.method = 'post';
            document.forma02.action = '../recibe_producto.php';
            document.forma02.submit();  
        }
}