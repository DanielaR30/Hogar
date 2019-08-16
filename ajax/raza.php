<?php
    include("../modelos/Raza.php");
    //Se crea una instancia de clase Categoria
    $raza = new Raza();
    //Se traen los datos del formulario a traves del metodo POST
    $idraza="";
    $nombre="";
   
    //Recibe el valor de cada variable, siempre y cuando se haya enviado algun valor 
    if(isset($_POST["idraza"])){
        $idraza=$_POST["idraza"];
    }
    if(isset($_POST["nombre"])){
        $nombre=$_POST["nombre"];
    }
    
    //Se invocan los metodos de la clase categoria 
    //Se valida el clic del usuario a traves de un parametro 
    //llamado "op" enviado por ajax usando el metodo GET 
    
    switch ($_GET["op"]) {
        case 'guardaryeditar':
             if (empty($idraza)) {
                 $rspta=$raza->insertar($nombre);
                 echo $rspta ? "Raza registrada" : "Raza no se pudo registrar";
             }
             else {
                $rspta=$raza->editar($idraza,$nombre);
                echo $rspta ? "Raza actualizada" : "Raza no se puede actualizar";
             }
            break;
        
        case 'desactivar':
                $rspta=$raza->desactivar($idraza);
                echo $rspta ? "Raza  Desactivada" : "Raza  no se puede desactivar";
            break;

        case 'activar':
            $rspta=$raza->activar($idraza);
            echo $rspta ? "Raza  Activada" : "Raza  no se puede activar";
            break;

        case 'mostrar':
            $rspta=$raza->mostrar($idraza);
            //Codificar el restultado utilizando json_encode(array)
            echo json_encode($rspta);
            break;

        case 'listar':
            $rspta=$raza->listar();
            //print_r($rspta); die();
            //Definir un array (arreglo)
            $data= Array();
            //Carga en la variable $reg el resultado de la consulta ejecutada con el metodo "listar" y realiza un ciclo por cada fila de datos 
            while ($reg=$rspta->fetch_object()) {
                
                //Almacena cada fila del resultado del SELECT en el array $data[]
                $data[]=array(
                    "0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idraza.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-danger" onclick="desactivar('.$reg->idraza.')"><i class="fa fa-close"></i></button>':
                    '<button class="btn btn-warning" onclick="mostrar('.$reg->idraza.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-primary" onclick="activar('.$reg->idraza.')"><i class="fa fa-check"></i></button>',
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

            
            case 'selectRaza':
            //include "../modelos/Raza.php";
            //$raza = new Raza();
            //Carga en la variable $rspta los registros devueltos al ejecutar la consulta del método "select"
            $rspta = $raza->select();
            //Carga a cada fila del resultado del SELECT en la variable $reg
            while ($reg = $rspta->fetch_object()) 
            {
                //Agregar valores a la lista desplegable, de acuerdo a los datos de cada fila del SELECT
               echo '<option value= . $reg->idraza . > $reg->nombre </option>';
               // echo '<option value="hola"></option>';
            }
        break;
    }
    
?>
