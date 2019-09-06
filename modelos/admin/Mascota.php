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
       
        
         //Ejecutanto insercion a la base de datos
        $insertar="INSERT INTO mascota(idraza, idrefugio, especie, nombre, edad, tamanio, genero, ubicacion, descripcion,) 
                    VALUES ('$raza','$refugio','$especie' , '$nombre', '$edad', '$tamanio', '$genero', '$ubicacion', '$descripcion')";
       
       $result=mysqli_query($conexion, $insertar);

        if(!$result){
            echo "<script>alert('Error ');window.location= '../../vistas/admin/mascota.php'</script>";
        }else{
            echo "<script>alert('Mascota agregada');window.location= '../../vistas/admin/mascota.php'</script>";
        }
    break;
}
?>