<?php 
    //Hacemos referencia a la conexión con la base de datos
    include ("../config/Conexion.php");
    //Definimos la clase: empleado
    Class Empleado
    {
        //Definimos el constructor vacio
        public function __construct()
        {

        }

        //Método para insertar registros
        public function insertar($IdCargo, $Nombre, $Apellido,$Documento, $imagen)
        {
            $sql="INSERT INTO empleado( IdCargo, Nombre, Apellido,Documento, imagen, condicion)
            VALUES ('$IdCargo', '$Nombre', '$Apellido','$Documento', '$imagen','1')";
            return ejecutarConsulta($sql);
        }
        //Método para editar registros
	public function editar($IdEmpleado,$IdCargo, $Nombre, $Apellido, $Documento, $imagen)
	{
		$sql="UPDATE empleado 
		SET  IdCargo='$IdCargo',Nombre='$Nombre',Apellido='$Apellido',Documento='$Documento',imagen='$imagen'
		WHERE IdEmpleado='$IdEmpleado'";
		return ejecutarConsulta($sql);
	}

	//Método para desactivar empleados
	public function desactivar($IdEmpleado)
	{
		$sql="UPDATE empleado 
		SET condicion='0' 
		WHERE IdEmpleado='$IdEmpleado'";
		return ejecutarConsulta($sql);
	}

	//Método para activar categorías
	public function activar($IdEmpleado)
	{
		$sql="UPDATE empleado 
		SET condicion='1' 
		WHERE IdEmpleado='$IdEmpleado'";
		return ejecutarConsulta($sql);
	}

	//Método para mostrar los datos de un registro a modificar
	public function mostrar($IdEmpleado)
	{
		$sql="SELECT * 
		FROM empleado 
		WHERE IdEmpleado='$IdEmpleado'";
		return consultarUnaFila($sql);
	}
	

	//Método para listar los registros
	public function listar()
	{
		$sql="SELECT c.Nombre as nomcargo, e.IdEmpleado,e.IdCargo,e.Nombre,e.Apellido,e.Documento,e.imagen,e.condicion
		FROM cargo c, empleado e
		WHERE c.IdCargo=e.IdCargo";
		return ejecutarConsulta($sql);		
	}

	public function validarusuario($usuario,$clave)
    {
        $sql="SELECT Nombre FROM empleado WHERE usuario='$usuario' and clave='$clave' and condicion='1'";
        return ejecutarConsulta($sql);
    }
	}
	


	
?>