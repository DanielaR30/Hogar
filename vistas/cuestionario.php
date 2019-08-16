<?php
// session_start();
// if(!isset($_SESSION["nombre"]))
// {
//    header("Location:login.html");
//  }
//  else{

  require 'header.php';
?>
<style>
   .fondo{
    background: url(../public/img/fondoo.jpg) no-repeat;
    background-position: center center;
    background-attachment: fixed; 
    background-size: cover; 
    background-color: black;
    max-height: 100%;
    max-width: 100%; 
    margin:0px;
    padding:0px;  
    }
  </style>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12 fondo">  <br> <br> <br>
                  <div class="box ">
                    <div class="box-header with-border">
                          <h1 class="box-title">Tabla <button class="btn btn-success" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                    <!-- Estructura de la tabla donde se mostrara el listado de las categorias de 
                    la base de datos  -->
                    <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                      <thead>
                        <th>Opciones</th>
                        <th>preg1</th>
                        <th>preg2</th>
                        <th>preg3</th>
                        <th>preg4</th>
                        <th>preg5</th>
                        <th>preg6</th>
                        <th>preg7</th>
                        <th>preg8</th>
                        <th>preg9</th>
                        <th>preg10</th>
                        <th>preg11</th>
                        <th>preg12</th>
                        <th>preg13</th>
                        <th>preg14</th>
                        <th>preg15</th>
                        <th>Estado</th>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Preg1</label>
                          <input type="hidden" name="idcuestionario" id="idcuestionario">
                          <input type="text" class="form-control" name="preg1" id="preg1" maxlength="50" placeholder="respuesta" required>
                          </div>

                           <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Preg2</label>
                          <input type="hidden" name="idcuestionario" id="idcuestionario">
                          <input type="text" class="form-control" name="preg2" id="preg2" maxlength="50" placeholder="respuesta" required>
                          </div>

                           <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Preg3</label>
                          <input type="hidden" name="idcuestionario" id="idcuestionario">
                          <input type="text" class="form-control" name="preg3" id="preg3" maxlength="50" placeholder="respuesta" required>
                          </div>

                           <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Preg4</label>
                          <input type="hidden" name="idcuestionario" id="idcuestionario">
                          <input type="text" class="form-control" name="preg4" id="preg4" maxlength="50" placeholder="respuesta" required>
                          </div>

                           <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Preg5</label>
                          <input type="hidden" name="idcuestionario" id="idcuestionario">
                          <input type="text" class="form-control" name="preg5" id="preg5" maxlength="50" placeholder="respuesta" required>
                          </div>

                           <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Preg6</label>
                          <input type="hidden" name="idcuestionario" id="idcuestionario">
                          <input type="text" class="form-control" name="preg6" id="preg6" maxlength="50" placeholder="respuesta" required>
                          </div>

                           <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Preg7</label>
                          <input type="hidden" name="idcuestionario" id="idcuestionario">
                          <input type="text" class="form-control" name="preg7" id="preg7" maxlength="50" placeholder="respuesta" required>
                          </div>

                           <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Preg8</label>
                          <input type="hidden" name="idcuestionario" id="idcuestionario">
                          <input type="text" class="form-control" name="preg8" id="preg8" maxlength="50" placeholder="respuesta" required>
                          </div>

                           <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Preg9</label>
                          <input type="hidden" name="idcuestionario" id="idcuestionario">
                          <input type="text" class="form-control" name="preg9" id="preg9" maxlength="50" placeholder="respuesta" required>
                          </div>

                             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Preg10</label>
                          <input type="hidden" name="idcuestionario" id="idcuestionario">
                          <input type="text" class="form-control" name="preg10" id="preg10" maxlength="50" placeholder="respuesta" required>
                          </div>

                             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Preg11</label>
                          <input type="hidden" name="idcuestionario" id="idcuestionario">
                          <input type="text" class="form-control" name="preg11" id="preg11" maxlength="50" placeholder="respuesta" required>
                          </div>

                             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Preg12</label>
                          <input type="hidden" name="idcuestionario" id="idcuestionario">
                          <input type="text" class="form-control" name="preg12" id="preg12" maxlength="50" placeholder="respuesta" required>
                          </div>

                             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Preg13</label>
                          <input type="hidden" name="idcuestionario" id="idcuestionario">
                          <input type="text" class="form-control" name="preg13" id="preg13" maxlength="50" placeholder="respuesta" required>
                          </div>

                             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Preg14</label>
                          <input type="hidden" name="idcuestionario" id="idcuestionario">
                          <input type="text" class="form-control" name="preg14" id="preg14" maxlength="50" placeholder="respuesta" required>
                          </div>

                             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Preg15</label>
                          <input type="hidden" name="idcuestionario" id="idcuestionario">
                          <input type="text" class="form-control" name="preg15" id="preg15" maxlength="50" placeholder="respuesta" required>
                          </div>
                      
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"> Guardar</i></button>
                          <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left">Cancelar</i></button>
                          </div>


                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php
require 'footer.php';
?>
<script src="Scripts/cuestionario.js"></script>

