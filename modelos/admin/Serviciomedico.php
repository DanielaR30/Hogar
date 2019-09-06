<?php
include '../../config/Conexion.php';
session_start(); 
switch ($_GET["op"]) {
    case 'serviciomedico':
        $atencionmedica=$_POST["atencionmedica"];
        $nombre=$_POST["nombre"];
        
         //Ejecutanto insercion a la base de datos
        $insertar="INSERT INTO ciudad(idatencionmedica,nombre) 
                    VALUES ('$atencionmedica','$nombre')";

        $result=mysqli_query($conexion, $insertar);
        if(!$result){
            echo "<script>alert('Error');window.location= '../../vistas/admin/serviciomedico.php'</script>";
        }else{
            echo "<script>alert('serviciomedico agregado');window.location= '../../vistas/admin/serviciomedico.php'</script>";
        }
        break;
}

?>