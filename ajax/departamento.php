<?php
    include("../modelos/Departamento.php");
    //Se crea una instancia de clase Categoria
    $departamento = new Departamento();
    //Se traen los datos del formulario a traves del metodo POST
    $iddepartamento="";
    $nombre="";
   
    //Recibe el valor de cada variable, siempre y cuando se haya enviado algun valor 
    if(isset($_POST["iddepartamento"])){
        $iddepartamento=$_POST["iddepartamento"];
    }
    if(isset($_POST["nombre"])){
        $nombre=$_POST["nombre"];
    }
    
    //Se invocan los metodos de la clase categoria 
    //Se valida el clic del usuario a traves de un parametro 
    //llamado "op" enviado por ajax usando el metodo GET 
    
    switch ($_GET["op"]) {
        case 'guardaryeditar':
             if (empty($iddepartamento)) {
                 $rspta=$departamento->insertar($nombre);
                 echo $rspta ? "departamento registrada" : "departamento no se pudo registrar";
             }
             else {
                $rspta=$departamento->editar($iddepartamento,$nombre);
                echo $rspta ? "departamento actualizada" : "departamento no se puede actualizar";
             }
            break;
        
        case 'desactivar':
                $rspta=$departamento->desactivar($iddepartamento);
                echo $rspta ? "departamento  Desactivada" : "departamento  no se puede desactivar";
            break;

        case 'activar':
            $rspta=$departamento->activar($iddepartamento);
            echo $rspta ? "departamento  Activada" : "departamento  no se puede activar";
            break;

        case 'mostrar':
            $rspta=$departamento->mostrar($iddepartamento);
            //Codificar el restultado utilizando json_encode(array)
            echo json_encode($rspta);
            break;

        case 'listar':
            $rspta=$departamento->listar();
            //print_r($rspta); die();
            //Definir un array (arreglo)
            $data= Array();
            //Carga en la variable $reg el resultado de la consulta ejecutada con el metodo "listar" y realiza un ciclo por cada fila de datos 
            while ($reg=$rspta->fetch_object()) {
                
                //Almacena cada fila del resultado del SELECT en el array $data[]
                $data[]=array(
                    "0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->iddepartamento.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-danger" onclick="desactivar('.$reg->iddepartamento.')"><i class="fa fa-close"></i></button>':
                    '<button class="btn btn-warning" onclick="mostrar('.$reg->iddepartamento.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-primary" onclick="activar('.$reg->iddepartamento.')"><i class="fa fa-check"></i></button>',
                    "1"=>$reg->nombre,
                );
            } 

            $results = array(
                "sEcho"=>1, //Mostrar desde la fila 1
                "iTotalRecords"=>count($data), //total registros de la tabla
                "iTotalDisplayRecords"=>count($data), //Total registros a visualizar en pantalla 
                "aaData"=>$data);//En este indice del array llamado "aaData" se envia los datos del array $data
            //Aqui retorna el array $results a traves de Json
            //print_r($results); die();
            echo json_encode($results);
               
            break;

            
            case 'selectDepartamento':
            //include "../modelos/Departamento.php";
            //$departamento = new Departamento();
            //Carga en la variable $rspta los registros devueltos al ejecutar la consulta del método "select"
            $rspta = $departamento->select();
            //Carga a cada fila del resultado del SELECT en la variable $reg
            while ($reg = $rspta->fetch_object()) 
            {
                //Agregar valores a la lista desplegable, de acuerdo a los datos de cada fila del SELECT
               echo '<option value= . $reg->iddepartamento . > $reg->nombre </option>';
               // echo '<option value="hola"></option>';
            }
        break;
    }
    
?>
