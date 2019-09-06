<?php
include '../../config/Conexion.php';
session_start(); 
switch ($_GET["op"]) {
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
}
?>