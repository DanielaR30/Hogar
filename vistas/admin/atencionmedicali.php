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

    <title>Atencion Medica</title>
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
            <button type="button" class="btn btn-light"><a href="atencionmedica.php" style="text-decoration: none;">agregar</a> </button>
            <hr>
            <table>
                <thead>
                <tr>
                    <th>Veterinaria</th>
                    <th>Mascota</th>
                    <th>Fecha</th>
                    <th>Diagnóstico</th>
                    <th>Tratamiento</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                    $consulta= "SELECT * FROM atencionmedica";
                    $resultado= mysqli_query($conexion,$consulta);
                    while ($mostrar=mysqli_fetch_array($resultado)){
                    ?>
                    <tr>
                        <td><?php echo $mostrar['idveterinaria']?></td>
                        <td><?php echo $mostrar['idmascota']?></td>
                        <td><?php echo $mostrar['fecha']?></td>
                        <td><?php echo $mostrar['diagnostico']?></td>
                        <td><?php echo $mostrar['tratamiento']?></td>
                        
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        </div>
        </div>
	<footer>
		<div class="foot">
			<div class="relativa2">
				<span>Actividad realizada por: Daniela Roncancio</span>
				<p>Fotografias de la portada <a href="https://unsplash.com/"><span class="link">Unsplash</span></a></p>
				<a href="http://creativecommons.org/licenses/by-sa/4.0/"><img src="img/footer.png" alt="" width="90" height="30"></a>
			</div>
        </div>
 </div>

	</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>