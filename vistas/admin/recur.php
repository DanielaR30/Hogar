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

    <title>Recurso</title>
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
 
  <div class="container bg-light mt-5 mb-5 w-75 h-75 rounded">
    <div class="row">
        <div class="col mx-5 my-5">

        <h1>Ingresos</h1>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregar">Agregar</button><hr>

<!-- modal agregar -->
           <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-lg">
                 <div class="modal-content">

                     <div class="container bg-light  rounded">
                     <div class="row">
                     <div class="col mx-5 my-5">
                     <h1>Recurso</h1>
           <form action="../../modelos/admin/Refugio.php?op=recurso" method="POST">
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
           <label for="">Valor</label>
           <input type="text" name="valor" placeholder="Ingrese el valor" required>
           </p>
           <p>
           <label for="">Fecha</label>
           <input type="date" name="fecha" placeholder="Infrese la fecha" required>
           </p>

           <button type="submit">Agregar</button>
           <button type="button" class="btn btn-light"><a href="recur.php" style="text-decoration: none;">Cancelar</a></button>
       </form>
                     </div>            
                     </div>
                     </div>
                 </div>
               </div>
             </div>



<!-- listar -->
          
            <table class="table table-borderless">
                <thead>
                <tr>
                   
                    <th>Valor</th>
                    <th>Fecha</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                    $consulta= "SELECT * FROM recurso";
                    $resultado= mysqli_query($conexion,$consulta);
                    while ($mostrar=mysqli_fetch_array($resultado)){
                     
                    ?>
                    <tr>
                       
                        <td><?php echo $mostrar['valor']?></td>
                        <td><?php echo $mostrar['fecha']?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
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