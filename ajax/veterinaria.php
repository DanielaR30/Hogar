<?php
    include("../modelos/Veterinaria.php");
    //Se crea una instancia de clase Categoria
    $veterinaria = new Veterinaria(); //Se traen los datos del formulario a traves del metodo POST
    $idveterinaria="";
    $nombre="";
    $funcionario="";
   
    //Recibe el valor de cada variable, siempre y cuando se haya enviado algun valor 
    if(isset($_POST["idveterinaria"])){
        $idveterinaria=$_POST["idveterinaria"];
    }
    if(isset($_POST["nombre"])){
        $nombre=$_POST["nombre"];
    }

    if(isset($_POST["funcionario"])){
        $funcionario=$_POST["funcionario"];
    }
   
     //Se invocan los metodos de la clase categoria 
    //Se valida el clic del usuario a traves de un parametro 
    //llamado "op" enviado por ajax usando el metodo GET 
    
    switch ($_GET["op"]) {
        case 'guardaryeditar':
             if (empty($idveterinaria)) {
                 $rspta=$veterinaria->insertar($nombre,$funcionario);
                 echo $rspta ? "veterinaria registrada" : "veterinaria no se pudo registrar";
             }
             else {
                $rspta=$veterinaria->editar($idveterinaria,$nombre,$funcionario);
                echo $rspta ? "veterinaria actualizada" : "veterinaria no se puede actualizar";
             }
            break;
        
        case 'desactivar':
                $rspta=$veterinaria->desactivar($idveterinaria);
                echo $rspta ? "veterinaria  Desactivada" : "veterinaria  no se puede desactivar";
            break;

        case 'activar':
            $rspta=$veterinaria->activar($idveterinaria);
            echo $rspta ? "veterinaria  Activada" : "veterinaria  no se puede activar";
            break;

        case 'mostrar':
            $rspta=$veterinaria->mostrar($idveterinaria);
            //Codificar el restultado utilizando json_encode(array)
            echo json_encode($rspta);
            break;

        case 'listar':
            $rspta=$veterinaria->listar();
            //Definir un array (arreglo)
            $data= Array();
            //Carga en la variable $reg el resultado de la consulta ejecutada con el metodo "listar" y realiza un ciclo por cada fila de datos 
            while ($reg=$rspta->fetch_object()) {
                //Almacena cada fila del resultado del SELECT en el array $data[]
                $data[]=array(
                    "0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idveterinaria.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-danger" onclick="desactivar('.$reg->idveterinaria.')"><i class="fa fa-close"></i></button>':
                    '<button class="btn btn-warning" onclick="mostrar('.$reg->idveterinaria.')"><i class="fa fa-pencil"></i></button>'.
                    ' <button class="btn btn-primary" onclick="activar('.$reg->idveterinaria.')"><i class="fa fa-check"></i></button>',
                    "1"=>$reg->nombre,
                    "2"=>$reg->funcionario,
                );
            } 
            $results = array(
                "sEcho"=>1, //Mostrar desde la fila 1
                "iTotalRecords"=>count($data), //total registros de la tabla
                "iTotalDisplayRecords"=>count($data), //Total registros a visualizar en pantalla 
                "aaData"=>$data);//En este indice del array llamado "aaData" se envia los datos del array $data
            //Aqui retorna el array $results a traves de Json
            echo json_encode($results);
               
            break;

            
            case 'selectVeterinaria':
            //include "../modelos/Veterinaria.php";
            //$veterinaria = new Veterinaria();
            //Carga en la variable $rspta los registros devueltos al ejecutar la consulta del método "select"
            $rspta = $veterinaria->select();
            //Carga a cada fila del resultado del SELECT en la variable $reg
            while ($reg = $rspta->fetch_object()) 
            {
                //Agregar valores a la lista desplegable, de acuerdo a los datos de cada fila del SELECT
               echo '<option value= . $reg->idveterinaria . >' . $reg->nombre . '</option>';
               // echo '<option value="hola"></option>';
            }
        break;
    }
    
?>
