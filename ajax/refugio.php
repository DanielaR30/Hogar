<?php
    include("../modelos/Refugio.php");
    //Se crea una instancia de clase Categoria
    $refugio = new Refugio();
    //Se traen los datos del formulario a traves del metodo POST
    $idrefugio="";
    $nombre="";
    $direccion="";
    $telefono="";
    $capacidad="";
   
    //Recibe el valor de cada variable, siempre y cuando se haya enviado algun valor 
    if(isset($_POST["idrefugio"])){
        $idrefugio=$_POST["idrefugio"];
    }
    if(isset($_POST["nombre"])){
        $nombre=$_POST["nombre"];
    }
    if(isset($_POST["direccion"])){
        $direccion=$_POST["direccion"];
    }
    if(isset($_POST["telefono"])){
        $telefono=$_POST["telefono"];
    }
    if(isset($_POST["capacidad"])){
        $capacidad=$_POST["capacidad"];
    }

    //Se invocan los metodos de la clase categoria 
    //Se valida el clic del usuario a traves de un parametro 
    //llamado "op" enviado por ajax usando el metodo GET 
    
    switch ($_GET["op"]) {
        case 'guardaryeditar':
             if (empty($idrefugio)) {
                 $rspta=$refugio->insertar($nombre,$direccion,$telefono,$capacidad);
                 echo $rspta ? "refugio registrada" : "refugio no se pudo registrar";
             }
             else {
                $rspta=$refugio->editar($idrefugio,$nombre,$direccion,$telefono,$capacidad);
                echo $rspta ? "refugio actualizada" : "refugio no se puede actualizar";
             }
            break;
        
        case 'desactivar':
                $rspta=$refugio->desactivar($idrefugio);
                echo $rspta ? "refugio  Desactivada" : "refugio  no se puede desactivar";
            break;

        case 'activar':
            $rspta=$refugio->activar($idrefugio);
            echo $rspta ? "refugio  Activada" : "refugio  no se puede activar";
            break;

        case 'mostrar':
            $rspta=$refugio->mostrar($idrefugio);
            //Codificar el restultado utilizando json_encode(array)
            echo json_encode($rspta);
            break;

        case 'listar':
            $rspta=$refugio->listar();
            //print_r($rspta); die();
            //Definir un array (arreglo)
            $data= Array();
            //Carga en la variable $reg el resultado de la consulta ejecutada con el metodo "listar" y realiza un ciclo por cada fila de datos 
            while ($reg=$rspta->fetch_object()) {
                
                //Almacena cada fila del resultado del SELECT en el array $data[]
                $data[]=array(
                    "0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idrefugio.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-danger" onclick="desactivar('.$reg->idrefugio.')"><i class="fa fa-close"></i></button>':
                    '<button class="btn btn-warning" onclick="mostrar('.$reg->idrefugio.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-primary" onclick="activar('.$reg->idrefugio.')"><i class="fa fa-check"></i></button>',
                    "1"=>$reg->nombre,
                    "2"=>$reg->direccion,
                    "3"=>$reg->telefono,
                    "4"=>$reg->capacidad,
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

            
            case 'selectRefugio':
            //include "../modelos/Refugio.php";
            //$refugio = new Refugio();
            //Carga en la variable $rspta los registros devueltos al ejecutar la consulta del método "select"
            $rspta = $refugio->select();
            //Carga a cada fila del resultado del SELECT en la variable $reg
            while ($reg = $rspta->fetch_object()) 
            {
                //Agregar valores a la lista desplegable, de acuerdo a los datos de cada fila del SELECT
               echo '<option value= . $reg->idrefugio . > $reg->nombre </option>';
               // echo '<option value="hola"></option>';
            }
        break;
    }
    
?>
