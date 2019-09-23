<?php
include '../../config/Conexion.php';
session_start(); 
switch ($_GET["op"]) {
    case 'registro':
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $email=$_POST["correo"];
        $telefono=$_POST["telefono"];
        $documento=$_POST["cedula"];
        $clave=$_POST["clave"];
        $ciudad=$_POST["ciudad"];
        
         //Ejecutanto insercion a la base de datos
        $insertar="INSERT INTO persona(idciudad, rol, nombre, apellido, documento, telefono, correo, clave) 
                    VALUES ('$ciudad' ,'usuario', '$nombre', '$apellido', '$documento', '$telefono', '$email', '$clave')";



        //Validando usuario existente
        $verificarUsuario=mysqli_query($conexion, "SELECT * FROM persona WHERE correo='$email'");
        if (mysqli_num_rows($verificarUsuario)>0){
            echo "<script>alert('Este correo ya se encuentra registrado');window.location= '../../vistas/usuario/Registro.php'</script>";
        }else{
            $resultado = mysqli_query($conexion, $insertar);
            if (!$resultado){
                echo "<script>alert('Error al registrarse');window.location= '../../vistas/usuario/Registro.php'</script>";
            }else{
                echo "<script>alert('Usuario registrado');window.location= '../../vistas/usuario/Registro.php'</script>";
            }
        }

    break;

        
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
        echo "<script>window.location= '../../vistas/admin/ciudad.php'</script>";
    }
    break;

        case 'departamento':
        $nombre=$_POST["nombre"];
    
        //Ejecutanto insercion a la base de datos
        $insertar="INSERT INTO departamento( nombre) 
                    VALUES ('$nombre')";

    $result=mysqli_query($conexion, $insertar);
    if(!$result){
    echo "<script>alert('Error');window.location= '../../vistas/admin/departamento.php'</script>";
    }else{
    echo "<script>alert('Departamento agregado');window.location= '../../vistas/admin/departamento.php'</script>";
    }
    break;

    case 'ingreso':
        $usuario=$_POST["correo"];
        $clave=$_POST["clave"];
        $validarusuario="SELECT nombre,rol,idpersona FROM persona WHERE correo='$usuario' AND clave='$clave'";
        $resultado=mysqli_query($conexion, $validarusuario);
        $fila=mysqli_num_rows($resultado);
        if($fila=$resultado->fetch_object()){
            $_SESSION["Nombre"]=$fila->nombre;
            $_SESSION["rol"]=$fila->rol;
            $_SESSION["idpersona"]=$fila->idpersona;
            echo json_encode($fila);
        }else{
            echo'<script>alert("Error")</script>';
        }
        if(($_SESSION["rol"])=="usuario"){
            header('Location: ../vistas/Usuario/Index.php');
        }else{
            header('Location: ../vistas/Administrador/Index.php');
        }
    break;

    case 'salir':
        session_destroy();
        header("Location: ../../vistas/admin/Login.php");
    break;

    

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
    $insertar="INSERT INTO cuestionario (preg1,preg2,preg3,preg4,preg5,preg6,preg7,preg8,preg9,preg10,preg11,preg12,preg13,preg14, preg15)
            VALUES ('$preg1','$preg2','$preg3','$preg4','$preg5','$preg6','$preg7','$preg8','$preg9','$preg10','$preg11','$preg12','$preg13','$preg14','$preg15')";
    
    $result=mysqli_query($conexion, $insertar);
    if(!$result){
        echo "<script>alert('Error');window.location= '../../vistas/admin/cuestionario.php'</script>";
    }else{
        echo "<script>alert('Cuestionario enviado ');window.location= '../../vistas/admin/cuestioonario.php'</script>";
    }

    break;  

    case 'adopcion':
        $persona=$_POST["persona"];
        $fecha=$_POST["fecha"];
        $observacion=$_POST["observacion"];
       
        
         //Ejecutanto insercion a la base de datos
        $insertar="INSERT INTO adopcion(idpersona, fecha, observacion) 
                    VALUES ('$persona' ,'$fecha', '$observacion')";

$result=mysqli_query($conexion, $insertar);
        if(!$result){
            echo "<script>alert('Error ');window.location= '../../vistas/usuario/adopcion.php'</script>";
        }else{
            echo "<script>alert('Adopción Solicitada');window.location= '../../vistas/usuario/adopcion.php'</script>";
        }
      

    break;
}



?>