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

    <title>Gasto</title>
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

        <h1>Gasto</h1>
           
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregar">Agregar</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregart">Agregar tipo de gasto</button>



<!-- modal agregar tipogasto -->
<div class="modal fade" id="agregart" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">

          <div class="container bg-light  rounded">
          <div class="row">
          <div class="col mx-5 my-5">
          <h1>Agregar Tipo de gasto</h1>
      <hr>
            <form action="../../modelos/admin/Refugio.php?op=tipogasto" method="POST">

            <p>
            <label for="">Nombre</label>
            <input type="text" name="nombre" placeholder="" required>
            </p>
          
            <button type="submit"  class="btn btn-light">Agregar</button>
            <button type="button" class="btn btn-light"><a href="gasto.php" style="text-decoration: none;">Cancelar</a> </button>
        </form>
            

          </div>            
          </div>
          </div>
      </div>
    </div>
  </div>




<!-- modal agregar -->
<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">

          <div class="container bg-light  rounded">
          <div class="row">
          <div class="col mx-5 my-5">
          <h1>Gasto</h1>
            <form action="../../modelos/admin/Refugio.php?op=gasto" method="POST">
            <p>
            <label for="">Recurso</label>
            <select name="recurso" id="">
            <?php
            $consulta="SELECT * FROM recurso";
            $resultado=mysqli_query($conexion, $consulta);
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>
            <option value="<?php echo $mostrar['idrecurso'] ?>"><?php echo $mostrar['valor'] ?></option>
            <?php
            }
            ?>
            </select>
            </p>

            <p>
            <label for="">tipogasto</label>
            <select name="tipogasto" id="">
            <?php
            $consulta="SELECT * FROM tipogasto";
            $resultado=mysqli_query($conexion, $consulta);
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>
            <option value="<?php echo $mostrar['idtipogasto'] ?>"><?php echo $mostrar['nombre'] ?></option>
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
            <label for="">Fecha inicial</label>
            <input type="date" name="fechaini" placeholder="Ingrese la fecha" required>
            </p>

            <p>
            <label for="">Fecha Final</label>
            <input type="date" name="fechafin" placeholder="Ingrese la fecha" required>
            </p>

            <p>
            <label for="">Descripcion</label>
            <input type="text" name="descripcion" placeholder="agregue una descripcion" required>
            </p>
           
            <button type="submit"  class="btn btn-light">Registrar</button>
            <button type="button" class="btn btn-light"><a href="gasto.php" style="text-decoration: none;">Cancelar</a> </button>
        </form>    

          </div>            
          </div>
          </div>
      </div>
    </div>
  </div>


<!-- listar     -->
<hr>
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th>Recurso</th>
                    <th>Tipo de gasto</th>
                    <th>Valor</th>
                    <th>Fecha de inicio</th>
                    <th>Fecha final</th>
                    <th>Descripción</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                    $consulta= "SELECT * FROM gasto";
                    $resultado= mysqli_query($conexion,$consulta);
                    while ($mostrar=mysqli_fetch_array($resultado)){
                      $idgast=$mostrar['idgasto'];
                      $seleccionar=$conexion->query("SELECT r.valor, t.nombre  FROM recurso r, tipogasto t, gasto g WHERE r.idrecurso=g.idrecurso AND t.idtipogasto=g.idtipogasto AND idgasto=$idgast");
                      $llave=$seleccionar->fetch_assoc();
                      $recurso=$llave['valor'];
                      $tipogasto=$llave['nombre'];
                    ?>
                    <tr>
                        <td><?php echo $recurso?></td>
                        <td><?php echo $tipogasto?></td>
                        <td><?php echo $mostrar['valor']?></td>
                        <td><?php echo $mostrar['fechaini']?></td>
                        <td><?php echo $mostrar['fechafin']?></td>
                        <td><?php echo $mostrar['descripcion']?></td>
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