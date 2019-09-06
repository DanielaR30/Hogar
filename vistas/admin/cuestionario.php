<?php
require '../../config/Conexion.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Cuestionario</title>
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
            <h1>Agregar respuestas</h1>
            <form action="../../modelos/admin/Cuestionario.php?op=cuestionario" method="POST">

            <p>
            <label for="">preg</label>
            <input type="text" name="preg1" placeholder="Ingrese su respuesta" required>
            </p>
            <p>
            <label for="">preg</label>
            <input type="text" name="preg2" placeholder="Ingrese su respuesta" required>
            </p>
            <p>
            <label for="">preg</label>
            <input type="text" name="preg3" placeholder="Ingrese su respuesta" required>
            </p>
            <p>
            <label for="">preg</label>
            <input type="text" name="preg4" placeholder="Ingrese la respuesta" required>
            </p>
            <p>
            <label for="">preg</label>
            <input type="text" name="preg5" placeholder="Ingrese la respuesta" required>
            </p>
            <p>
            <label for="">preg</label>
            <input type="text" name="preg6" placeholder="Ingrese su respuesta" required>
            </p>
            <p>
            <label for="">preg</label>
            <input type="text" name="preg7" placeholder="Ingrese su respuesta" required>
            </p>
            <p>
            <label for="">preg</label>
            <input type="text" name="preg8" placeholder="Ingrese su respuesta" required>
            </p>
            <p>
            <label for="">preg</label>
            <input type="text" name="preg9" placeholder="Ingrese la respuesta" required>
            </p>
            <p>
            <label for="">preg</label>
            <input type="text" name="preg10" placeholder="Ingrese la respuesta" required>
            </p>
            <p>
            <label for="">preg</label>
            <input type="text" name="preg11" placeholder="Ingrese su respuesta" required>
            </p>
            <p>
            <label for="">preg</label>
            <input type="text" name="preg12" placeholder="Ingrese su respuesta" required>
            </p>
            <p>
            <label for="">preg</label>
            <input type="text" name="preg13" placeholder="Ingrese su respuesta" required>
            </p>
            <p>
            <label for="">preg</label>
            <input type="text" name="preg14" placeholder="Ingrese la respuesta" required>
            </p>
            <p>
            <label for="">preg</label>
            <input type="text" name="preg15" placeholder="Ingrese la respuesta" required>
            </p>
            <button type="submit">Aceptar</button>
        </form>
		</article>
	</section>
	<footer>
		<div class="foot">
			<div class="relativa2">
				<span>Actividad realizada por: Daniela Roncancio León</span>
				<p>Fotografias de la portada <a href="https://unsplash.com/"><span class="link">Unsplash</span></a></p>
				<a href="http://creativecommons.org/licenses/by-sa/4.0/"><img src="img/footer.png" alt="" width="90" height="30"></a>
			</div>
		</div>
	</footer>
</body>
</html>

