<?php
require_once '../config/config.php';
require_once baseurl . 'lib/conexion/loginpdo.class.php';
require_once baseurl . 'lib/errorreporting/errorreporting.class.php';
require_once baseurl . 'lib/redessociales/redessociales.class.php';
require_once baseurl . 'lib/pagar/pagar.class.php';
require_once baseurl . 'lib/conexion/conexionpdo.class.php';

$db = new loginpdo();
$er = new errorreporting();
$db->comprobar("admin");
redessociales::mostrarredessociales();
$db = new conexionpdo();
$db->connect();

?>
<!DOCTYPE html>
<html lang="es">

  <head>
    


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Bootstrap Responsive Template</title>
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Global Stylesheets -->
    
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
<!--    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="css/animate/animate.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Core Stylesheets -->
    
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/careers.css"> 
    <link rel="stylesheet" href="css/team.css"> 
    <link rel="stylesheet" href="css/testimonials.css"> 
    <link rel="stylesheet" href="css/about.css"> 
    <link rel="stylesheet" href="css/contact.css"> 
    <link rel="stylesheet" href="css/custom.css"> 
    <link rel="stylesheet" href="css/faq.css"> 
    <link rel="stylesheet" href="css/news.css"> 
    <link rel="stylesheet" href="css/com-soon.css"> 
    <link rel="stylesheet" href="css/pricing.css"> 
    <link rel="stylesheet" href="css/services.css"> 

    <link rel="stylesheet" href="css/shop.css"> 
    <link rel="stylesheet" href="css/single-product.css"> 
    
    
    <?php redessociales::head();?>  
    <!--no  hay librerias composer-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    
<!--no  hay librerias composer-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!--no  hay librerias composer-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<!--no  hay librerias composer-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>-->
<link rel="stylesheet" href="css/custom.css">
    
  </head>
  
<!--====================================================
                         HEADER
======================================================--> 

<header>

<!-- Top Navbar  -->
<div class="top-menubar">
  <div class="topmenu">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <ul class="list-inline top-contacts">
            <!--<li>
              <i class="fa fa-envelope"></i> Email: <a href="mailto:jagrenlern@gmail.com">jagrenlern@gmail.com</a>
            </li>-->
            <!--<li>
              <i class="fa fa-phone"></i> <a href="tel:+620216269">620216269</a>
            </li>-->
            <?php redessociales::mostrarcontrolemailbs("jagreenlern@gmail.com");?>
            <?php redessociales::mostrarcontroltelefonobs(620216269);?>
            <?php redessociales::mostrarcontrolskypebs ("jagreenlern_6");?>
            <!--<li>
              <i class="fa fa-phone"></i> <a href="skype:live:jagreenlern_6?call">Hablar por Skype</a>
            </li>-->
          </ul>
          
          
        </div> 
        <div class="col-md-5">
          <ul class="list-inline top-data">
            <!--<li><a href="https://www.facebook.com/share.php?v=4&src=bm&u=https://www.webslesson.info/2019/09/php-form-with-google-recaptcha.html&t=PHP Form with Google reCaptcha" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>-->
            <!--<li><a href="https://www.facebook.com/share.php?v=4&src=bm&u=<?php redessociales::mostrarenlacecompartir(); ?>" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>-->
            
            <!--no funcionan
              <li><a href="https://twitter.com/home?status=PHP Form with Google reCaptcha -- https://www.webslesson.info/2019/09/php-form-with-google-recaptcha.html" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
            <li><a href="https://digg.com/submit?phase=2&url=https://www.webslesson.info/2019/09/php-form-with-google-recaptcha.html&title=PHP Form with Google reCaptcha" target="_empty"><i class="fa top-social fa-digg"></i></a></li> -->
            
            <!-- no funciona
              <li><a href="https://plus.google.com/share?url=https://www.webslesson.info/2019/09/php-form-with-google-recaptcha.html" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li> -->
            <!--<li><a href="#" class="log-top" data-toggle="modal" data-target="#login-modal">Login</a></li>  -->
            <?php redessociales::mostrarcontrolcompartirbs();?>
            <li><a href="../loginbootstrapadmin.php" class="log-top" >Logearse</a></li>
            <li><a href="../registerbootstrap.php" class="log-top" >Registro</a></li>
            <li><a href="../logout.php" class="log-top" >Logout</a></li>
          </ul>

          
          
        </div>
      </div>
    </div>
  </div> 
