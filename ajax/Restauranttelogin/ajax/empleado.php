


<?php 
	include("../modelos/Empleado.php");
	//Crear una instancia de la clase empleado
	$empleado=new Empleado();
    //Traer los datos del formulario a través del método POST
    $IdEmpleado="";
    $IdCargo="";
    $Nombre="";
    $Apellido="";
	$Documento="";
	$imagen="";

    if(isset($_POST["IdEmpleado"])){
        $IdEmpleado=$_POST["IdEmpleado"];
    }
    if(isset($_POST["IdCargo"])){
        $IdCargo=$_POST["IdCargo"];
    }
    if(isset($_POST["Nombre"])){
        $Nombre=$_POST["Nombre"];
    }
    if(isset($_POST["Apellido"])){
        $Apellido=$_POST["Apellido"];
    }
    if(isset($_POST["Documento"])){
       $Documento=$_POST["Documento"];
	}
	if(isset($_POST["imagen"])){
        $imagen=$_POST["imagen"];
    }
	session_start();
	switch ($_GET["op"]){
	case 'guardaryeditar':
		//Si no existe o no ha sido cargado la imagen dentro del input de tipo "file" en la interfaz
		if (!file_exists($_FILES['imagen']['tmp_name']) || !is_uploaded_file($_FILES['imagen']['tmp_name']))
		{
			$imagen=$_POST["imagenactual"];
		}
		else 
		{
		//explode: obtiene la extensión del archivo
		$ext = explode(".", $_FILES["imagen"]["name"]);
		//Valida que el archivo cargado cumpla con las extencisones: jpg,jpeg,png
		if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png")
		{
			//microtime: renombra el archivo con un formato de tiempo para que no tener archivos repetidos
			$imagen = round(microtime(true)) . '.' . end($ext);
			//move_uploaded_file: copia el archivo de la ubicacion local y lo mueve a la carpeta del proyecto
			move_uploaded_file($_FILES["imagen"]["tmp_name"], "../files/empleados/" . $imagen);
		}

		
		}
		if (empty($IdEmpleado)){
			$rspta=$empleado->insertar($IdCargo, $Nombre, $Apellido, $Documento, $imagen);
			echo $rspta ? "empleado registrado" : "empleado no se pudo registrar";
		}
		else {
			$rspta=$empleado->editar($IdEmpleado,$IdCargo, $Nombre, $Apellido, $Documento, $imagen);
			echo $rspta ? "empleado actualizado" : "empleado no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$empleado->desactivar($IdEmpleado);
		echo $rspta ? "empleado desactivado" : "empleado no se puede desactivar";
		break;
	break;

	case 'activar':
		$rspta=$empleado->activar($IdEmpleado);
		echo $rspta ? "empleado activado" : "empleado no se puede activar";
		break;
	break;

	case 'mostrar':
		$rspta=$empleado->mostrar($IdEmpleado);
		//Codificar el resultado utilizando json_encode(array)
		echo json_encode($rspta);
		break;

	case 'listar':
		$rspta=$empleado->listar();
		//Definir un array
		$data= Array();
		while ($reg=$rspta->fetch_object()){
			$data[]=array(
			"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->IdEmpleado.')"><i class="fa fa-pencil"></i></button>'.
			' <button class="btn btn-danger" onclick="desactivar('.$reg->IdEmpleado.')"><i class="fa fa-close"></i></button>':
			'<button class="btn btn-warning" onclick="mostrar('.$reg->IdEmpleado.')"><i class="fa fa-pencil"></i></button>'.
			' <button class="btn btn-primary" onclick="activar('.$reg->IdEmpleado.')"><i class="fa fa-check"></i></button>',
			"1"=>$reg->Nombre,
			"2"=>$reg->nomcargo, //Alias usado en la consulta múltiple en el método listar
			"3"=>$reg->Apellido,
			"4"=>$reg->Documento,
			//Muestra en una etiqueta img la imagen
			//Muestra la palabra Activado o Desactivado con color para que sea más claro
			"5"=>"<img src='../files/empleados/".$reg->imagen."' height='50px' width='50px' >", 
			"6"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
					'<span class="label bg-red">Desactivado</span>'
			);
		}
		$results = array(
			"sEcho"=>1, //Mostrar desde la fila 1
			"iTotalRecords"=>count($data), //Total registros de la tabla
			"iTotalDisplayRecords"=>count($data), //Total registros a visualizar en pantalla
			"aaData"=>$data); //En este indice del array llamado "aaData" se envia los datos del array $data
		//Retornar el array $results a través de JSON
		echo json_encode($results);

	break;
	case 'selectCargo':
		include "../modelos/Cargo.php";
		$cargo = new Cargo();
		//Carga en la variable $rspta los registros devueltos al ejecutar la consulta del método "select"
		$rspta = $cargo->select();
		//Carga cada fila del resultado del SELECT en la variable $reg
		while ($reg = $rspta->fetch_object())
		{
			//Agregar valores a la lista desplegable, de acuerdo a los datos de cada fila del SELECT
			echo '<option value=' . $reg->IdCargo . '>' . $reg->Nombre . '</option>';
			//echo '<option value="hola"></option>';
		}
	break;



	case 'validaracceso':
	$usuario=$_POST["usuario"];
	$clave=$_POST["clave"];
	$resultado=$empleado->validarusuario($usuario,$clave);
	if($fila=$resultado->fetch_object())
	{
		$_SESSION["Nombre"]=$fila->Nombre;
	}
	//devuelve los datos a la variable "data" de la funtion js
	echo json_encode($fila);
    break;
    case'salir':
	session_destroy();
	header("location:../vistas/login.html");
    break;

	}
    

?>
