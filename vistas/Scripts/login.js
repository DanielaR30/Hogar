$("#frmAcceso").on('submit',function(e)
{
    e.preventDefault();
    usuario= $("#usuario").val();
    clave= $("#clave").val();
    $.post('../ajax/usuario.php?op=validaracceso',
        {"usuario": usuario, "clave":clave},
       
        function(data) //guarda el resultado del select
        {
            if(data==="null")
            {
                bootbox.alert("Usuario y/o contraseña incorrecto");
            }
            else{
                $(location).attr("href", "raza.php");
            }
        }
        );
})