<?php
    include("../modelos/Cuestionario.php");
    //Se crea una instancia de clase Categoria
    $cuestionario = new Cuestionario();
    //Se traen los datos del formulario a traves del metodo POST
    $idcuestionario="";
    $preg1="";
    $preg2="";
    $preg3="";
    $preg4="";
    $preg5="";
    $preg6="";
    $preg7="";
    $preg8="";
    $preg9="";
    $preg10="";
    $preg11="";
    $preg12="";
    $preg13="";
    $preg14="";
    $preg15="";
   
    //Recibe el valor de cada variable, siempre y cuando se haya enviado algun valor 
    if(isset($_POST["idcuestionario"])){
        $idcuestionario=$_POST["idcuestionario"];
    }
    if(isset($_POST["preg1"])){
        $preg1=$_POST["preg1"];
    }

     if(isset($_POST["preg2"])){
        $preg2=$_POST["preg2"];
    }

     if(isset($_POST["preg3"])){
        $preg3=$_POST["preg3"];
    }

     if(isset($_POST["preg4"])){
        $preg4=$_POST["preg4"];
    }

     if(isset($_POST["preg5"])){
        $preg5=$_POST["preg5"];
    }

     if(isset($_POST["preg6"])){
        $preg6=$_POST["preg6"];
    }

     if(isset($_POST["preg7"])){
        $preg7=$_POST["preg7"];
    }

     if(isset($_POST["preg8"])){
        $preg8=$_POST["preg8"];
    }

     if(isset($_POST["preg9"])){
        $preg9=$_POST["preg9"];
    }

     if(isset($_POST["preg10"])){
        $preg10=$_POST["preg10"];
    }

     if(isset($_POST["preg11"])){
        $preg11=$_POST["preg11"];
    }

     if(isset($_POST["preg12"])){
        $preg12=$_POST["preg12"];
    }

     if(isset($_POST["preg13"])){
        $preg13=$_POST["preg13"];
    }

     if(isset($_POST["preg14"])){
        $preg14=$_POST["preg14"];
    }

     if(isset($_POST["preg15"])){
        $preg15=$_POST["preg15"];
    }
    
    //Se invocan los metodos de la clase categoria 
    //Se valida el clic del usuario a traves de un parametro 
    //llamado "op" enviado por ajax usando el metodo GET 
    
    switch ($_GET["op"]) {
        case 'guardaryeditar':
             if (empty($idcuestionario)) {
                 $rspta=$cuestionario->insertar($preg1,$preg2,$preg3,$preg4,$preg5,$preg6,$preg7,$preg8,$preg9,$preg10,$preg11,$preg12,$preg13,$preg14,$preg15);
                 echo $rspta ? "Cuestionario registrada" : "Cuestionario no se pudo registrar";
             }
             else {
                $rspta=$cuestionario->editar($idcuestionario,$preg1,$preg2,$preg3,$preg4,$preg5,$preg6,$preg7,$preg8,$preg9,$preg10,$preg11,$preg12,$preg13,$preg14,$preg15);
                echo $rspta ? "Cuestionario actualizada" : "Cuestionario no se puede actualizar";
             }
            break;
        
        case 'desactivar':
                $rspta=$cuestionario->desactivar($idcuestionario);
                echo $rspta ? "Cuestionario  Desactivada" : "Cuestionario  no se puede desactivar";
            break;

        case 'activar':
            $rspta=$cuestionario->activar($idcuestionario);
            echo $rspta ? "Cuestionario  Activada" : "Cuestionario  no se puede activar";
            break;

        case 'mostrar':
            $rspta=$cuestionario->mostrar($idcuestionario);
            //Codificar el restultado utilizando json_encode(array)
            echo json_encode($rspta);
            break;

        case 'listar':
            $rspta=$cuestionario->listar();
            //print_r($rspta); die();
            //Definir un array (arreglo)
            $data= Array();
            //Carga en la variable $reg el resultado de la consulta ejecutada con el metodo "listar" y realiza un ciclo por cada fila de datos 
            while ($reg=$rspta->fetch_object()) {
                
                //Almacena cada fila del resultado del SELECT en el array $data[]
                $data[]=array(
                    "0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idcuestionario.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-danger" onclick="desactivar('.$reg->idcuestionario.')"><i class="fa fa-close"></i></button>':
                    '<button class="btn btn-warning" onclick="mostrar('.$reg->idcuestionario.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-primary" onclick="activar('.$reg->idcuestionario.')"><i class="fa fa-check"></i></button>',
                    "1"=>$reg->preg1,
                    "2"=>$reg->preg2,
                    "3"=>$reg->preg3,
                    "4"=>$reg->preg4,
                    "5"=>$reg->preg5,
                    "6"=>$reg->preg6,
                    "7"=>$reg->preg7,
                    "8"=>$reg->preg8,
                    "9"=>$reg->preg9,
                    "10"=>$reg->preg10,
                    "11"=>$reg->preg11,
                    "12"=>$reg->preg12,
                    "13"=>$reg->preg13,
                    "14"=>$reg->preg14,
                    "15"=>$reg->preg15,
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

            
            case 'selectCuestionario':
            //include "../modelos/Cuestionario.php";
            //$cuestionario = new Cuestionario();
            //Carga en la variable $rspta los registros devueltos al ejecutar la consulta del método "select"
            $rspta = $cuestionario->select();
            //Carga a cada fila del resultado del SELECT en la variable $reg
            while ($reg = $rspta->fetch_object()) 
            {
                //Agregar valores a la lista desplegable, de acuerdo a los datos de cada fila del SELECT
               echo '<option value= . $reg->idcuestionario . > $reg->nombre </option>';
               // echo '<option value="hola"></option>';
            }
        break;
    }
    
?>
