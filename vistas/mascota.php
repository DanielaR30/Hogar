<?php
require 'header.php';
?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
             
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title" style="font-family: 'Baloo Bhai', cursive">Traspasos <button class="btn btn-dark" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                      <table id = "tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                      <thead>
                      <th>Opciones</th>
                      <th>NombreRaza</th>
                      <th>Especie</th>
                      <th>Nombre</th>
                      <th>Edad</th>
                      <th>Tamanio</th>
                      <th>Genero</th>
                      <th>Ubicacion</th>
                      <th>Descripcion</th>
                      <th>Imagen</th>
                      <th>Estado</th>

                      </thead>
                      
                      </table>
                        
                    </div>
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label>Especie:</label>
                            <input type="text" class="form-control" name="especie" id="especie" maxlength="256" placeholder="">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label >NombreRaza:</label>
                            <!-- <input type="text" class="form-control" name="nombreEstudiante" id="nombreEstudiante" maxlength="256" placeholder="NombreEstudiante"> -->
                            <select id="idraza" name="idraza" class="form-control selectpicker" data-live-search="true" required></select>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label >Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" maxlength="256" placeholder="">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label >Edad:</label>
                            <input type="text" class="form-control" name="edad" id="edad" maxlength="256" placeholder="">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label >Tamanio:</label>
                            <input type="text" class="form-control" name="tamanio" id="tamanio" maxlength="256" placeholder="">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label >Genero:</label>
                            <input type="text" class="form-control" name="genero" id="genero" maxlength="256" placeholder="">
                          </div>
                          
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label>Descripcion:</label>
                            <!-- <input type="hidden" name="idtraspaso" id="idtraspaso">
                            <input type="text" class="form-control" name="nombreEscuela" id="nombreEscuela" maxlength="50" placeholder="NombreEscuela" required> -->
                            <input type="text" class="form-control" name="descripcion" id="descripcion" maxlength="256" placeholder="">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label>Ubicacion:</label>
                            <!-- <input type="hidden" name="idtraspaso" id="idtraspaso">
                            <input type="text" class="form-control" name="nombreEscuela" id="nombreEscuela" maxlength="50" placeholder="NombreEscuela" required> -->
                            <input type="text" class="form-control" name="ubicacion" id="ubicacion" maxlength="256" placeholder="">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label>Imagen:</label>
                            <!-- <input type="hidden" name="idtraspaso" id="idtraspaso">
                            <input type="text" class="form-control" name="nombreEscuela" id="nombreEscuela" maxlength="50" placeholder="NombreEscuela" required> -->
                            <input type="file" class="form-control" name="imagen" id="imagen" maxlength="256" placeholder="">
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>Guardar</button>
                          <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i>Cancelar</button>
                          </div>
                        </form>
                    </div>
                  
                  </div>
              </div>
        </div>
      </section> 

    
  
<?php
require 'footer.php';
?>
<script src="Scripts/mascota.js"></script>