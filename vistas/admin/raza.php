<?php
require '../../config/Conexion.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Tipo de gasto</title>
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
            <h1>Agregar Raza</h1>
            <form action="../../modelos/admin/Tipogasto.php?op=raza" method="POST">

            <p>
            <label for="">Nombre</label>
            <input type="text" name="nombre" placeholder="Ingrese la raza" required>
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