<?php
include '../../config/Conexion.php';
session_start(); 
switch ($_GET["op"]) {
    case 'mascota':
        $raza=$_POST["raza"];
        $refugio=$_POST["refugio"];
        $especie=$_POST["especie"];
        $nombre=$_POST["nombre"];
        $edad=$_POST["edad"];
        $tamanio=$_POST["tamanio"];
        $genero=$_POST["genero"];
        $ubicacion=$_POST["ubicacion"];
        $descripcion=$_POST["descripcion"];
        $condicion=$_POST["condicion"];
        
         //Ejecutanto insercion a la base de datos
        $insertar="INSERT INTO mascota(idraza, idrefugio, especie, nombre, edad, tamanio, genero, ubicacion, descripcion, condicion) 
                    VALUES ('$raza','$refugio','$especie' , '$nombre', '$edad', '$tamanio', '$genero', '$ubicacion', '$descripcion', '1')";
       
       $result=mysqli_query($conexion, $insertar);

        if(!$result){
            echo "<script>alert('Error ');window.location= '../../vistas/admin/mascotali.php'</script>";
        }else{
            echo "<script>window.location= '../../vistas/admin/mascotali.php'</script>";
        }
    break;


    case 'editarmascota':
    $raza=$_POST["raza"];
    $refugio=$_POST["refugio"];
    $especie=$_POST["especie"];
    $nombre=$_POST["nombre"];
    $edad=$_POST["edad"];
    $tamanio=$_POST["tamanio"];
    $genero=$_POST["genero"];
    $ubicacion=$_POST["ubicacion"];
    $descripcion=$_POST["descripcion"];
    $condicion=$_POST["condicion"];

    $editar="UPDATE mascota 
    SET raza='$raza', refugio='$refugio', especie='$especie', nombre='$nombre', edad='$edad', tamanio='$tamanio', genero='$genero', ubicacion='$ubicacion', descripcion='$descripcion', condicion='$condicion'";
    $consulta=mysqli_query($conexion, $editar);
    if(!$editar){
        echo "<script>alert('Error');window.location= '../../vistas/admin/mascotali.php'</script>";
    }else{
        echo "<script>window.location= '../../vistas/admin/mascotali.php'</script>";
        }
break;
     
    case 'foto':
    $mascota=$_POST["mascota"];
    $imagen=$_POST["imagen"];
    
     //Ejecutanto insercion a la base de datos
    $insertar="INSERT INTO foto(idmascota,imagen) 
                VALUES ('$mascota','$imagen')";

    $result=mysqli_query($conexion, $insertar);
    if(!$result){
        echo "<script>alert('Error');window.location= '../../vistas/admin/foto.php'</script>";
    }else{
        echo "<script>alert('Foto agregada');window.location= '../../vistas/admin/foto.php'</script>";
    }
    break;

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