</div> 

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav" data-toggle="affix">
  <div class="container">
    <a class="navbar-brand smooth-scroll" href="indexbootstrap.php">
      <img src="img/logo-s.png" alt="logo">
      
    </a> 
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> 
          <span class="navbar-toggler-icon"></span>
          
    </button>  
    <h1>Kaos</h1>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item" ><a class="nav-link smooth-scroll" href="indexbootstrap.php">Home</a></li>
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a> 
            <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="about.php">About Us</a>
              <a class="dropdown-item" href="careers.php">Career Oprtunity</a>
              <a class="dropdown-item" href="team.php">Meet Our Team</a>
              <a class="dropdown-item" href="faq.php">FAQ</a>
              <a class="dropdown-item" href="testimonials.php">Testimonials</a>
            </div>
          </li>
          <li class="nav-item" ><a class="nav-link smooth-scroll" href="services.php">Services</a></li> 
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ejercicios</a> 
            <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink"> 
            <a class="dropdown-item"  target="_self" href="encriptar.php">Encriptar(crypt)> 
            <a class="dropdown-item"  target="_self" href="crudpdo.php">CRUD 2</a>
              <a class="dropdown-item"  target="_self" href="emailme.php">Email</a> 
              <a class="dropdown-item"  target="_self" href="leerexcel.php">Leer excel</a>
              <a class="dropdown-item"  target="_self" href="leernuevoexcel.php">Leer nuevo excel</a>
              <a class="dropdown-item"  target="_self" href="grabarnuevoexcel.php">Grabar nuevo excel</a>
              <a class="dropdown-item"  target="_self" href="grabarexcel.php">Grabar excel</a> 
              <a class="dropdown-item"  target="_self" href="grabarnodosxmlclass.php">Grabar xml</a> 
              <a class="dropdown-item"  target="_self" href="plantillanormal.php">Plantilla normal</a> 
              <a class="dropdown-item"  target="_self" href="plantillanormalcrud.php">Plantilla normal crud </a>
              <a class="dropdown-item"  target="_self" href="pagar.php">Pagar</a>
              <a class="dropdown-item"  target="_self" href="../upload/CurrículumPabloMartín.pdf">PDF</a>
              <a class="dropdown-item"  target="_self" href="ejercicio1.php">Ejercicio 1</a> 
              <a class="dropdown-item"  target="_self" href="ejercicio2.php">Ejercicio 2</a> 
              <a class="dropdown-item"  target="_self" href="ejercicio3.php">Ejercicio 3</a> 
              <a class="dropdown-item"  target="_self" href="ejercicio4.php">Ejercicio 4</a> 
              <a class="dropdown-item"  target="_self" href="ejercicio5.php">Ejercicio 5</a> 
              
               
    
            </div>
          </li>
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a> 
            <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="news-list.php">News list layouts</a>
              <a class="dropdown-item" href="news-grid.php">News grid layouts</a>
              <a class="dropdown-item" href="news-details.php">News Details</a> 
              <a class="dropdown-item" href="project.php">Project</a>
              <a class="dropdown-item" href="contact.php">Contact Us</a>
              <a class="dropdown-item" href="comming-soon.php">Comming Soon</a>
              <a class="dropdown-item" href="pricing.php">Pricing Tables</a>
              <a class="dropdown-item" href="admin/404.php">404</a>
            </div>
          </li>
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a> 
            <div class="dropdown-menu dropdown-cust mega-menu" aria-labelledby="navbarDropdownMenuLink">
              <div class="row">
                <div class="col-md-5">
                  <a class="dropdown-item" href="shop.php">Shop Detail</a>
                  <a class="dropdown-item" href="single-product.php">Single Product</a>
                  <a class="dropdown-item" href="cart.php">Cart</a>
                  <a class="dropdown-item" href="checkout.php">Checkout</a>
                  <a class="dropdown-item" href="myaccount.php">Myaccount</a>
                </div>
                <div class="col-md-7 mega-menu-img m-auto text-center pl-0">
                  <a href="#"><img src="img/offer_icon.png" alt="" class="img-fluid"></a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <i class="search fa fa-search search-btn"></i>
            <div class="search-open">
              <div class="input-group animated fadeInUp">
                <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon2">
                <span class="input-group-addon" id="basic-addon2">Go</span>
              </div>
            </div>
          </li> 
          <li>
            <div class="top-menubar-nav">
              <div class="topmenu">
                <div class="container">
                  <div class="row">
                    <div class="col-md-9">
                      <ul class="list-inline top-contacts">
                        <li>
                          <i class="fa fa-envelope"></i> Email: <a href="mailto:info@htmlstream.com">info@htmlstream.com</a>
                        </li>
                        <li>
                          <i class="fa fa-phone"></i> Hotline: (1) 396 4587 99
                        </li>
                      </ul>
                    </div> 
                    <div class="col-md-3">
                      <ul class="list-inline top-data">
                        <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                        <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                        <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li> 
                            <!--<li><a href="#" class="log-top" data-toggle="modal" data-target="#login-modal">Login</a></li>  -->
            <li><a href="../loginbootstrapadmin.php" class="log-top" >Logearse</a></li>
            <li><a href="../registerbootstrap.php" class="log-top" >Registro</a></li>
            <li><a href="../logout.php" class="log-top" >Logout</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </li>
      </ul>  
    </div>
  </div>
</nav>
</header> 