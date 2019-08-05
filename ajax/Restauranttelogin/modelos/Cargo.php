<?php
    include ("../config/Conexion.php");

    Class Cargo
    {
        public function _construct()
        {

        }

        public function insertar($Apellido)
        {
            $sql = "INSERT INTO cargo (Nombre,condicion)
            VALUES ('$Apellido', '1')";
            return ejecutarConsulta($sql);
        }

        public function editar($IdCargo,$Apellido)
        {
            $sql="UPDATE cargo
            SET Nombre='$Apellido'
            WHERE IdCargo='$IdCargo'";
            return ejecutarConsulta($sql);
        }

        public function desactivar( $IdCargo)
        {
            $sql = "UPDATE cargo 
            SET  condicion = '0'
            WHERE IdCargo = ' $IdCargo'";
            return ejecutarConsulta($sql);
        }
        public function activar( $IdCargo)
        {
            $sql = "UPDATE cargo
            SET condicion = '1'
            WHERE IdCargo = ' $IdCargo'";
            return ejecutarConsulta($sql);
        }
    
        public function mostrar( $IdCargo)
        {
            $sql = "SELECT *
            FROM cargo
            WHERE IdCargo = ' $IdCargo'";
            return consultarUnaFila($sql);
        }
        public function listar()
        {
            $sql="SELECT *
            FROM cargo c";
            return ejecutarConsulta($sql);		
        }
            public function select()
        {
            $sql="SELECT *
                FROM cargo
                WHERE condicion='1'";
            return ejecutarConsulta($sql);		
        }
    }
?>