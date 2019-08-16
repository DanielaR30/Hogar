<?php
    include ("../modelos/Mascota.php");

    $mascota = new Mascota();

    $idmascota = "";
    $idraza = "";
    $especie = "";
    $nombre = "";
    $edad = "";
    $tamanio = "";
    $genero = "";
    $ubicacion = "";
    $descripcion = "";
    $imagen = "";
    $condicion="";


    if (isset($_POST["idmascota"])) {
        $idmascota = $_POST["idmascota"];
    }
    if (isset($_POST["idraza"])) {
        $idraza = $_POST["idraza"];
    }
    if (isset($_POST["especie"])) {
        $especie = $_POST["especie"];
    }
    if (isset($_POST["nombre"])) {
        $nombre = $_POST["nombre"];
    }
    if (isset($_POST["edad"])) {
        $edad = $_POST["edad"];
    }
    if (isset($_POST["tamanio"])) {
        $tamanio = $_POST["tamanio"];
    }
    if (isset($_POST["genero"])) {
        $genero = $_POST["genero"];
    }
    if (isset($_POST["ubicacion"])) {
        $ubicacion = $_POST["ubicacion"];
    }
    if (isset($_POST["descripcion"])) {
        $descripcion = $_POST["descripcion"];
    }
    if (isset($_POST["imagen"])) {
        $imagen = $_POST["imagen"];
    }
    if (isset($_POST["condicion"])) {
        $condicion= $_POST["condicion"];
    }


    switch ($_GET["op"]) {
        case 'guardaryeditar':
        //Si no esxiste o no ha sido cargada la imagen dentro del input de tipo "file" en la interfaz
        if (!file_exists($_FILES['imagen']['tmp_name']) || !is_uploaded_file($_FILES['imagen']['tmp_name'])) 
        {
            $imagen="";
        }
        else
        {
            //explode: obtiene la extensión del archivo
            $ext = explode(".", $_FILES['imagen']['name']);
            //Valida que el archivo  cargado cumpla con las extensiones: jpg,jpeg,png
            if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png") 
            {
                //microtime: renombra el archivo con un formato de tiempo para no tener archivos repetidos
                $imagen = round(microtime(true)) . '.' . end($ext);
                //move_upload_file: copia el archivo de la ubicación local y lo mueve a la carpeta del proyecto
                move_uploaded_file($_FILES['imagen']['tmp_name'], "../files/articulos/" .$imagen);
            }
        }
            if (empty($idmascota)) {
                $rspta = $mascota->insertar($idraza,$especie, $nombre, $edad, $tamanio, $genero, $ubicacion, $descripcion);
                echo $rspta ? "Mascota registrado" : "Mascota no se puede registrar";
            } 
            else {
                $rspta = $mascota->editar($idraza,$especie, $nombre, $edad, $tamanio, $genero, $ubicacion, $descripcion);
                echo $rspta ? "Mascota actualizado" : "Mascota no se puede actualizar";
            }
            
            break;
        
        case 'desactivar':
            $rspta = $mascota->desactivar($idmascota);
            echo $rspta ? "Mascota desactivado" : "Mascota no se puede desactivar";
            break;

        case 'activar':
            $rspta = $mascota->activar($idmascota);
            echo $rspta ? "Mascota activado" : "Mascota no se puede  activar";
            break;

        case 'mostrar':
            $rspta = $mascota->mostrar($idmascota);
            echo json_encode($rspta);
            break;
        case 'listar':
        $rspta = $mascota->listar();
        $data = Array();

        while ($reg=$rspta->fetch_object()){
            $data[]=array(
                "0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idmascota.')"><i class="fa fa-pencil"></i></button>'.
			' <button class="btn btn-danger" onclick="desactivar('.$reg->idmascota.')"><i class="fa fa-close"></i></button>':
			'<button class="btn btn-warning" onclick="mostrar('.$reg->idmascota.')"><i class="fa fa-pencil"></i></button>'.
			' <button class="btn btn-primary" onclick="activar('.$reg->idmascota.')"><i class="fa fa-check"></i></button>',
              
                "1"=>$reg->nombreRaza,
                "2"=>$reg->especie,
                "3"=>$reg->nombre,
                "4"=>$reg->edad,
                "5"=>$reg->tamanio,
                "6"=>$reg->genero,
                "7"=>$reg->ubicacion,
                "8"=>$reg->descripcion,
               
                //Muestra en una etiqueta img la imagen
                "9"=>"<img src='../files/traspaso/".$reg->imagen."' height='50px' width='50px'>",
                //Muestra la palabra Activado o Desactivado con color para que sea más claro
                "10"=>$reg->condicion?'<span class="label bg-green">Activado</span>':
                        '<span class="label bg-red">Desactivado</span>'

            );
        }
        $results = array(
            "sEcho" => 1, 
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data);

            echo json_encode($results);
        break;

        case 'selectRaza':
            //include "../modelos/Raza.php";
            //$raza = new Raza();
            //Carga en la variable $rspta los registros devueltos al ejecutar la consulta del método "select"
            $rspta = $mascota->selectRaza();
            //Carga a cada fila del resultado del SELECT en la variable $reg
            while ($reg = $rspta->fetch_object()) 
            {
                //Agregar valores a la lista desplegable, de acuerdo a los datos de cada fila del SELECT
                echo "<option value= . $reg->idraza . > $reg->nombre </option>";
                //echo '<option value="">Prueba</option>';
            }
        break;
         
        }
    
?>