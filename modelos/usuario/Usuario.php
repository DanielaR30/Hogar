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
    case 'ingreso':
        $usuario=$_POST["usuario"];
        $clave=$_POST["clave"];
        $validarusuario="SELECT nombre,rol,idusuario FROM usuario WHERE email='$usuario' AND contrasenia='$clave'";
        $resultado=mysqli_query($conexion, $validarusuario);
        $fila=mysqli_num_rows($resultado);
        if($fila=$resultado->fetch_object()){
            $_SESSION["Nombre"]=$fila->nombre;
            $_SESSION["rol"]=$fila->rol;
            $_SESSION["idusuario"]=$fila->idusuario;
            echo json_encode($fila);
        }else{
            echo'<script>alert("Error")</script>';
        }
        if(($_SESSION["rol"])=="cliente"){
            header('Location: ../vistas/Usuario/Index.php');
        }else{
            header('Location: ../vistas/Administrador/Index.php');
        }
    break;
    case 'ingresoEmpresa':
        $usuario=$_POST["usuario"];
        $clave=$_POST["clave"];
        $validarusuario="SELECT nombre, tipo, idempresa FROM empresa WHERE correo='$usuario' AND contrasenia='$clave'";
        $resultado=mysqli_query($conexion, $validarusuario);
        $fila=mysqli_num_rows($resultado);
        if($fila=$resultado->fetch_object()){
            $_SESSION["tipo"]=$fila->tipo;
            $_SESSION["idempresa"]=$fila->idempresa;
            header('Location: ../vistas/Empresa/Index.php');
            echo json_encode($fila);
        }else{
            echo "Fallo";
            // echo "<script>alert('Datos Incorrectos');window.location= '../vistas/Empresa/Login.php'</script>";
        }
    break;
    case 'salirEmpresa':
        session_destroy();
        header("Location: ../vistas/Empresa/Login.php");
    break;
    case 'salir':
        session_destroy();
        header("Location: ../vistas/Shared/Login.php");
    break;
}

?>