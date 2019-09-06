<?php
include '../../config/Conexion.php';
session_start(); 
switch ($_GET["op"]) {
    case 'foto':
        $mascota=$_POST["mascota"];
        $imagen=$_POST["imagen"];
        
         //Ejecutanto insercion a la base de datos
        $insertar="INSERT INTO foto(idmascota,imagen) 
                    VALUES ('$mascota','$imagen')";

        $result=mysqli_query($conexion, $insertar);
        if(!$result){
            echo "<script>alert('Error');window.location= '../../vistas/admin/ciudad.php'</script>";
        }else{
            echo "<script>alert('ciudad agregada');window.location= '../../vistas/admin/ciudad.php'</script>";
        }
        break;
}

?>

