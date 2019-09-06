<?php
include '../../config/Conexion.php';
session_start(); 
switch ($_GET["op"]) {
    case 'raza':
        $nombre=$_POST["nombre"];
       
       
        
         //Ejecutanto insercion a la base de datos
        $insertar="INSERT INTO raza(idraza, nombre) 
                    VALUES ('$nombre')";


$result=mysqli_query($conexion, $insertar);
if(!$result){
    echo "<script>alert('Error ');window.location= '../../vistas/admin/raza.php'</script>";
}else{
    echo "<script>alert('mascota registrada');window.location= '../../vistas/admin/raza.php'</script>";
}
break;     
}
?>