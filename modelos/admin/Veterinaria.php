<?php
include '../../config/Conexion.php';
session_start(); 
switch ($_GET["op"]) {
    case 'veterinaria':
        $nombre=$_POST["nombre"];
        $funcionario=$_POST["funcionario"];
        $condicion=$_POST["condicion"];
       
        
         //Ejecutanto insercion a la base de datos
        $insertar="INSERT INTO veterinario(idveterinaria, nombre, funcionario, condicion) 
                    VALUES ('$nombre','$funcionario','$condicion')";
    
            $result=mysqli_query($conexion, $insertar);
        if(!$result){
            echo "<script>alert('Error');window.location= '../../vistas/admin/veterinaria.php'</script>";
        }else{
            echo "<script>alert('Veterinaria registrada');window.location= '../../vistas/admin/veterinaria.php'</script>";
        }
        break;
}
?>