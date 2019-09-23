<?php
require '../../config/Conexion.php';
require 'header.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Servicio Médico</title>
  </head>
  <body style="background: url(../../public/img/fondo.jpg) no-repeat; 
    background-attachment: fixed;
    background-size: cover;
    background-position: center center;
    height: 800px; 
    background-position: fixed;">

<br> <br> <br> <br>
 
  <div class="container bg-light mt-5 mb-5 w-50 rounded">
    <div class="row">
        <div class="col mx-5 my-5">

        <h1>Iniciar sesión</h1>
        <button type="button" class="btn btn-light"><a href="Registro.php" style="text-decoration: none;">Registrarse</a> </button>
            <form action="../../modelos/admin/Usuario.php?op=ingreso" method="POST">
            <div class="form-group">
                      <input type="text" class="form-control" id="correo" name="correo" placeholder="correo">
                      <!-- <span class="fa fa-user form-control-feedback"></span> -->
                    </div>
                    <div class="form-group ">
                      <input type="password" Class="form-control" id="clave" name="clave" placeholder="Contraseña">
                      <!-- <span class="fa fa-key form-control-feedback"></span> -->
                    </div>
                    <div class="row">
                      <div class="col-xs-8">
                        
                      </div><!-- /.col -->
                      <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                      </div><!-- /.col -->
                    </div>



          

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
