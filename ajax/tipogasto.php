<?php
    include("../modelos/Tipogasto.php");
    //Se crea una instancia de clase Categoria
    $tipogasto = new Tipogasto();
    //Se traen los datos del formulario a traves del metodo POST
    $idtipogasto="";
    $nombre="";
   
    //Recibe el valor de cada variable, siempre y cuando se haya enviado algun valor 
    if(isset($_POST["idtipogasto"])){
        $idtipogasto=$_POST["idtipogasto"];
    }
    if(isset($_POST["nombre"])){
        $nombre=$_POST["nombre"];
    }
    
    //Se invocan los metodos de la clase categoria 
    //Se valida el clic del usuario a traves de un parametro 
    //llamado "op" enviado por ajax usando el metodo GET 
    
    switch ($_GET["op"]) {
        case 'guardaryeditar':
             if (empty($idtipogasto)) {
                 $rspta=$tipogasto->insertar($nombre);
                 echo $rspta ? "tipogasto registrada" : "tipogasto no se pudo registrar";
             }
             else {
                $rspta=$tipogasto->editar($idtipogasto,$nombre);
                echo $rspta ? "tipogasto actualizada" : "tipogasto no se puede actualizar";
             }
            break;
        
        case 'desactivar':
                $rspta=$tipogasto->desactivar($idtipogasto);
                echo $rspta ? "tipogasto  Desactivada" : "tipogasto  no se puede desactivar";
            break;

        case 'activar':
            $rspta=$tipogasto->activar($idtipogasto);
            echo $rspta ? "tipogasto  Activada" : "tipogasto  no se puede activar";
            break;

        case 'mostrar':
            $rspta=$tipogasto->mostrar($idtipogasto);
            //Codificar el restultado utilizando json_encode(array)
            echo json_encode($rspta);
            break;

        case 'listar':
            $rspta=$tipogasto->listar();
            //print_r($rspta); die();
            //Definir un array (arreglo)
            $data= Array();
            //Carga en la variable $reg el resultado de la consulta ejecutada con el metodo "listar" y realiza un ciclo por cada fila de datos 
            while ($reg=$rspta->fetch_object()) {
                
                //Almacena cada fila del resultado del SELECT en el array $data[]
                $data[]=array(
                    "0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idtipogasto.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-danger" onclick="desactivar('.$reg->idtipogasto.')"><i class="fa fa-close"></i></button>':
                    '<button class="btn btn-warning" onclick="mostrar('.$reg->idtipogasto.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-primary" onclick="activar('.$reg->idtipogasto.')"><i class="fa fa-check"></i></button>',
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

            
            case 'selectTipogasto':
            //include "../modelos/Tipogasto.php";
            //$tipogasto = new Tipogasto();
            //Carga en la variable $rspta los registros devueltos al ejecutar la consulta del método "select"
            $rspta = $tipogasto->select();
            //Carga a cada fila del resultado del SELECT en la variable $reg
            while ($reg = $rspta->fetch_object()) 
            {
                //Agregar valores a la lista desplegable, de acuerdo a los datos de cada fila del SELECT
               echo '<option value= . $reg->idtipogasto . > $reg->nombre </option>';
               // echo '<option value="hola"></option>';
            }
        break;
    }
    
?>
