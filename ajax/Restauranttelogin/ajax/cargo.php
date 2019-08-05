<?php
    include ("../modelos/Cargo.php");

    $cargo = new Cargo();
    $IdCargo = "";
    $Apellido= "";
 
    if (isset($_POST["IdCargo"])) {
        $IdCargo = $_POST["IdCargo"];
    }
    if (isset($_POST["Nombre"])) {
       $Apellido= $_POST["Nombre"];
    }
  
    switch ($_GET["op"]) {
        case 'guardaryeditar':
            if (empty($IdCargo)) {
                $rspta = $cargo->insertar($Apellido);
                echo $rspta ? "Cargo registrado" : "Cargo no se pudo registrar";
            } 
            else {
                $rspta=$cargo->editar($IdCargo,$Apellido);
                echo $rspta ? "Cargo Actualizado" : "Cargo no se pudo actualizar";
            } 
            
            break;
        
        case 'desactivar':
            $rspta = $cargo->desactivar( $IdCargo);
            echo $rspta ? "Cargo desactivado" : "Cargo no se pudo desactivar";
            break;

        case 'activar':
            $rspta = $cargo->activar( $IdCargo);
            echo $rspta ? "Cargo activado" : "Cargo no se puede  activar";
            break;

        case 'mostrar':
            $rspta = $cargo->mostrar( $IdCargo);
            echo json_encode($rspta);
            break;
        case 'listar':
        $rspta = $cargo->listar();
        $data = Array();

        while ($reg=$rspta->fetch_object()){
            $data[]=array(
                "0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->IdCargo.')"><i class="fa fa-pencil"></i></button>'.
                '<button class="btn btn-danger" onclick="desactivar('.$reg->IdCargo.')"><i class="fa fa-close"></i></button>':
                '<button class="btn btn-warning" onclick="mostrar('.$reg->IdCargo.')"><i class="fa fa-pencil"></i></button>'.
                '<button class="btn btn-primary" onclick="activar('.$reg->IdCargo.')"><i class="fa fa-check"></i></button>',

                "1"=>$reg->Nombre,
           
            );
        }
        $results = array(
            "sEcho" => 1, 
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data);

            echo json_encode($results);
        break;
        case 'selectCargo':
		//include "../modelos/Cargo.php";
		//$cargo = new Cargo();
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
    }
?>