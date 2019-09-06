<?php
include '../../config/Conexion.php';
session_start(); 
switch ($_GET["op"]) {
    case 'ciudad':
        $departamento=$_POST["departamento"];
        $nombre=$_POST["nombre"];
        
         //Ejecutanto insercion a la base de datos
        $insertar="INSERT INTO ciudad(iddepartamento,nombre) 
                    VALUES ('$departamento','$nombre')";

        $result=mysqli_query($conexion, $insertar);
        if(!$result){
            echo "<script>alert('Error');window.location= '../../vistas/admin/ciudad.php'</script>";
        }else{
            echo "<script>alert('ciudad agregada');window.location= '../../vistas/admin/ciudad.php'</script>";
        }
        break;
}

?>