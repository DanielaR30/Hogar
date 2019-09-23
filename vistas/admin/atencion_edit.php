
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
    <title>Atencion Medica</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  	
    
  </head>
  <body style="background: url(../../public/img/fondoo.jpg) no-repeat; 
    background-attachment: fixed;
    background-size: cover;
    background-position: center center;
    height: 800px; 
    background-position: fixed;">

<br> <br> <br> <br>
  
  <div class="container bg-light mt-5 mb-5 w-70 rounded">
     <div class="row">
      <div class="col mx-5 my-5">
        <h1>Atención Médica</h1>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregar">Agregar</button>
          <button type="button" class="btn btn-light"><a href="veterinaria.php" style="text-decoration: none;">Veterinarias</a> </button> <hr>

            <!-- modal agregar -->
            <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                  <div class="modal-content">

                      <div class="container bg-light  rounded">
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
                                  <button type="button" class="btn btn-light"><a href="atencion_edit.php" style="text-decoration: none;">Cancelar</a></button>
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
                    <th>Veterinaria</th>
                    <th>Mascota</th>
                    <th>Fecha</th>
                    <th>Diagnóstico</th>
                    <th>Tratamiento</th>
                    <th>opciones</th>
                 </tr>
               </thead>
               <tbody>
                    <?php 
                          $consulta="SELECT * FROM atencionmedica";
                          $resultado= mysqli_query($conexion,$consulta);
                          while ($mostrar=mysqli_fetch_array($resultado)){
                            $idatencion=$mostrar['idatencionmedica'];
                            $seleccionar=$conexion->query("SELECT m.nombre, v.nombre as veterinaria FROM mascota m, veterinaria v, atencionmedica a WHERE a.idmascota=m.idmascota AND a.idveterinaria=v.idveterinaria AND idatencionmedica=$idatencion");
                            $llave=$seleccionar->fetch_assoc();
                            $mascota=$llave['nombre'];
                            $veterinaria=$llave['veterinaria'];
                    ?>
                  <tr>
                     <td><?php echo $veterinaria?></td>
                     <td><?php echo $mascota?></td>
                     <td><?php echo $mostrar['fecha']?></td>
                     <td><?php echo $mostrar['diagnostico']?></td>
                     <td><?php echo $mostrar['tratamiento']?></td>
                     <td style="padding: 10px; text-align: center">
                        <button type="button" class="btn" data-toggle="modal" data-target="#edit<?php echo $mostrar['idatencionmedica'] ?>"><i class="fas fa-pen"></i></button>
                     </td> 
                  </tr>
                  
                          <?php } ?>
                  </tbody>
                </table>

                <?php
                $seleccionando="SELECT * FROM atencionmedica";
                $result= mysqli_query($conexion,$seleccionando);
                while ($ver=mysqli_fetch_array($result)){
                  ?>

                  <!-- Modal edit -->
                  <div class="modal fade" id="edit<?php echo $ver['idatencionmedica'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-full-height modal-right modal-notify modal-info" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                      
                                <p class="heading lead">Editar</p>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="white-text">×</span></button>
                    </div>
                              <!--Body-->
                              <form action="../../Modelos/Admin.php?op=editaratencionmedica" method="POST">
                                  <div class="row modal-body">

                                  <p>
                                    <label for="">Veterinaria</label>
                                    <select name="veterinaria" id="">
                                    <?php
                                    $consulta="SELECT * FROM veterinaria";
                                    $resultado=mysqli_query($conexion, $consulta);
                                    while($mostrar=mysqli_fetch_array($resultado)){
                                    ?>
                                      <option value="<?php echo $mostrar['idveterinaria'] ?>"><?php echo $mostrar['nombre'] ?></option>
                                    <?php  } ?>
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
                              <input type="date"  value="<?php echo $ver['fecha'] ?>" name="fecha" required>
                              </p>
                              <p>
                              <label for="">Diagnostico</label>
                              <input type="text" value="<?php echo $ver['diagnostico'] ?>" name="diagnostico"  required>
                              </p>
                              <p>
                              <label for="">Tratamiento</label>
                              <input type="text" value="<?php echo $ver['tratamiento'] ?>" name="tratamiento"  required>
                              </p>
                              <div class="col-12 text-right"><button type="button" class="btn btn-secondary mr-3" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-primary">Guardar</button></div>
                              </div>
                              </form>
                              
                          
                          </div>
                      </div>
                  </div>
                                <?php } ?>



                </div>
                </div>
              </div>


          <script src="../js/jquery-3.2.1.slim.min.js"></script>
          <script src="../js/popper.min.js"></script>   
          <script src="../js/bootstrap.min.js"></script>     
          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
         
          <br> <br> <br> <br>  
         <?php
require 'footer.php';
?>
  </body>
</html>