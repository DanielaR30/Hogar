<?php
session_start();
if(!isset($_SESSION["nombre"]))
{
  header("location:login.php");
}
else{


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Cuestionario</title>
    <link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link rel="icon" type="image/png"href="favicon/icon.ico"/>

  </head>
  <body style="background: url(../../public/img/fondoo.jpg) no-repeat; 
    background-attachment: fixed;
    background-size: cover;
    background-position: center center;
    height: 800px; 
    background-position: fixed;">

<br> <br> <br> <br>
 
  <div class="container bg-light mt-5 mb-5 w-75  rounded">
    <div class="row">
        <div class="col mx-5 my-5">

        <h1>Agregar respuestas</h1>
        <hr>
            <form action="../../modelos/admin/Usuario.php?op=cuestionario" method="POST">

            <p>
            <label for="">Ocupación</label>
            <input type="text" name="preg1" placeholder="Ingrese su respuesta" required>
            </p>
            <p>
            <label for="">¿Vive en casa propia o arriendo?</label>
            <input type="text" name="preg2" placeholder="Ingrese su respuesta" required>
            </p>
            <p>
            <label for="">¿Aceptas los gastos que genera tener un animal de compañia?</label>
            <input type="text" name="preg3" placeholder="Ingrese su respuesta" required>
            </p>
            <p>
            <label for="">¿Cuantas personas viven en su casa?</label>
            <input type="text" name="preg4" placeholder="Ingrese la respuesta" required>
            </p>
            <p>
            <label for="">¿Has tenido mascotas anteriormente?</label>
            <input type="text" name="preg5" placeholder="Ingrese la respuesta" required>
            </p>
            <p>
            <label for="">¿Qué tipo de vivienda tienes?</label>
            <input type="text" name="preg6" placeholder="Ingrese su respuesta" required>
            </p>
            <p>
            <label for="">¿Cuanto tiempo al día permanecerá sola la mascota?</label>
            <input type="text" name="preg7" placeholder="Ingrese su respuesta" required>
            </p>
            <p>
            <label for="">¿quien es la persona que autorizará la adpoción del animal?</label>
            <input type="text" name="preg8" placeholder="Ingrese su respuesta" required>
            </p>
            <p>
            <label for="">¿En que lugar de la casa dormirá el animal?</label>
            <input type="text" name="preg9" placeholder="Ingrese la respuesta" required>
            </p>
            <p>
            <label for="">¿tienes otras mascotas?</label>
            <input type="text" name="preg10" placeholder="Ingrese la respuesta" required>
            </p>
            <p>
            <label for="">¿Por qué razón quieres adotar un animal?</label>
            <input type="text" name="preg11" placeholder="Ingrese su respuesta" required>
            </p>
            <p>
            <label for="">¿que sucedería si se mudara a otra casa o ciudad?</label>
            <input type="text" name="preg12" placeholder="Ingrese su respuesta" required>
            </p>
            <p>
            <label for="">¿Qué sucedería si alguien de su familia resulta alérgico?</label>
            <input type="text" name="preg13" placeholder="Ingrese su respuesta" required>
            </p>
            <p>
            <label for="">¿cuantos crees q son los gastos mensuales para mantener una mascota?</label>
            <input type="text" name="preg14" placeholder="Ingrese la respuesta" required>
            </p>
            <p>
            <label for="">¿Estás conciente de que adoptar un animal es una responsabilidad de 13 a 17 años?</label>
            <input type="text" name="preg15" placeholder="Ingrese la respuesta" required>
            </p>
            <button type="submit">Aceptar</button>
            <button type="button" class="btn btn-light"><a href="portfolio.php" style="text-decoration: none;">Cancelar</a> </button>
        </form>
        </div>            
     </div>
  </div>

  <br> <br> <br> <br>  
         <?php
require 'footer.php';
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
 
</html>
 
<?php
}
?>