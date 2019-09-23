<?php
require '../../config/Conexion.php';
require 'header.php';
?>
<!DOCTYPE html>
<!--
  Name: Snow - Minimal & Clean Portfolio HTML Template
  Version: 1.0.1
  Author: nK, unvab
  Website: https://nkdev.info, http://unvab.com/
  Purchase: https://nkdev.info
  Support: https://nk.ticksy.com
  License: You must have a valid license purchased only from ThemeForest (the above link) in order to legally use the theme for your project.
  Copyright 2017.
-->

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Snow | Portfolio</title>

    <meta name="description" content="Snow - Clean & Minimal Portfolio HTML template.">
    <meta name="keywords" content="portfolio, clean, minimal, blog, template, portfolio website">
    <meta name="author" content="nK">

    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i%7cWork+Sans:400,500,700" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="assets/css/combined.css">

    <!-- END: Styles -->



</head>


<body>
<br> <br> <br> <br> <br>  

    <div class="nk-main">
        <div class="container">



       
        <button type="button" class="btn btn-light"><a href="mascota_agr.php" style="text-decoration: none;">Dar en adopción</a> </button>
          <hr>
          <!-- modal agregar MASCOTA-->
               






  <div class="container-fluid">
  <div class="row">
  <?php 
                        $consulta= "SELECT * FROM foto";
                        $resultado= mysqli_query($conexion,$consulta);
                        while ($mostrar=mysqli_fetch_array($resultado)){
                         
                                               
                 ?>
    <div class="col-lg-3 position-sticky float-lg-left">

           
                        <div class="col-3">
                            <div class="card" style="width: 18rem;">
                              <img class="card-img-top" src="../../public/img/<?php echo $mostrar['imagen']?>" alt=" Card image cap <?php echo $mostrar['nombre']?>" width="100%">
                         
                                 <a href="mascotali.php" class="btn btn-primary">Ver más</a>
                                
                             </div>
                        </div>
           
            </div><?php }?> 
            </div> 


     </div>
    </div>
</div>
</div>
</div>

  


 




            <div class="nk-gap-4"></div>
        </div>

     


        <!--
    START: Footer
-->
<footer class="nk-footer">


<div class="nk-footer-cont">
    <div class="container text-xs-center">
        <div class="nk-footer-social">
            <ul>
                <li><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>

        <div class="nk-footer-text">
        <p><span>Actividad realizada por: Daniela Roncancio León</span> <strong>Copyright &copy;  </strong> All rights reserved.</p> 
        <p>Fotografias de la portada <a href="https://unsplash.com/"><span class="link">Unsplash</span></a></p>
        <p><span>Con colaboración de:</span> <a href="#"><img src="../../public/img/sena.png" class="img-fluid" alt="Responsive image"> </a>
        <a href="#"><img src="../../public/img/go.png" class="img-fluid" alt="Responsive image"> </a>
        <a href="#"><img src="../../public/img/vive.png" class="img-fluid" alt="Responsive image"> </a>
      </p>

<a href="http://creativecommons.org/licenses/by-sa/4.0/"><img src="img/footer.png" alt="" width="90" height="30"></a>
            <p>2016 &copy; Design by Unvab. Code by nK</p>
        </div>
    </div>
</div>
</footer>
        <!-- END: Footer -->


    </div>




    <!-- START: Scripts -->

    <script src="assets/js/combined.js"></script>
    
    <!-- END: Scripts -->


</body>

</html>