$("#frmAcceso").on('submit', function(e)
{
    e.preventDefault();
    usuario=$("#usuario").val();
    clave=$("#clave").val();
    $.post('../ajax/empleado.php?op=validaracceso',
        {"usuario": usuario, "clave": clave },
        function(data)
        {
            if(data==="\r\nnull"){
            
                bootbox.alert("Usuario y/o contraseña incorrectos ");
            }else{
                $(location).attr("href","empleado.php");
            }
        }
        );
}
)