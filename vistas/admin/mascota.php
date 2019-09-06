<?php
require '../../config/Conexion.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Mascota</title>
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
            <h1>Mascota</h1>
            <form action="../../modelos/admin/Mascota.php?op=mascota" method="POST">
        
            <!-- <input type="file" name="imagen" style="border-radius:5px; color:#424141; width: 100%" required> -->
            <p>
            <label for="">Raza</label>
            <select name="raza" id="">
            <?php
            $consulta="SELECT * FROM raza";
            $resultado=mysqli_query($conexion, $consulta);
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>
            <option value="<?php echo $mostrar['idraza'] ?>"><?php echo $mostrar['nombre'] ?></option>
            <?php
            }
            ?>
            </select>
            </p>
           
            <p>
            <label for="">Refugio</label>
            <select name="refugio" id="">
            <?php
            $consulta="SELECT * FROM refugio";
            $resultado=mysqli_query($conexion, $consulta);
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>
            <option value="<?php echo $mostrar['idrefugio'] ?>"><?php echo $mostrar['nombre'] ?></option>
            <?php
            }
            ?>
            </select>
            </p>
            <p>
            <label for="">Especie</label>
            <input type="text" name="especie" placeholder="Ingrese la especie" required>
            </p>
            <p>
            <label for="">Nombre</label>
            <input type="text" name="nombre" placeholder="Ingrese su nombre" required>
            </p>
            <p>
            <label for="">Edad</label>
            <input type="text" name="edad" placeholder="Edad en meses" required>
            </p>

            <p>
            <label for="">Tamaño</label>
            <input type="text" name="tamanio" placeholder="Ingrese el tamanio" required>
            </p>

            <p>
            <label for="">Genero</label>
            <input type="text" name="genero" placeholder="Ingrese el genero" required>
            </p>
            <p>
            <label for="">Ubicación</label>
            <input type="text" name="ubicacion" placeholder="Ingrese la ubicacion" required>
            </p>
            <p>
            <label for="">Descripción</label>
            <input type="text" name="clave" placeholder="Ingrese una descripcion " required>
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