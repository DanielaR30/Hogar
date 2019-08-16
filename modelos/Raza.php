<?php
    //Se hace referencia a la conexion de base de datos 
    include ("../config/Conexion.php");
    //Se define la clase categoria
    class Raza
    {
        //Se define el constructor vacio 
        public function __construct()
        {

        }

        //Metodo para insertar registros 
        public function insertar($nombre)
        {
            $sql="INSERT INTO raza (nombre, condicion)
            VALUES ('$nombre','1')";
            return ejecutarConsulta($sql);
        }

        public function editar($idraza, $nombre)
        {
            $sql = "UPDATE raza
            SET nombre = '$nombre'
            WHERE idraza = '$idraza'";
            return ejecutarConsulta($sql);
        }

        public function desactivar($idraza)
        {
            $sql = "UPDATE raza
            SET condicion = '0'
            WHERE idraza = '$idraza'";
            return ejecutarConsulta($sql);
        }

        public function activar($idraza)
        {
            $sql = "UPDATE raza
            SET condicion = '1'
            WHERE idraza = '$idraza'";
            return ejecutarConsulta($sql);
        }

        public function mostrar($idraza)
        {
            $sql = "SELECT *
            FROM raza
            WHERE idraza = '$idraza'"; 
            return consultarUnaFila($sql);
        }
        public function listar()
        {
            $sql = "SELECT *
            FROM raza";
            return ejecutarConsulta($sql);
        }


    }
?>