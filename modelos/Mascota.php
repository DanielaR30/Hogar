<?php
    include ("../config/Conexion.php");

        Class Mascota
    {
        public function _construct()
        {

        }

        public function insertar($idraza, $especie, $nombre, $edad, $tamanio, $genero, $ubicacion, $descripcion)
        {
            $sql = "INSERT INTO mascota (idraza, especie, nombre, edad, tamanio, genero, ubicacion, descripcion, condicion)
            VALUES ('$idraza', '$especie', '$nombre', '$edad', '$tamanio', '$genero', '$ubicacion', '$descripcion', '1')";
            return ejecutarConsulta($sql);
        }

        public function editar($idraza, $especie, $nombre, $edad, $tamanio, $genero, $ubicacion, $descripcion, $idmascota)
        {
            $sql = "UPDATE mascota
            SET idraza = '$idraza', especie = '$especie', nombre ='$nombre', edad ='$edad', tamanio ='$tamanio', genero = '$genero', ubicacion = '$ubicacion', descripcion = '$descripcion'
            WHERE idmascota = '$idmascota'";
          //  print_r($sql); die();
            return ejecutarConsulta($sql);
        }

        public function desactivar($idmascota)
        {
            $sql = "UPDATE mascota 
            SET  condicion = '0'
            WHERE idmascota = '$idmascota'";
            return ejecutarConsulta($sql);
        }
        public function activar($idmascota)
        {
            $sql = "UPDATE mascota
            SET condicion = '1'
            WHERE idmascota = '$idmascota'";
            return ejecutarConsulta($sql);
        }
        public function mostrar($idmascota)
        {
            $sql = "SELECT *
            FROM mascota
            WHERE idmascota = '$idmascota'";
            return consultarUnaFila($sql);
        }
        public function listar()
        {
            $sql = "SELECT m.idmascota, r.nombre AS nombreRaza, m.especie, m.nombre, m.edad, m.tamanio, m.genero, m.ubicacion, m.descripcion, m.condicion, m.imagen
            FROM raza r, mascota m
            WHERE r.idraza=m.idraza";
            return ejecutarConsulta($sql);
        }
        public function selectRaza(){
            $sql = "SELECT *
                    FROM raza
                    WHERE condicion='1'";
            return ejecutarConsulta($sql);
        }
    }
      
    
?>