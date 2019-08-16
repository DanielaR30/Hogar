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
    $("#preg1").val("");
    $("#preg2").val("");
    $("#preg3").val("");
    $("#preg4").val("");
    $("#preg5").val("");
    $("#preg6").val("");
    $("#preg7").val("");
    $("#preg8").val("");
    $("#preg9").val("");
    $("#preg10").val("");
    $("#preg11").val("");
    $("#preg12").val("");
    $("#preg13").val("");
    $("#preg14").val("");
    $("#preg15").val("");
    $("#idcuestionario").val("");    
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
                    url: '../ajax/cuestionario.php?op=listar',
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
		url: "../ajax/cuestionario.php?op=guardaryeditar",
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

function mostrar(idcuestionario){
    $.post("../ajax/cuestionario.php?op=mostrar",{idcuestionario :  idcuestionario}, function(data, status)
    {
        data = JSON.parse(data);
        mostrarform(true);
        $("#preg1").val(data.preg1);
        $("#preg2").val(data.preg2);
        $("#preg3").val(data.preg3);
        $("#preg4").val(data.preg4);
        $("#preg5").val(data.preg5);
        $("#preg6").val(data.preg6);
        $("#preg7").val(data.preg7);
        $("#preg8").val(data.preg8);
        $("#preg9").val(data.preg9);
        $("#preg10").val(data.preg10);
        $("#preg11").val(data.preg11);
        $("#preg12").val(data.preg12);
        $("#preg13").val(data.preg13);
        $("#preg14").val(data.preg14);
        $("#preg15").val(data.preg15);

        $("#idcuestionario").val(data.idcuestionario);
    })
}
//Funcion para desactivar registros
function desactivar(idcuestionario)
{
    //El parametro result recibe true o false dependiendo del clic del usuario al mensaje de confirmacion
    bootbox.confirm("¿Esta seguro de desactivar la respuesta?", function(result){
        //Si result es verdadero, se desactivara la categoria de lo contrario no 
        if(result)
        {
            //e es el mensaje que recibe la url 
            $.post("../ajax/cuestionario.php?op=desactivar",{idcuestionario : idcuestionario}, function(e){
                bootbox.alert(e);
                //Recarga la tabla datatable 
                tabla.ajax.reload();
            });
        }
    })
}

function activar(idcuestionario)
{
    bootbox.confirm("¿Esta seguro de activar la respuesta?", function(result){
        if(result)
        {
            $.post("../ajax/cuestionario.php?op=activar", {idcuestionario : idcuestionario}, function(e){
                bootbox.alert(e);
                tabla.ajax.reload();
            });
        }
    })
}
init();