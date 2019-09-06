<?php
require '../../config/Conexion.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Registrese</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link rel="icon" type="image/png"href="favicon/icon.ico"/>
</head>
<body >
	<header>
		<div class="logo"><a href="index.html"><img src="img/logo-bc.png" alt="" width="10"></a></div>
	</header>
	<section class="main">
		<article>
            <h1>Registro</h1>
            <form action="../../modelos/usuario/Usuario.php?op=registro" method="POST">
            <p>
            <label for="">Ciudad</label>
            <select name="ciudad" id="">
            <?php
            $consulta="SELECT * FROM ciudad";
            $resultado=mysqli_query($conexion, $consulta);
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>
            <option value="<?php echo $mostrar['idciudad'] ?>"><?php echo $mostrar['nombre'] ?></option>
            <?php
            }
            ?>
            </select>
            </p>
            <p>
            <label for="">Nombre</label>
            <input type="text" name="nombre" placeholder="Infrese su nombre" required>
            </p>
            <p>
            <label for="">Apellido</label>
            <input type="text" name="apellido" placeholder="Infrese su apellido" required>
            </p>

            <p>
            <label for="">Cedula</label>
            <input type="text" name="cedula" placeholder="Infrese su documento" required>
            </p>

            <p>
            <label for="">Telefono</label>
            <input type="text" name="telefono" placeholder="Infrese su telefono" required>
            </p>
            <p>
            <label for="">Correo</label>
            <input type="email" name="correo" placeholder="Infrese su cooreo" required>
            </p>
            <p>
            <label for="">Contraseña</label>
            <input type="text" name="clave" placeholder="Infrese su clave" required>
            </p>
            <button type="submit">Registrar</button>
        </form>
		</article>
	</section>
	<footer>
		<div class="foot">
			<div class="relativa2">
				<span>Actividad realizada por: DanielaRoncancio</span>
				<p>Fotografias de la portada <a href="https://unsplash.com/"><span class="link">Unsplash</span></a></p>
				<a href="http://creativecommons.org/licenses/by-sa/4.0/"><img src="img/footer.png" alt="" width="90" height="30"></a>
			</div>
		</div>
	</footer>
</body>
</html>