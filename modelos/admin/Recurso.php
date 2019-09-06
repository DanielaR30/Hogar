<?php
include '../../config/Conexion.php';
session_start(); 
switch ($_GET["op"]) {
    case 'recurso':
        $refugio=$_POST["refugio"];
        $valor=$_POST["valor"];
        $fecha=$_POST["fecha"];
    
       
        
         //Ejecutanto insercion a la base de datos
        $insertar="INSERT INTO recurso(idrefugio, valor, fecha) 
                    VALUES ('$refugio' , $valor', '$fecha')";
       
       $result=mysqli_query($conexion, $insertar);
        if(!$result){
            echo "<script>alert('Error ');window.location= '../../vistas/admin/recurso.php'</script>";
        }else{
            echo "<script>alert('valor agregado');window.location= '../../vistas/admin/recurso.php'</script>";
        }

        break;
}

?>