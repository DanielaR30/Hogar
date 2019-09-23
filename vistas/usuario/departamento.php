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

    <title>Departamento</title>
  </head>
  <body style="background: url(../../public/img/fondoo.jpg) no-repeat; 
    background-attachment: fixed;
    background-size: cover;
    background-position: center center;
    height: 800px; 
    background-position: fixed;">

<br> <br> <br> <br>

 
  <div class="container bg-light mt-5 mb-5 w-50 rounded">
    <div class="row">
        <div class="col mx-5 my-5">

        <h1>Seleccionar Departamento</h1>
        <hr>
            <form action="../../modelos/admin/Usuario.php?op=departamento" method="POST">
            <?php

$tsDepartamentos = array( 
  1 => 'Amazonas', 
  2 => 'Antioquia', 
  3 => 'Arauca', 
  4 => 'Atlántico', 
  5 => 'Bolívar', 
  6 => 'Boyacá', 
  7 => 'Caldas', 
  8 => 'Caquetá', 
  9 => 'Casanare', 
  10 => 'Cauca', 
  11 => 'Cesar', 
  12 => 'Choco', 
  13 => 'Córdoba', 
  14 => 'Cundinamarca', 
  15 => 'Guainía', 
  16 => 'Guajira', 
  17 => 'Guaviare', 
  18 => 'Huila', 
  19 => 'Magdalena', 
  20 => 'Meta', 
  21 => 'N Santander', 
  22 => 'Nariño', 
  23 => 'Putumayo', 
  24 => 'Quindío', 
  25 => 'Risaralda', 
  26 => 'San Andrés', 
  27 => 'Santander', 
  28 => 'Sucre', 
  29 => 'Tolima', 
  30 => 'Valle Del Cauca', 
  31 => 'Vaupés', 
  32 => 'Vichada', 


); 

?>
<p>
<label for="">Nombre</label>
<select name="nombre"> 
<?php 
foreach($tsDepartamentos as $key => $departamento) {             
    echo '<option value="'.$departamento.'">'.$departamento.'</option>'."n";                 
} 
?> 
</select>
</p>
         
            <button type="submit">Aceptar</button>
        </form>
            
        </div>            
     </div>
  </div>
  <br> <br> <br> <br>   <br>
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
