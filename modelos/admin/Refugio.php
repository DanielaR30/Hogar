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

        case 'recurso':
        $refugio=$_POST["refugio"];
        $valor=$_POST["valor"];
        $fecha=$_POST["fecha"];
    
       
        
         //Ejecutanto insercion a la base de datos
        $insertar="INSERT INTO recurso(idrefugio, valor, fecha) 
                    VALUES ('$refugio' , $valor', '$fecha')";
       
       $result=mysqli_query($conexion, $insertar);
        if(!$result){
            echo "<script>alert('Error ');window.location= '../../vistas/admin/recurso.php'</script>";
        }else{
            echo "<script>alert('valor agregado');window.location= '../../vistas/admin/recurso.php'</script>";
        }

        break;

        case 'gasto':
        $recurso=$_POST["recurso"];
        $tipogasto=$_POST["tipogasto"];
        $valor=$_POST["valor"];
        $fechaini=$_POST["fechaini"];
        $fechafin=$_POST["fechafin"];
        $descripcion=$_POST["descripcion"];
        
         //Ejecutanto insercion a la base de datos
        $insertar="INSERT INTO gasto(idrecurso,idtipogasto, valor, fechaini, fechafin, descripcion) 
                    VALUES ($recurso,$tipogasto,$valor,'$fechaini' , '$fechafin', '$descripcion')";
       
       $result=mysqli_query($conexion, $insertar);

        if(!$result){
            echo "<script>alert('Error ');window.location= '../../vistas/admin/gasto.php'</script>";
        }else{
            echo "<script>alert('gasto agregado');window.location= '../../vistas/admin/gasto.php'</script>";
        }
    break;


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