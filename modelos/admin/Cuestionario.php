<?php
include '../../config/Conexion.php';
session_start(); 
switch ($_GET["op"]) {
    case 'cuestionario':
        $preg1=$_POST["preg1"];
        $preg2=$_POST["preg2"];
        $preg3=$_POST["preg3"]; 
        $preg4=$_POST["preg4"];
        $preg5=$_POST["preg5"];  
        $preg6=$_POST["preg6"];
        $preg7=$_POST["preg7"];
        $preg8=$_POST["preg8"]; 
        $preg9=$_POST["preg9"];
        $preg10=$_POST["preg10"]; 
        $preg11=$_POST["preg11"];
        $preg12=$_POST["preg12"];
        $preg13=$_POST["preg13"]; 
        $preg14=$_POST["preg14"];
        $preg15=$_POST["preg15"]; 

         //Ejecutanto insercion a la base de datos
        $insertar="INSERT INTO cuestionario (idcuestionario, preg1,preg2,preg3,preg4,preg5,preg6,preg7,preg8,preg9,preg10,preg11,preg12,preg13,preg14, preg15)
                VALUES ('$preg1','$preg2','$preg3','$preg4','$preg5','$preg6','$preg7','$preg8','$preg9','$preg10','$preg11','$preg12','$preg13','$preg14','$preg15')";
        
        $result=mysqli_query($conexion, $insertar);
        if(!$result){
            echo "<script>alert('Error');window.location= '../../vistas/admin/cuestionario.php'</script>";
        }else{
            echo "<script>alert('Cuestionario enviado ');window.location= '../../vistas/admin/cuestioonario.php'</script>";
        }
 
        break;     
}
?>