var tabla;

function init() {
    mostrarform(false);
    listar();

    $("#formulario").on("submit", function(e)
    {
        guardaryeditar(e);
    }
    )
}

function limpiar() {
    $("#Nombre").val("");
    $("#Precio").val("");
    $("#IdCargo").val("");
    $("#Documento").val("");
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
                        url: '../ajax/cargo.php?op=listar',
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
        url: "../ajax/cargo.php?op=guardaryeditar",
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

function mostrar(IdCargo)
{
    $.post("../ajax/cargo.php?op=mostrar",{IdCargo : IdCargo}, function(data, status)
    {
        data = JSON.parse(data);
        mostrarform(true);
        $("#Nombre").val(data.Nombre);
        $("#Precio").val(data.Precio);
        $("#Documento").val(data.Documento);
        $("#IdCargo").val(data.IdCargo);
    }
    )
}

function desactivar(IdCargo) {
    bootbox.confirm("¿Esta seguro de desactivar el cargo?", function(result){
        if (result) {
            $.post("../ajax/cargo.php?op=desactivar", {IdCargo : IdCargo}, function(e){
                bootbox.alert(e);
                tabla.ajax.reload();
            });
        }
    })
}

function activar(IdCargo) {
    bootbox.confirm("¿Esta seguro de activar este cargo?", function(result){
        if (result) {
            $.post("../ajax/cargo.php?op=activar", {IdCargo : IdCargo}, function(e){
                bootbox.alert(e);
                tabla.ajax.reload();
            });
        }
    })
}

init();
