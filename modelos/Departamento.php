<?php
    //Se hace referencia a la conexion de base de datos 
    include ("../config/Conexion.php");
    //Se define la clase categoria
    class Departamento
    {
        //Se define el constructor vacio 
        public function __construct()
        {

        }

        //Metodo para insertar registros 
        public function insertar($nombre)
        {
            $sql="INSERT INTO departamento (nombre, condicion)
            VALUES ('$nombre','1')";
            return ejecutarConsulta($sql);
        }

        public function editar($iddepartamento, $nombre)
        {
            $sql = "UPDATE departamento
            SET nombre = '$nombre'
            WHERE iddepartamento = '$iddepartamento'";
            return ejecutarConsulta($sql);
        }

        public function desactivar($iddepartamento)
        {
            $sql = "UPDATE departamento
            SET condicion = '0'
            WHERE iddepartamento = '$iddepartamento'";
            return ejecutarConsulta($sql);
        }

        public function activar($iddepartamento)
        {
            $sql = "UPDATE departamento
            SET condicion = '1'
            WHERE iddepartamento = '$iddepartamento'";
            return ejecutarConsulta($sql);
        }

        public function mostrar($iddepartamento)
        {
            $sql = "SELECT *
            FROM departamento
            WHERE iddepartamento = '$iddepartamento'"; 
            return consultarUnaFila($sql);
        }
        public function listar()
        {
            $sql = "SELECT *
            FROM departamento";
            return ejecutarConsulta($sql);
        }


    }
?>