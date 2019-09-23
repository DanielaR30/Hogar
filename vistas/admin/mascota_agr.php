
<?php
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

    <title>Mascotas</title>
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
 
  <div class="container bg-light mt-5 mb-5 w-50  rounded">
    <div class="row">
        <div class="col mx-5 my-5">

        <h2>Mascota</h2>
        <button type="button" class="btn btn-light"><a href="raza.php" style="text-decoration: none;">Agregar Raza</a> </button>
        <hr>
      
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
            <input type="text" name="descripcion" placeholder="Ingrese una descripcion " required>
            </p>
            
            
           
            <button type="submit">Agregar</button>
            <button type="button" class="btn btn-light"><a href="portfolio.php" style="text-decoration: none;">Cancelar</a> </button>
        </form>        
                 
     
            
        </div>            
     </div>
  </div>
  <br> <br> <br>
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
