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

    <title>Refugio</title>
  </head>
  <body style="background: url(../../public/img/fondo.jpg) no-repeat; 
    background-size: 100% 100%; 
    background-position: fixed;"
    >
 
  <div class="container bg-light mt-5 mb-5 w-50 rounded">
    <div class="row">
        <div class="col mx-5 my-5">

        <h1>Refugio</h1>
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Capacidad</th>
                    <th>mascotas</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                    $consulta= "SELECT * FROM refugio";
                    $resultado= mysqli_query($conexion,$consulta);
                    while ($mostrar=mysqli_fetch_array($resultado)){
                    ?>
                    <tr>
                        <td><?php echo $mostrar['nombre']?></td>
                        <td><?php echo $mostrar['direccion']?></td>
                        <td><?php echo $mostrar['telefono']?></td>
                        <td><?php echo $mostrar['capacidad']?></td>
                        <td> <?php
                                                               $conteo = 0;
                                                                $consultando = $conexion->query("SELECT COUNT(m.idmascota) as conteo 
                                                                                                 FROM refugio r, mascota m 
                                                                                                  WHERE r.idrefugio=m.idrefugio");
                                                                $consulta = $consultando->fetch_assoc();
                                                                $conteo = $consulta["conteo"];
                                                                if ($conteo > 100) {
                                                                    echo 'sin cupo';
                                                                } else {
                                                                    echo $conteo;
                                                                } ?> 
                                                                </td>
                        
                        <td style="padding: 10px; text-align: center">
                        <button type="button" class="btn" data-toggle="modal" data-target="#edit<?php echo $mostrar['idrefugio'] ?>"><i class="fas fa-pen"></i></button>
                        
                     </td> 
                  </tr>
                 
               <!-- Modal edit -->
                    <div class="modal fade" id="edit<?php echo $mostrar['idrefugio'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                              <label for="">Nombre</label>
                              <input type="text"  value="<?php echo $mostrar['fecha'] ?>" name="nombre" required>
                              </p>
                              <p>
                              <label for="">Direccion</label>
                              <input type="text" value="<?php echo $mostrar['direcciom'] ?>" name="direccion"  required>
                              </p>
                              <p>
                              <label for="">Teléfono</label>
                              <input type="text" value="<?php echo $mostrar['tratamiento'] ?>" name="telefono"  required>
                              </p>
                              <p>
                              <label for="">Capacidad</label>
                              <input type="text" value="<?php echo $mostrar['tratamiento'] ?>" name="capacidad"  required>
                              </p>
                             
                              <div class="col-12 text-right"><button type="button" class="btn btn-secondary mr-3" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-danger">Guardar</button></div>
                              </div>
                              </form>
                              <?
                             
                              ?>
                          
                          </div>
                      </div>
                  </div>
                    <?php }?>
                </tbody>
            </table>
            
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