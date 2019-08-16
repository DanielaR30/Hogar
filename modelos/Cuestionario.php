<?php
    //Se hace referencia a la conexion de base de datos 
    include ("../config/Conexion.php");
    //Se define la clase categoria
    class Cuestionario
    {
        //Se define el constructor vacio 
        public function __construct()
        {

        }

        //Metodo para insertar registros 
        public function insertar($preg1,$preg2,$preg3,$preg4,$preg5,$preg6,$preg7,$preg8,$preg9,$preg10,$preg11,$preg12,$preg13,$preg14,$preg15)
        
        {
            $sql="INSERT INTO cuestionario (preg1,preg2,preg3,preg4,preg5,preg6,preg7,preg8,preg9,preg10,preg11,preg12,preg13,preg14,$preg15, condicion)
            VALUES ('$preg1','$preg2','$preg3','$preg4','$preg5','$preg6','$preg7','$preg8','$preg9','$preg10','$preg11','$preg12','$preg13','$preg14','$preg15' ,'1')";
            return ejecutarConsulta($sql);
        }

        public function editar($idcuestionario, $nombre)
        {
            $sql = "UPDATE cuestionario
            SET preg1 = '$preg1',
            preg2 = '$preg2',
            preg3 = '$preg3',
            preg4 = '$preg4',
            preg5 = '$preg5',
            preg6 = '$preg6',
            preg7 = '$preg7',
            preg8 = '$preg8',
            preg9 = '$preg9',
            preg10 = '$preg10',
            preg11 = '$preg11',
            preg12 = '$preg12',
            preg13 = '$preg13',
            preg14 = '$preg14',
            preg15 = '$preg15'
            WHERE idcuestionario = '$idcuestionario'";
            return ejecutarConsulta($sql);
        }

        public function desactivar($idcuestionario)
        {
            $sql = "UPDATE cuestionario
            SET condicion = '0'
            WHERE idcuestionario = '$idcuestionario'";
            return ejecutarConsulta($sql);
        }

        public function activar($idcuestionario)
        {
            $sql = "UPDATE cuestionario
            SET condicion = '1'
            WHERE idcuestionario = '$idcuestionario'";
            return ejecutarConsulta($sql);
        }

        public function mostrar($idcuestionario)
        {
            $sql = "SELECT *
            FROM cuestionario
            WHERE idcuestionario = '$idcuestionario'"; 
            return consultarUnaFila($sql);
        }
        public function listar()
        {
            $sql = "SELECT *
            FROM cuestionario";
            return ejecutarConsulta($sql);
        }


    }
?>