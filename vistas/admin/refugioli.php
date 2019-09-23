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

    <title>Refugio</title>
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
        <div class="col mx-5 my-5 py-5">

        <h1>Refugio</h1>
        <?php 
                    $consulta= "SELECT * FROM refugio";
                    $resultado= mysqli_query($conexion,$consulta);
                    while ($mostrar=mysqli_fetch_array($resultado)){
                    ?>
            <table class=" table-borderless">
              
           

                <tbody>
                  
                 <tr>
                    <th>Opciones</th> 
                    <td style="padding: 10px; text-align: center">
                        <button type="button" class="btn" data-toggle="modal" data-target="#edita<?php echo $mostrar['idrefugio'] ?>"><i class="fas fa-pen"></i></button>
                     </td> 
                 </tr>

                 <tr> <th>Nombre</th>
                 <td><?php echo $mostrar['nombre']?></td></tr>  
                   <tr><th>Dirección</th>
                   <td><?php echo $mostrar['direccion']?></td> </tr> 
                    <tr><th>Teléfono</th>
                    <td><?php echo $mostrar['telefono']?></td> </tr>
                   <tr><th>Capacidad</th>
                   <td><?php echo $mostrar['capacidad']?></td> </tr> 
                   <tr><th>mascotas</th>
                   
                   <td> <?php
                                                               $conteo = 0;
                                                                $consultando = $conexion->query("SELECT COUNT(m.idmascota) as conteo 
                                                                                                 FROM refugio r, mascota m 
                                                                                                  WHERE r.idrefugio=m.idrefugio");
                                                                $consulta = $consultando->fetch_assoc();
                                                                $conteo = $consulta["conteo"];
                                                                if ($conteo >= 100) {
                                                                    echo 'sin cupo';
                                                                } else {
                                                                    echo $conteo;
                                                                } ?> 
                                                                </td>
                        </tr> 
                   


                 
               <!-- Modal edit -->
              
                    <div class="modal fade" id="edita<?php echo $mostrar['idrefugio'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-full-height modal-right modal-notify modal-info" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                      
                                <p class="heading lead">Editar</p>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="white-text">×</span></button>
                    </div>
                              <!--Body-->
                              <form action="../../modelos/admin/Refugio.php?op=editarrefugio" method="POST">
                                  <div class="row modal-body">

                              <p>
                              <label for="">Nombre</label>
                              <input type="text"  value="<?php echo $mostrar['nombre'] ?>" name="nombre" required>
                              </p>
                              <p>
                              <label for="">Direccion</label>
                              <input type="text" value="<?php echo $mostrar['direccion'] ?>" name="direccion"  required>
                              </p>
                              <p>
                              <label for="">Teléfono</label>
                              <input type="text" value="<?php echo $mostrar['telefono'] ?>" name="telefono"  required>
                              </p>
                              <p>
                              <label for="">Capacidad</label>
                              <input type="text" value="<?php echo $mostrar['capacidad'] ?>" name="capacidad"  required>
                              </p>
                             
                              <div class="col-12 text-right"><button type="button" class="btn btn-secondary mr-3" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-danger">Guardar</button>
                              </div>
                             
                              </form>
                              
                          
                          </div>
                      </div>
                     </div>
                
                </tbody>
            </table><?php }?>
            
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