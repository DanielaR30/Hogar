<?php
include '../../config/Conexion.php';
session_start(); 

switch ($_GET["op"]) {
    case 'veterinaria':
        $nombre=$_POST["nombre"];
        $funcionario=$_POST["funcionario"];
      
         //Ejecutanto insercion a la base de datos
        $insertar="INSERT INTO veterinaria(nombre, funcionario) 
                    VALUES ('$nombre','$funcionario')";
    
            $result=mysqli_query($conexion, $insertar);
        if(!$result){
            echo "<script>alert('Error');window.location= '../../vistas/admin/veterinaria.php'</script>";
        }else{
            echo "<script>alert('Veterinaria registrada');window.location= '../../vistas/admin/veterinaria.php'</script>";
        }
    break;
    case 'editarveterinaria':
    $nombre=$_POST["nombre"];
    $funcionario=$_POST["funcionario"];

    $editar="UPDATE veterinaria 
                SET nombre='$nombre', funcionario='$funcionario'";
    $consultar=mysqli_query($conexion, $editar);
    if(!$consultar){
            echo "<script>alert('Error');window.location= '../../vistas/admin/veterinaria.php'</script>";
    }else{
            echo "<script>window.location= '../../vistas/admin/veterinaria.php'</script>";
            }
    break;
    

  

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
            echo "<script>alert('Atencion agregada');window.location= '../../vistas/admin/atencionmedica.php'</script>";
        }
    break;
    

    case 'editaratencionmedica':
    $veterinaria=$_POST["veterinaria"];
    $mascota=$_POST["mascota"];
    $fecha=$_POST["fecha"];
    $diagnostico=$_POST["diagnostico"];
    $tratamiento=$_POST["tratamiento"];
    $editar="UPDATE atencionmedica 
                SET veterinaria='$veterinaria', mascota='$mascota', fecha='$fecha', diagnostico='$diagnostico', tratamiento='$tratamiento'";
    $consultando=mysqli_query($conexion, $editar);
    if(!$consultando){
        echo "<script>alert('Error');window.location= '../../vistas/admin/atencionmedicali.php'</script>";
    }else{
        echo "<script>window.location= '../../vistas/admin/atencionmedicali.php'</script>";
        }
break;

    case 'serviciomedico':
        $atencionmedica=$_POST["atencionmedica"];
        $nombre=$_POST["nombre"];
        
         //Ejecutanto insercion a la base de datos
        $insertar="INSERT INTO serviciomedico(idatencionmedica,nombre) 
                    VALUES ('$atencionmedica','$nombre')";

        $result1=mysqli_query($conexion, $insertar);
        if(!$result1){
            echo "<script>alert('Error');window.location= '../../vistas/admin/serviciomedico.php'</script>";
        }else{
            echo "<script>alert('serviciomedico agregado');window.location= '../../vistas/admin/serviciomedico.php'</script>";
        }
     break;
    
}
?>