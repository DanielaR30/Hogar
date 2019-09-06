<?php
include '../../config/Conexion.php';
session_start(); 
switch ($_GET["op"]) {
    case 'departamento':
        $nombre=$_POST["nombre"];
       
       
        
         //Ejecutanto insercion a la base de datos
        $insertar="INSERT INTO departamento(iddepartamento, nombre) 
                    VALUES ('$nombre')";
   
   $result=mysqli_query($conexion, $insertar);
   if(!$result){
       echo "<script>alert('Error');window.location= '../../vistas/admin/departamento.php'</script>";
   }else{
       echo "<script>alert('Departamento agregado');window.location= '../../vistas/admin/departamento.php'</script>";
   }
   break;
}
?>