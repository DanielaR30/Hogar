<?php
include '../../config/Conexion.php';
session_start(); 
switch ($_GET["op"]) {
    case 'atencionmedica':
        $veterinaria=$_POST["veterinaria"];
        $mascota=$_POST["mascota"];
        $fecha=$_POST["fecha"];
        $diagnostico=$_POST["diagnostico"];
        $tratamiento=$_POST["tratamiento"];
        
         //Ejecutanto insercion a la base de datos
        $insertar="INSERT INTO atencionmedica(idveterinaria,idmascota, fecha, diagnostico, tratamiento) 
                    VALUES ('$veterinaria','$mascota', '$fecha','$diagnostico' , '$tratamiento')";
       
       $result=mysqli_query($conexion, $insertar);

        if(!$result){
            echo "<script>alert('Error ');window.location= '../../vistas/admin/atencionmedica.php'</script>";
        }else{
            echo "<script>alert('gasto agregado');window.location= '../../vistas/admin/atencionmedica.php'</script>";
        }
    break;
}
?>