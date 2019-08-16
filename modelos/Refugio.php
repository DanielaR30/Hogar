<?php
    //Se hace referencia a la conexion de base de datos 
    include ("../config/Conexion.php");
    //Se define la clase categoria
    class Refugio
    {
        //Se define el constructor vacio 
        public function __construct()
        {

        }

        //Metodo para insertar registros 
        public function insertar($nombre,$direccion,$telefono,$capacidad)
        {
            $sql="INSERT INTO refugio (nombre,direccion,telefono,capacidad, condicion)
            VALUES ('$nombre','$direccion','$telefono','$capacidad','1')";
            return ejecutarConsulta($sql);
        }

        public function editar($idrefugio, $nombre)
        {
            $sql = "UPDATE refugio
            SET nombre = '$nombre', direccion = '$direccion', telefono = '$telefono', capacidad = '$capacidad'
            WHERE idrefugio = '$idrefugio'";
            return ejecutarConsulta($sql);
        }

        public function desactivar($idrefugio)
        {
            $sql = "UPDATE refugio
            SET condicion = '0'
            WHERE idrefugio = '$idrefugio'";
            return ejecutarConsulta($sql);
        }

        public function activar($idrefugio)
        {
            $sql = "UPDATE refugio
            SET condicion = '1'
            WHERE idrefugio = '$idrefugio'";
            return ejecutarConsulta($sql);
        }

        public function mostrar($idrefugio)
        {
            $sql = "SELECT *
            FROM refugio
            WHERE idrefugio = '$idrefugio'"; 
            return consultarUnaFila($sql);
        }
        public function listar()
        {
            $sql = "SELECT *
            FROM refugio";
            return ejecutarConsulta($sql);
        }


    }
?>