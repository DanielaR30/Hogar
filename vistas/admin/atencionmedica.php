<?php
require '../../config/Conexion.php'
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Atención médica</title>
    <link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link rel="icon" type="image/png"href="favicon/icon.ico"/>

  </head>
  <body style="background: url(../../public/img/fondo.jpg) no-repeat; 
    background-size: 100% 100%; 
    background-position: fixed;"
    >
 
  <div class="container bg-light mt-5 mb-5 w-50 rounded">
    <div class="row">
        <div class="col mx-5 my-5">

        <h1>Atención Médica</h1>
        <hr>
            <form action="../../modelos/admin/Veterinaria.php?op=atencionmedica" method="POST">
            <p>
            <label for="">Veterinaria</label>
            <select name="veterinaria" id="">
            <?php
            $consulta="SELECT * FROM veterinaria";
            $resultado=mysqli_query($conexion, $consulta);
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>
            <option value="<?php echo $mostrar['idveterinaria'] ?>"><?php echo $mostrar['nombre'] ?></option>
            <?php
            }
            ?>
            </select>
            </p>

            <p>
            <label for="">Mascota</label>
            <select name="mascota" id="">
            <?php
            $consulta="SELECT * FROM mascota";
            $resultado=mysqli_query($conexion, $consulta);
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>
            <option value="<?php echo $mostrar['idmascota'] ?>"><?php echo $mostrar['nombre'] ?></option>
            <?php
            }
            ?>
            </select>
            </p>
            <p>
            <label for="">Fecha</label>
            <input type="date" name="fecha" placeholder="Ingrese la fecha" required>
            </p>
             <p>
            <label for="">Diagnostico</label>
            <input type="text" name="diagnostico" placeholder="agregue un diagnostico" required>
            </p>
            <p>
            <label for="">Tratamiento</label>
            <input type="text" name="tratamiento" placeholder="agregue un tratamiento" required>
            </p>
           
            <button type="submit">Registrar</button>
            <button type="button" class="btn btn-light"><a href="atencionmedicali.php" style="text-decoration: none;">Cancelar</a> </button>
        </form>
            
        </div>            
     </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Atencionmedica</title>
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