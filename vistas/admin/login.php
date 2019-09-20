<?php
require '../../config/Conexion.php'
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bienvenidos</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <link rel="shortcut icon" href="../public/img/icon_dog.png">
    <style>
    body{
    background: url(../public/img/fondo.jpg) no-repeat;
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

  </head>
   <body>
      <br> <br> <br>   <br> <br> <br>
          <div class="container hold-transition login-page" >
            
                <div class="col login-box ">
                
                      <h1 class="login-box-msg">Iniciar sesión</h1>
                      <form method="post" id="frmAcceso">
                        
                        <div class="form-group">
                          <input type="text" class="form-control" id="correo" name="correo" placeholder="correo">
                          <!-- <span class="fa fa-user form-control-feedback"></span> -->
                        </div>
                        <div class="form-group ">
                          <input type="password" Class="form-control" id="clave" name="clave" placeholder="Contraseña">
                          <!-- <span class="fa fa-key form-control-feedback"></span> -->
                        </div>
                        <div class="row">
                          <div class="col-xs-8">
                            
                          </div><!-- /.col -->
                          <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                          </div><!-- /.col -->
                        </div>
                      </form>
                  </div>
             
            </div><!-- /.login-box -->
   
    <!-- jQuery -->
    <script src="../public/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../public/js/bootstrap.min.js"></script>
     <!-- Bootbox -->
    <script src="../public/js/bootbox.min.js"></script>

    <script src="Scripts/login.js"></script>
  </body>
</html> 