var tabla;

function init() {
    mostrarform(false);
    listar();

    $("#formulario").on("submit", function(e)
    {
        guardaryeditar(e);
    }
    )
    //Cargar los items al select raza
    //r: son las opciones que devuelve el archivo ajax/traspaso.php con el valor selectEscuela
    $.post("../ajax/mascota.php?op=selectRaza", function(r)
    {
        $("#idraza").html(r);
        $("#idraza").selectpicker('refresh');
    });
    
}

function limpiar() {
    $("#idmascota").val("");
    $("#idraza").val("");
    $("#especie").val("");
    $("#nombreRaza").val("");
    $("#nombre").val("");
    $("#edad").val("");
    $("#tamanio").val("");
    $("#genero").val("");
    $("#ubicacion").val("");
    $("#descripcion").val("");
    $("#imagen").val("");//PENDIENTE
    
}
function mostrarform(bandera) {
    limpiar();
    if (bandera) {
        $("#listadoregistros").hide();
        $("#formularioregistros").show();
        $("#btnGuardar").prop("disabled", false);
        $("#btnagregar").hide();
    }
    else
    {
        $("#listadoregistros").show();
        $("#formularioregistros").hide();
        $("#btnagregar").show();
    }
}

function cancelarform() {
    mostrarform(false);
}

function listar() {
    tabla = $('#tbllistado').dataTable(
        {
            "aProcessing": true,
            "aServerSide": true,
            dom: 'Bfrtip',
            buttons: [
                        'copyHtml5',
                        'excelHtml5',
                        'csvHtml5',
                        'pdf'
            ],
            "ajax":
                    {
                        url: '../ajax/mascota.php?op=listar',
                        type: "get",
                        dataType: "json",
                        error: function(e){
                            console.log(e.responseText);
                        }
                    },
            "bDestroy": true,
            "iDisplayLength": 5,
            "order": [[0, "desc"]]
        }).DataTable();
}

function guardaryeditar(e)
{
    e.preventDefault();
    $("#btnGuardar").prop("disabled", true);
    var formData = new FormData($("#formulario")[0]);

    $.ajax({
        url: "../ajax/mascota.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        
        success: function(datos)
        {
            bootbox.alert(datos);
            mostrarform(false);
            tabla.ajax.reload();
        }
    }
    
    );
    limpiar();
}

function mostrar(idmascota)
{
    $.post("../ajax/mascota.php?op=mostrar",{idmascota : idmascota}, function(data, status)
    {
        console.log(data, status);
        data = JSON.parse(data);
        mostrarform(true);
        $("#idmascota").val(data.idmascota);
        $("#idraza").val(data.idraza);
        $("#especie").val(data.especie);
        $("#nombreRaza").val(data.nombreRaza);
        $("#nombre").val(data.nombre);
        $("#edad").val(data.edad);
        $("#tamanio").val(data.tamanio);
        $("#genero").val(data.genero);
        $("#ubicacion").val(data.ubicacion);
        $("#descripcion").val(data.descripcion);
        $("#imagen").val(data.imagen);
    }
    )
    
}

function desactivar(idmascota) {
    bootbox.confirm("¿Esta seguro de desactivar la mascota?", function(result){
        if (result) {
            $.post("../ajax/mascota.php?op=desactivar", {idmascota : idmascota}, function(e){
                bootbox.alert(e);
                tabla.ajax.reload();
            });
        }
    })
}

function activar(idmascota) {
    bootbox.confirm("¿Esta seguro de activar la mascota?", function(result){
        if (result) {
            $.post("../ajax/mascota.php?op=activar", {idmascota : idmascota}, function(e){
                bootbox.alert(e);
                tabla.ajax.reload();
            });
        }
    })
}

init();
