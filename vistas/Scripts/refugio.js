//Variable global "tabla" que va a guardar todos los registros de la tabla categoria y de esta manera
//procesarlos dentro de algunas de las siguientes funciones
var tabla;

//Funcion init, la cual es llamada al final 
function init(){
    mostrarform(false);
    listar();
    //Cada vez que se de clic en el boton "Agregar" se activa el formulario y de esta manera se llama a la funcion de guardaryeditar
    $("#formulario").on("submit",function(e)
    {
        guardaryeditar(e);
    })
}

//Limpia las cajas de texto
function limpiar() 
{
    $("#nombre").val("");
    $("#direccion").val("");
    $("#telefono").val("");
    $("#capacidad").val("");
    $("#idrefugio").val("");    
}

//Muestra u oculta el formulario y lista de datos
function mostrarform(bandera) {
    limpiar();
    if (bandera) {
        $("#listadoregistros").hide();
        $("#formularioregistros").show();
        $("#btnGuardar").prop("disabled",false);
        $("#btnagregar").hide();
    }
    else
    {
        $("#listadoregistros").show();
        $("#formularioregistros").hide();
        $("#btnagregar").show();
    }
}

//Funcion Cancelar Formulario
function cancelarform()
{
    //limpiar();
    mostrarform(false);
}

//Lista en una tabla de html (un datatable) todos los registros de la tabla de la base de datos 
function listar()
{
    //tbllistando es el id de una caja de la vista categoria.php
    //Organiza los datos en forma de tabla
    tabla=$('#tbllistado').dataTable(
        {
            "aProcessing": true,//Activamos el procesamiento del datatables
            "aServerSide": true,//Paginacion y filtrado realizados por el servidor
            dom: 'Bfrtip',//Definimos los elementos del control de tabla
            buttons: [//Crea 4 botones para exportar los datos en diferentes formatos
                        'copyHtml5',
                        'excelHtml5',
                        'csvHtml5',
                        'pdf'
            ],
        "ajax":
                {
                    url: '../ajax/refugio.php?op=listar',
                    type: "get",
                    dataType: "json",
 /*                    success: function(data){
                        console.log('responsedata');
                        console.log(data);
                    }, */
                    error: function(e){
                        console.log(e.responseText);
                    }
                },
            "bDestroy":true,
            "iDisplayLength": 5,//Mostrar de a 5 registros por pagina 
            "order": [[0, "desc"]]//Ordenar los datos (columna, orden) 
        }
        ).DataTable();      
}


function guardaryeditar(e){
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/refugio.php?op=guardaryeditar",
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

	});
	limpiar();
}

function mostrar(idrefugio){
    $.post("../ajax/refugio.php?op=mostrar",{idrefugio :  idrefugio}, function(data, status)
    {
        data = JSON.parse(data);
        mostrarform(true);
        $("#nombre").val(data.nombre);
        $("#direccion").val(data.direccion);
        $("#telefono").val(data.telefono);
        $("#capacidad").val(data.capacidad);
        $("#idrefugio").val(data.idrefugio);
    })
}
//Funcion para desactivar registros
function desactivar(idrefugio)
{
    //El parametro result recibe true o false dependiendo del clic del usuario al mensaje de confirmacion
    bootbox.confirm("¿Esta seguro de desactivar la refugio?", function(result){
        //Si result es verdadero, se desactivara la categoria de lo contrario no 
        if(result)
        {
            //e es el mensaje que recibe la url 
            $.post("../ajax/refugio.php?op=desactivar",{idrefugio : idrefugio}, function(e){
                bootbox.alert(e);
                //Recarga la tabla datatable 
                tabla.ajax.reload();
            });
        }
    })
}

function activar(idrefugio)
{
    bootbox.confirm("¿Esta seguro de activar la refugio?", function(result){
        if(result)
        {
            $.post("../ajax/refugio.php?op=activar", {idrefugio : idrefugio}, function(e){
                bootbox.alert(e);
                tabla.ajax.reload();
            });
        }
    })
}
init();