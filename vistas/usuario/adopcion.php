<?php
session_start();
if(!isset($_SESSION["nombre"]))
{
  header("location:login.php");
}
else{
require '../../config/Conexion.php'
//require 'header.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Adopción</title>
  </head>
  <body style="background: url(../img/fondo.jpg) no-repeat; 
    background-size: 100% 100%; 
    background-position: fixed;"
    >
 
  <div class="container bg-light mt-5 mb-5 w-50 rounded">
    <div class="row">
        <div class="col mx-5 my-5">

        <h1>Adopcion</h1>
        <hr>
            <form action="../../modelos/usuario/Adopcion.php?op=adopcion" method="POST">
            <p>
            <label for="">persona</label>
            <select name="persona" id="">
            <?php
            $consulta="SELECT * FROM persona";
            $resultado=mysqli_query($conexion, $consulta);
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>
            <option value="<?php echo $mostrar['idpersona'] ?>"><?php echo $mostrar['nombre'] ?></option>
            <?php
            }
            ?>
            </select>
            </p>
            <p>
            <label for="">Fecha</label>
            <input type="date" name="fecha" placeholder="" required>
            </p>
            <p>
            <label for="">Observación</label>
            <input type="text" name="observacion" placeholder="Agregue una observacion" required>
            </p>

            <button type="submit">Agregar</button>
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


<?php
}
?>


 