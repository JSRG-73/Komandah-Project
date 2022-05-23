function checkLogin(){
    var usuario = $('#user').val();
    var passw = $('#pass').val();
    if(usuario && passw){
        $.ajax({
            url: './Login/Verificar_Login.php',
            type: 'post',
            dataType: 'text',
            data: {user: usuario, pass: passw},
            success: function(res){
                if(res == 1){
                    window.location.href = './Gerente/Index.php';
                } else if(res == 2){
                    window.location.href = './Cocinero/Index.php';
                }
                else if(res == 3){
                    window.location.href = './Mesero/Index.php';
                }
                else if(res <1 || res > 4){
                    window.location.href = './Login/Error.php';
                }
                else{
                    $('#mensaje').html('Datos incorrectos');
                    MostrarMensaje("mensaje", true, 5000);
                    console.log(res);
                }
            }, error: function(){
                alert('Error: Archivo no encontrado.');
            }
        });
    } else{
        $('#mensaje').html('Faltan datos por llenar');
        MostrarMensaje("mensaje", true, 5000);
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
function azarPerrito(){
    let aleatorio = Math.floor(Math.random() * 5);
    switch(aleatorio){
        case 1:
            $("#imagenPerrito").attr('src',"./Media/error-pet-dog1.png");
        break;
        case 2: 
            $("#imagenPerrito").attr('src',"./Media/error-pet-dog2.png");
        break;
        case 3:
            $("#imagenPerrito").attr('src',"./Media/error-pet-dog3.png");
        break;
        case 4:
            $("#imagenPerrito").attr('src',"./Media/error-pet-dog4.png");
        break;
        case 5:
            $("#imagenPerrito").attr('src',"./Media/error-pet-dog5.png");
        break;
        default:
            $("#imagenPerrito").attr('src',"./Media/error-pet-dog1.png");
        break;
    }
}