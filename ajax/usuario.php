<?php
 include("../modelos/Usuario.php");
 $acceso= new Usuario();
 session_start();
 
 switch ($_GET["op"])
 {
     case 'validaracceso':
     $usuario=$_POST["usuario"];
     $clave=$_POST["clave"];

     $resultado=$acceso->validarusuario($usuario,$clave);
     if($fila=$resultado->fetch_object())
     {
         $_SESSION["nombre"]= $fila->nombre;
     }
     //devuelve datos a la variable data de la funcion js
     echo json_encode($fila);
     break;

     case 'salir':
        session_destroy();
        header("location:../vistas/login.html");
     break;
 }

?>