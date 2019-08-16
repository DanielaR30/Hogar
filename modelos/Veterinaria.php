<?php
    //Se hace referencia a la conexion de base de datos 
    include ("../config/Conexion.php");
    //Se define la clase categoria
    class Veterinaria
    {
        //Se define el constructor vacio 
        public function __construct()
        {

        }

        //Metodo para insertar registros 
        public function insertar($nombre,$funcionario)
        {
            $sql="INSERT INTO veterinaria (nombre, funcionario, condicion)
            VALUES ('$nombre', '$funcionario','1')";
            return ejecutarConsulta($sql);
        }

        public function editar($idveterinaria, $nombre)
        {
            $sql = "UPDATE veterinaria
            SET nombre = '$nombre', funcionario = '$funcionario'
            WHERE idveterinaria = '$idveterinaria'";
            return ejecutarConsulta($sql);
        }

        public function desactivar($idveterinaria)
        {
            $sql = "UPDATE veterinaria
            SET condicion = '0'
            WHERE idveterinaria = '$idveterinaria'";
            return ejecutarConsulta($sql);
        }

        public function activar($idveterinaria)
        {
            $sql = "UPDATE veterinaria
            SET condicion = '1'
            WHERE idveterinaria = '$idveterinaria'";
            return ejecutarConsulta($sql);
        }

        public function mostrar($idveterinaria)
        {
            $sql = "SELECT *
            FROM veterinaria
            WHERE idveterinaria = '$idveterinaria'"; 
            return consultarUnaFila($sql);
        }
        public function listar()
        {
            $sql = "SELECT *
            FROM veterinaria v";
            return ejecutarConsulta($sql);
        }


    }
?>