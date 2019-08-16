<?php
    //Se hace referencia a la conexion de base de datos 
    include ("../config/Conexion.php");
    //Se define la clase categoria
    class Tipogasto
    {
        //Se define el constructor vacio 
        public function __construct()
        {

        }

        //Metodo para insertar registros 
        public function insertar($nombre)
        {
            $sql="INSERT INTO tipogasto (nombre, condicion)
            VALUES ('$nombre','1')";
            return ejecutarConsulta($sql);
        }

        public function editar($idtipogasto, $nombre)
        {
            $sql = "UPDATE tipogasto
            SET nombre = '$nombre'
            WHERE idtipogasto = '$idtipogasto'";
            return ejecutarConsulta($sql);
        }

        public function desactivar($idtipogasto)
        {
            $sql = "UPDATE tipogasto
            SET condicion = '0'
            WHERE idtipogasto = '$idtipogasto'";
            return ejecutarConsulta($sql);
        }

        public function activar($idtipogasto)
        {
            $sql = "UPDATE tipogasto
            SET condicion = '1'
            WHERE idtipogasto = '$idtipogasto'";
            return ejecutarConsulta($sql);
        }

        public function mostrar($idtipogasto)
        {
            $sql = "SELECT *
            FROM tipogasto
            WHERE idtipogasto = '$idtipogasto'"; 
            return consultarUnaFila($sql);
        }
        public function listar()
        {
            $sql = "SELECT *
            FROM tipogasto";
            return ejecutarConsulta($sql);
        }


    }
?>