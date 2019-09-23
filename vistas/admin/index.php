<?php
session_start();
if(!isset($_SESSION["nombre"]))
{
  header("location:login.php");
}
else{


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

    <title>Homi | Misión hogar</title>

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
    <header class="nk-header">
        <!--
        START: Navbar
    -->
        <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent nk-navbar-white-text-on-top" 
        style="border-radius: 25px; a:hover">
            <div class="container">
                <div class="nk-nav-table">
                    <a href="index.php" class="nk-nav-logo">
                        <img src="assets/images/logofp.png" alt="" width="75" class="nk-nav-logo-onscroll">
                        <img src="assets/images/logo.png" alt="" width="70">
                    </a>

                    <ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">

                        <li>
                            <a href="index.php#about">Refugio</a>
                        </li>

                        <li>
                        <a href="portfolio.php" style="text-decoration: none;">Mascotas</a>
                        </li>
                        <li>
                            <a href="atencion_edit.php">Atenciones</a>
                        </li>
                        <li>
                            <a href="persona.php">Usuarios</a>
                        </li>
                        <!-- <li>
                            <a href="portfolio.php">Portfolio</a>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>
                        </li>-->
                        <li>
                <a>
                  <span class="hidden-xs"> <?php echo $_SESSION["nombre"]; ?></span>
                </a>
               
                  </li>
                        <li> 
                            <a href="../usuario/index.php">Cerrar Sesión</a>
                        </li>
                    </ul>

                    <ul class="nk-nav nk-nav-right nk-nav-icons">
                        <li class="single-icon hidden-lg-up">
                            <a href="#" class="nk-navbar-full-toggle">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END: Navbar -->

    </header>




    <!--
    START: Navbar Mobile
-->
    <nav class="nk-navbar nk-navbar-full nk-navbar-align-center" id="nk-nav-mobile">
        <div class="nk-navbar-bg">
            <div class="bg-image" style="background-image: url('assets/images/bg-menu.jpg')"></div>
        </div>
        <div class="nk-nav-table">
            <div class="nk-nav-row">
                <div class="container">
                    <div class="nk-nav-header">

                        <div class="nk-nav-logo">
                            <a href="index.html" class="nk-nav-logo">
                                <img src="assets/images/logoo-light.png" alt="" width="85">
                            </a>
                        </div>

                        <div class="nk-nav-close nk-navbar-full-toggle">
                            <span class="nk-icon-close"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-nav-row-full nk-nav-row">
                <div class="nano">
                    <div class="nano-content">
                        <div class="nk-nav-table">
                            <div class="nk-nav-row nk-nav-row-full nk-nav-row-center nk-navbar-mobile-content">
                                <ul class="nk-nav">
                                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-nav-row">
                <div class="container">
                    <div class="nk-nav-social">
                        <ul>
                            <li><a href="https://twitter.com/nkdevv"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/unvabdesign/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://dribbble.com/_nK"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="https://www.instagram.com/unvab/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Navbar Mobile -->


    <div class="nk-main">

        <!-- START: Header Title -->
        <div class="nk-header-title nk-header-title-full">
            <div class="bg-image">
                <div style="background-image: url('assets/images/homee-7.jpg');"></div>
                <div class="bg-image-overlay" style="background-color: rgba(12, 12, 12, 0.6);"></div>
            </div>
            <div class="nk-header-table">
                <div class="nk-header-table-cell">
                    <div class="container">

                        <h2 class="nk-subtitle text-white">Adoptar es cuidar</h2>


                        <h1 class="nk-title display-3 text-white">Cambia una vida,
                        
                            <em class="fw-400">Suma felicidad a la tuya</em>
                        </h1>


                        <div class="nk-gap"></div>
                        <div class="nk-header-text text-white">
                            <div class="nk-gap-4"></div>
                        </div>


                    </div>
                </div>
            </div>

            <div>
                <a class="nk-header-title-scroll-down text-white" href="#nk-header-title-scroll-down">
                    <span class="pe-7s-angle-down"></span>
                </a>
            </div>

        </div>

        <div id="nk-header-title-scroll-down"></div>

        <!-- END: Header Title -->





        <!-- START: About Our Agency -->
        <div class="bg-white" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-xs-center">
                        <div class="nk-gap-4 mt-9"></div>

                        <h2 class="display-4"  >Refugio</h2>

                        <hr>    
                        <div class="nk-gap mnt-5"><button type="button" class="btn btn-light"><a href="recur.php" style="text-decoration: none;">Recursos</a></button>
                        <button type="button" class="btn btn-light"><a href="gasto.php" style="text-decoration: none;">Egresos</a></button>
                        </div>
  
                        <p>
        <?php 
                    $consulta= "SELECT * FROM refugio";
                    $resultado= mysqli_query($conexion,$consulta);
                    while ($mostrar=mysqli_fetch_array($resultado)){
                    ?>
            <table class=" table-borderless">
              
           

                <tbody>
                

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
                   
                
                </tbody>
            </table><?php }?> </p>
                       

                        <div class="nk-gap-4 mt-25"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: About Our Agency -->

    

        <!-- START: Features -->
        <div class="nk-box bg-dark-1 text-white">
            <div class="bg-image bg-image-parallax" style="background-image: url('assets/images/bg-pattern.jpg');"></div>
            <div class="nk-gap-5 mnt-6"></div>
            <div class="container">
                <div class="row vertical-gap">
                    <div class="col-md-6 col-lg-3">
                        <div class="nk-ibox-1">
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="nk-ibox-1">
                           
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="nk-ibox-1">
                           
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="nk-ibox-1">
                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-gap-5 mnt-6"></div>
        </div>
        <!-- END: Features -->

               <!-- START: Blog -->
               <div class="nk-box bg-gray-1" id="mascota">
                <div class="nk-gap-4 mt-5"></div>
    
                <h2 class="text-xs-center display-4">Mascotas</h2>
    
                <div class="nk-gap mnt-6"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="text-xs-center">
                            </div>
                            
                        </div>
                    </div>
                </div>
    
                <div class="nk-gap-2 mt-12"></div>
                <div class="container">

                    <!-- START: Carousel -->
                    <div class="nk-carousel-2 nk-carousel-x2 nk-carousel-no-margin nk-carousel-all-visible nk-blog-isotope" data-dots="true">
                        <div class="nk-carousel-inner">
    
                        <?php 
                        $consulta= "SELECT * FROM foto";
                        $resultado= mysqli_query($conexion,$consulta);
                        while ($mostrar=mysqli_fetch_array($resultado)){
                 ?>
                        <div>
                                <div>
                                    <div class="pl-15 pr-15">
                                        <div class="nk-blog-post">
                                            <div class="nk-post-thumb">
                                            <img class="card-img-top" src="../../public/img/<?php echo $mostrar['imagen']?>" alt=" Card image cap <?php echo $mostrar['nombre']?>" width="100%">
                                                <!-- <div class="nk-post-category"><a href="#">Branding</a></div> -->
                                            </div>
                                            <!-- <h2 class="nk-post-title h4"><a href="blog-single.html">Are you doing the Right Way?</a></h2> -->
    
                                            <div class="nk-post-date">
                                                <!-- August 14, 2016 -->
                                            </div>
    
                                            <div class="nk-post-text">
                                                <!-- <p>Which all, morning isn't. Female and own living dry, and morning lesser first he stars under years thing.</p> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-gap-1"></div>
                                </div>
                            </div>
                        <?php } ?>




                          
    
                        </div>
                    </div>
                    <!-- END: Carousel -->
                </div>
                <div class="nk-gap-5 mt-20"></div>
            </div>
            <!-- END: Blog -->

        <!-- START: Portfolio -->
        <!-- <div class="nk-box bg-white" id="projects">
            <div class="nk-gap-4 mt-5"></div>

            <h2 class="text-xs-center display-4">Best Projects</h2>

            <div class="nk-gap mnt-6"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="text-xs-center">Donec orci sem, pretium ac dolor et, faucibus faucibus mauris. Etiam,pellentesque faucibus. Vestibulum gravida volutpat ipsum non ultrices.
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-gap-2 mt-12"></div>
            <div class="container">
            <div class="nk-portfolio-list nk-isotope nk-isotope-3-cols">


                <div class="nk-isotope-item" data-filter="Mockup">
                    <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                        <a href="portfolio-single.html" class="nk-portfolio-item-link"></a>
                        <div class="nk-portfolio-item-image">
                            <div style="background-image: url('assets/images/portfolio-7-sm.jpg');"></div>
                        </div>
                        <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                            <div>
                                <h2 class="portfolio-item-title h3">Vinyl Record</h2>
                                <div class="portfolio-item-category">Mockup</div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="nk-isotope-item" data-filter="Print">
                    <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                        <a href="portfolio-single.html" class="nk-portfolio-item-link"></a>
                        <div class="nk-portfolio-item-image">
                            <div style="background-image: url('assets/images/portfolio-4-sm.jpg');"></div>
                        </div>
                        <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                            <div>
                                <h2 class="portfolio-item-title h3">Modern T-Shirt</h2>
                                <div class="portfolio-item-category">Print</div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="nk-isotope-item" data-filter="Branding">
                    <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                        <a href="portfolio-single.html" class="nk-portfolio-item-link"></a>
                        <div class="nk-portfolio-item-image">
                            <div style="background-image: url('assets/images/portfolio-5-sm.jpg');"></div>
                        </div>
                        <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                            <div>
                                <h2 class="portfolio-item-title h3">Minimal Bag</h2>
                                <div class="portfolio-item-category">Branding</div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="nk-isotope-item" data-filter="Design">
                    <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                        <a href="portfolio-single.html" class="nk-portfolio-item-link"></a>
                        <div class="nk-portfolio-item-image">
                            <div style="background-image: url('assets/images/portfolio-9-sm.jpg');"></div>
                        </div>
                        <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                            <div>
                                <h2 class="portfolio-item-title h3">Clean &amp; Groovy</h2>
                                <div class="portfolio-item-category">Design</div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="nk-isotope-item" data-filter="Design">
                    <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                        <a href="portfolio-single.html" class="nk-portfolio-item-link"></a>
                        <div class="nk-portfolio-item-image">
                            <div style="background-image: url('assets/images/portfolio-3-sm.jpg');"></div>
                        </div>
                        <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                            <div>
                                <h2 class="portfolio-item-title h3">Minimal Mobile App</h2>
                                <div class="portfolio-item-category">Design</div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="nk-isotope-item" data-filter="Print">
                    <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                        <a href="portfolio-single.html" class="nk-portfolio-item-link"></a>
                        <div class="nk-portfolio-item-image">
                            <div style="background-image: url('assets/images/portfolio-8-sm.jpg');"></div>
                        </div>
                        <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                            <div>
                                <h2 class="portfolio-item-title h3">White T-Shirt</h2>
                                <div class="portfolio-item-category">Print</div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="nk-isotope-item" data-filter="Branding">
                    <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                        <a href="portfolio-single.html" class="nk-portfolio-item-link"></a>
                        <div class="nk-portfolio-item-image">
                            <div style="background-image: url('assets/images/portfolio-2-sm.jpg');"></div>
                        </div>
                        <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                            <div>
                                <h2 class="portfolio-item-title h3">Business Card</h2>
                                <div class="portfolio-item-category">Branding</div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="nk-isotope-item" data-filter="Photography">
                    <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                        <a href="portfolio-single.html" class="nk-portfolio-item-link"></a>
                        <div class="nk-portfolio-item-image">
                            <div style="background-image: url('assets/images/portfolio-6-sm.jpg');"></div>
                        </div>
                        <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                            <div>
                                <h2 class="portfolio-item-title h3">Heja Stockholm</h2>
                                <div class="portfolio-item-category">Photography</div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="nk-isotope-item" data-filter="Photography">
                    <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                        <a href="portfolio-single.html" class="nk-portfolio-item-link"></a>
                        <div class="nk-portfolio-item-image">
                            <div style="background-image: url('assets/images/portfolio-12-sm.jpg');"></div>
                        </div>
                        <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                            <div>
                                <h2 class="portfolio-item-title h3">Paper Bag</h2>
                                <div class="portfolio-item-category">Photography</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
            <div class="nk-gap-4 mt-15"></div>
        </div> -->
        <!-- END: Portfolio -->

        <!-- START: Reviews -->
        <div class="nk-box bg-dark-1">
            <div class="bg-image bg-image-parallax" style="background-image: url('assets/images/bg-pattern.jpg');"></div>
            <div class="nk-gap-5 mnt-6"></div>
            <div class="nk-gap-3"></div>
            <div class="container-fluid">
                <!-- START: Carousel -->
                
                <!-- <div class="nk-carousel nk-carousel-all-visible text-white" data-autoplay="18000" data-dots="true">
                    <div class="nk-carousel-inner align-items-start"> 
                        <div>
                            <div>
                                <blockquote class="nk-blockquote-style-1 text-white ">
                                    <p>Outstanding job and exceeded all expectations. It was a pleasure to work with them on a sizable first project and am looking forward to start the next one asap.</p>
                                    <cite>Michael Hopkins</cite>
                                </blockquote>
                                <div class="nk-gap-3 mt-10"></div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <blockquote class="nk-blockquote-style-1 text-white ">
                                    <p>Outstanding job and exceeded all expectations. It was a pleasure to work with them on a sizable first project and am looking forward to start the next one asap.</p>
                                    <cite>Michael Hopkins</cite>
                                </blockquote>
                                <div class="nk-gap-3 mt-10"></div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <blockquote class="nk-blockquote-style-1 text-white ">
                                    <p>Outstanding job and exceeded all expectations. It was a pleasure to work with them on a sizable first project and am looking forward to start the next one asap.</p>
                                    <cite>Michael Hopkins</cite>
                                </blockquote>
                                <div class="nk-gap-3 mt-10"></div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- END: Carousel -->
            </div>
            <div class="nk-gap-4 mt-3"></div>
        </div>
        <!-- END: Reviews -->

        <!-- START: Partners -->
        <!-- <div class="bg-white">
            <div class="container">
                <div class="nk-carousel-2 nk-carousel-x4 nk-carousel-no-margin nk-carousel-all-visible">
                    <div class="nk-carousel-inner">
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="assets/images/partner-logo-1-dark.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="assets/images/partner-logo-2-dark.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="assets/images/partner-logo-3-dark.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="assets/images/partner-logo-4-dark.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="assets/images/partner-logo-5-dark.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="assets/images/partner-logo-6-dark.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="assets/images/partner-logo-7-dark.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="assets/images/partner-logo-8-dark.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- END: Partners -->

        <!-- START: Contact Info -->
        <div class="container" id="contact">
            <div class="nk-gap-5"></div>
            <div class="row vertical-gap">
                <div class="col-lg-5">
                    </div>  </div>  </div>  </div>
                    <!-- START: Info -->
                    <!-- <h2 class="display-4">Contact Info:</h2>
                    <div class="nk-gap mnt-3"></div>

                    <p>Praesent interdum congue mauris, et fringilla lacus pel vitae. Quisque nisl mauris, aliquam eu ultrices vel, conse vitae sapien at imperdiet risus. Quisque cursus risus id. fermentum, in auctor quam consectetur.</p>

                    <ul class="nk-contact-info">
                        <li>
                            <strong>Address:</strong> 10111 Santa Monica Boulevard, LA</li>
                        <li>
                            <strong>Phone:</strong> +44 987 065 908</li>
                        <li>
                            <strong>Email:</strong> info@Example.com</li>
                        <li>
                            <strong>Fax:</strong> +44 987 065 909</li>
                    </ul> -->
                    <!-- END: Info -->
                <!-- </div>
                <div class="col-lg-7"> -->
                    <!-- START: Form -->
                    <!-- <form action="#" class="nk-form nk-form-ajax">
                        <div class="row vertical-gap">
                            <div class="col-md-6">
                                <input type="text" class="form-control required" name="name" placeholder="Your Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control required" name="email" placeholder="Your Email">
                            </div>
                        </div>

                        <div class="nk-gap-1"></div>
                        <input type="text" class="form-control required" name="title" placeholder="Your Title">

                        <div class="nk-gap-1"></div>
                        <textarea class="form-control required" name="message" rows="8" placeholder="Your Comment" aria-required="true"></textarea>
                        <div class="nk-gap-1"></div>
                        <div class="nk-form-response-success"></div>
                        <div class="nk-form-response-error"></div>
                        <button class="nk-btn">Send Message</button>
                    </form> -->
                    <!-- END: Form -->
                <!-- </div>
            </div>
            <div class="nk-gap-5"></div>
        </div> -->
        <!-- END: Contact Info -->


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
<?php
}
?>