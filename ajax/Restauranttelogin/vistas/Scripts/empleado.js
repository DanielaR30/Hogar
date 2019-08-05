var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})

	//Cargar los items al select categoria
	//r: son las opciones que devuelve el archivo ajax/empleado.php con el valor selectCategoria
	$.post("../ajax/cargo.php?op=selectCargo", function(r){
	            $("#IdCargo").html(r);
	            $("#IdCargo").selectpicker('refresh');

	});

	$("#imagenmuestra").hide();
}

//Función limpiar
function limpiar()
{
	$("#Nombre").val("");
	$("#Apellido").val("");
	$("#Documento").val("");
	$("#imagenmuestra").attr("src","");
	$("#imagenactual").val("");
	$("#IdEmpleado").val("");
}

//Función mostrar formulario
function mostrarform(flag)
{
	limpiar();
	if (flag)
	{
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

//Función cancelarform
function cancelarform()
{
	limpiar();
	mostrarform(false);
}

//Función Listar
function listar()
{
	tabla=$('#tbllistado').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../ajax/empleado.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 5,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}
//Función para guardar o editar

function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/empleado.php?op=guardaryeditar",
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


function mostrar(IdEmpleado)
{
	$.post("../ajax/empleado.php?op=mostrar",{IdEmpleado : IdEmpleado}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);
		$("#IdCargo").val(data.IdCargo);
		$('#IdCargo').selectpicker('refresh');
		$("#Nombre").val(data.Nombre);
		$("#Apellido").val(data.Apellido);
		$("#Documento").val(data.Documento);
		$("#imagenmuestra").show();
		$("#imagenmuestra").attr("src","../files/empleado/"+data.imagen);
		$("#imagenactual").val(data.imagen);
		 $("#IdEmpleado").val(data.IdEmpleado);
		 generarbarcode();
 	})
}


//Función para desactivar registros
function desactivar(IdEmpleado)
{
	bootbox.confirm("¿Está Seguro de desactivar el artículo?", function(result){
		if(result)
        {
        	$.post("../ajax/empleado.php?op=desactivar", {IdEmpleado : IdEmpleado}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

//Función para activar registros
function activar(IdEmpleado)
{
	bootbox.confirm("¿Está Seguro de activar el Artículo?", function(result){
		if(result)
        {
        	$.post("../ajax/empleado.php?op=activar", {IdEmpleado : IdEmpleado}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}
init();