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

    <title>Fotos</title>
    <link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link rel="icon" type="image/png"href="favicon/icon.ico"/>

  </head>
  <body style="background: url(../../public/img/fondo.jpg) no-repeat; 
    background-size: 100% 100%; 
    background-position: fixed;"
    >
 
  <div class="container bg-light mt-5 mb-5 w-70 rounded">
    <div class="row mx-5 my-5">
        

            <h1>Mascotas</h1>
            <button type="button" class="btn btn-light"><a href="mascota.php" style="text-decoration: none;">Agregar</a> </button>
            <hr>
            <?php 
                        $consulta= "SELECT * FROM foto";
                        $resultado= mysqli_query($conexion,$consulta);
                        while ($mostrar=mysqli_fetch_array($resultado)){
                            ?>
                            <div class="col-3">
                                  <div class="card" style="width: 18rem;">
                                  <img class="card-img-top" src="../../public/img/<?php echo $mostrar['imagen']?>" alt=" Card image cap <?php echo $mostrar['nombre']?>" width="100%">
                                      <!-- <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap"> -->
                                  <div class="card-body">
           <h5 class="card-title">Card title</h5> 
   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="mascotali.php" class="btn btn-primary">Ver más</a>
                        <button type="button" class="btn btn-light"><a href="Registro.php" style="text-decoration: none;">Adoptar</a> </button>
                        </div>
                      </div>
            <?php
                        }
                        ?> 
            </div>
            
        </div>            
     </div>
  </div>


  <div class="container bg-ligth mt-5 mb-5 w-70 rounded">
    <div class="row m-5">
        <div class="col-12">
        <h1>Mascotas</h1><button type="button" class="btn btn-light"><a href="mascota.php" style="text-decoration: none;">Agregar</a></button><hr>
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