<?php
include '../../config/Conexion.php';
session_start(); 
switch ($_GET["op"]) {
    case 'tipogasto':
        $nombre=$_POST["nombre"];
       
       
        
         //Ejecutanto insercion a la base de datos
        $insertar="INSERT INTO tipogasto(idtipogasto, nombre) 
                    VALUES ('$nombre')";

        $result=mysqli_query($conexion, $insertar);
        if(!$result){
            echo "<script>alert('Error');window.location= '../../vistas/admin/tipogasto.php'</script>";
        }else{
            echo "<script>alert('Gasto agregado');window.location= '../../vistas/admin/tipogasto.php'</script>";
        }
        break;     
}
?>