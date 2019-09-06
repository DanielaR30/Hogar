<?php
include '../../config/Conexion.php';
session_start(); 
switch ($_GET["op"]) {
    case 'refugio':
        $nombre=$_POST["nombre"];
        $direccion=$_POST["direccion"];
        $email=$_POST["correo"];
        $telefono=$_POST["telefono"];
        $capacidad=$_POST["capacidad"];
        $condicion=$_POST["condicion"];
       
        
         //Ejecutanto insercion a la base de datos
        $insertar="INSERT INTO refugio(idrefugio, nombre, direccion, telefono, capacidad, condicion) 
                    VALUES ('$nombre', '$direccion', '$telefono', '$capacidad', '$condicion')";
            
            $result=mysqli_query($conexion, $insertar);
        if(!$result){
            echo "<script>alert('Error');window.location= '../../vistas/admin/refugio.php'</script>";
        }else{
            echo "<script>alert('refugio agregado');window.location= '../../vistas/admin/refugio.php'</script>";
        }
        break;
}
?>