<?php
include '../../config/Conexion.php';
session_start(); 
switch ($_GET["op"]) {
    case 'adopcion':
        $persona=$_POST["persona"];
        $fecha=$_POST["fecha"];
        $observacion=$_POST["observacion"];
       
        
         //Ejecutanto insercion a la base de datos
        $insertar="INSERT INTO adopcion(idpersona, fecha, observacion) 
                    VALUES ('$persona' ,'$fecha', '$observacion')";

$result=mysqli_query($conexion, $insertar);
        if(!$result){
            echo "<script>alert('Error ');window.location= '../../vistas/usuario/adopcion.php'</script>";
        }else{
            echo "<script>alert('Adopción Solicitada');window.location= '../../vistas/usuario/adopcion.php'</script>";
        }

    break;
}

?>