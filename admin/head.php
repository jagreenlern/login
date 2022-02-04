
<?php
require_once '../config/config.php';
require_once baseurl . 'lib/conexion/loginpdo.class.php';
require_once baseurl . 'lib/redessociales/redessociales.class.php';

require_once baseurl . 'lib/pagar/pagar.class.php';


require_once baseurl . 'lib/conexion/conexionpdo.class.php';


$db = new loginpdo();

$db->comprobar("admin");
//redessociales::mostrarredessociales();
$db = new conexionpdo();
$db->connect();





?>

<!--
author: Boostraptheme
author URL: https://boostraptheme.com
License: Creative Commons Attribution 4.0 Unported
License URL: https://creativecommons.org/licenses/by/4.0/
-->

<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <title>Bootstrap Admin Template </title>
    <link rel="shortcut icon" href="img/favicon.ico">
    
    <!-- global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-icon-style.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="css/ui-elements/card.css">
    <link rel="stylesheet" href="css/style.css">
        <!-- Core stylesheets -->
        <link rel="stylesheet" href="css/apps/calendar.css">
         <!-- Core stylesheets -->
    <link rel="stylesheet" href="css/pages/gallery.css">
     <!-- Core stylesheets -->
     <link rel="stylesheet" href="css/form.css">
     
    <!-- Core stylesheets -->
    <link rel="stylesheet" href="css/pages/search.css"> 
    <!-- Core stylesheets -->
    <link rel="stylesheet" href="css/ui-elements/button.css">
        <!-- Core stylesheets -->
        <link rel="stylesheet" href="css/ui-elements/card.css">
            <!-- Core stylesheets -->
    <link rel="stylesheet" href="css/ui-elements/timeline.css">
        <!-- Core stylesheets -->
        <link rel="stylesheet" href="css/apps/media.css">
        <!-- Core stylesheets -->
    <link rel="stylesheet" href="css/apps/email.css">
    
    <!-- Core stylesheets -->
    <link rel="stylesheet" href="css/apps/invoice.css"> 
        <!-- Core stylesheets -->
        <link rel="stylesheet" href="css/profile.css">
        <?php //redessociales::head();?>    

</head>
        



<body> 

<!--====================================================
                         MAIN NAVBAR
======================================================-->        
    <header class="header">
        <nav class="navbar navbar-expand-lg ">
            <div class="search-box">
                <button class="dismiss"><i class="icon-close"></i></button>
                <form id="searchForm" action="#" role="search">
                    <input type="search" placeholder="Search Now" class="form-control">
                </form>
            </div>
            <div class="container-fluid ">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <div class="navbar-header">
                        <a href="indexbootstrap.php" class="navbar-brand">
                            <!--<div class="brand-text brand-big hidden-lg-down"><img src="img/logo-white.png" alt="Logo" class="img-fluid"></div>-->
                            <h1><div class="brand-text brand-big hidden-lg-down">Titulo</div></h1>
                            <div class="brand-text brand-small"><img src="img/logo-icon.png" alt="Logo" class="img-fluid"></div>

                        </a>
                        <a id="toggle-btn" href="#" class="menu-btn active">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <!-- Expand-->
                    <li class="nav-item d-flex align-items-center full_scr_exp"><a class="nav-link" href="#"><img src="img/expand.png" onclick="toggleFullScreen(document.body)" class="img-fluid" alt=""></a></li>
                    <!-- Search-->
                    <li class="nav-item d-flex align-items-center"><a id="search" class="nav-link" href="#"><i class="icon-search"></i></a></li>
                    <!-- Notifications-->
                    <li class="nav-item dropdown"> 
                        <a id="notifications" class="nav-link" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell-o"></i><span class="noti-numb-bg"></span><span class="badge">12</span></a>
                        <ul aria-labelledby="notifications" class="dropdown-menu">
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item nav-link">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-envelope bg-red"></i>You have 6 new messages </div>
                                        <div class="notification-time"><small>4 minutes ago</small></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item nav-link">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-twitter bg-skyblue"></i>You have 2 followers</div>
                                        <div class="notification-time"><small>4 minutes ago</small></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item nav-link">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-upload bg-blue"></i>Server Rebooted</div>
                                        <div class="notification-time"><small>4 minutes ago</small></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item nav-link">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-twitter bg-skyblue"></i>You have 2 followers</div>
                                        <div class="notification-time"><small>10 minutes ago</small></div>
                                    </div>
                                </a>
                            </li>
                            <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                        </ul>
                    </li>
                    <!-- Messages                        -->
                    <li class="nav-item dropdown"> <a id="messages" class="nav-link logout" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-envelope-o"></i><span class="noti-numb-bg"></span><span class="badge">10</span></a>
                        <ul aria-labelledby="messages" class="dropdown-menu">
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                    <div class="msg-body">
                                        <h3 class="h5 msg-nav-h3">Jason Doe</h3><span>Sent You Message</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                    <div class="msg-body">
                                        <h3 class="h5 msg-nav-h3">Frank Williams</h3><span>Sent You Message</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                    <div class="msg-body">
                                        <h3 class="h5 msg-nav-h3">Ashley Wood</h3><span>Sent You Message</span>
                                    </div>
                                </a>
                            </li>
                            <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages    </strong></a></li>
                        </ul>
                    </li> 
                    <li class="nav-item dropdown"><a id="profile" class="nav-link logout" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="../<?=$_SESSION['foto']?>" alt="..." class="img-fluid rounded-circle" style="height: 30px; width: 30px;"></a>
                        <ul aria-labelledby="profile" class="dropdown-menu profile">
                            <li>
                                <a rel="nofollow" href="mailto:<?=$_SESSION['email']?>" class="dropdown-item d-flex">
                                    <div class="msg-profile"> <img src="../<?=$_SESSION['foto']?>" alt="..." class="img-fluid rounded-circle"></div>
                                    <div class="msg-body">
                                        <h3 class="h5"><?=$_SESSION['usuario']?></h3><span><?=$_SESSION['email']?></span>
                                    </div>
                                </a>
                                <hr>
                            </li>
                            <li>
                                <a rel="nofollow" href="profile.php" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-user "></i>My Profile</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="profile.php" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-envelope-o"></i>Inbox</div> 
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="profile.php" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-cog"></i>Setting</div>
                                    </div>
                                </a>
                                <hr>
                            </li>
                            <li>
                            <a rel="nofollow" href="../logout.php" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-power-off"></i>Logout</div>
                                    </div>
                                </a> 
                                </li>
                                <li>
                                <a rel="nofollow" href="../loginbootstrapadmin.php" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-user"></i>Login</div>
                                    </div>
                                </a>
                                </li> 
                                <li>
                                <a rel="nofollow" href="../registerbootstrap.php" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-user-plus"></i>Registro</div>
                                    </div>
                                </a>
                                </li>
                        
                        <li>
                                <a rel="nofollow" href="../loginencriptadobootstrap.php" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-user"></i>Login encriptado</div>
                                    </div>
                                </a>
                                </li> 
                                <li>
                                <a rel="nofollow" href="../registerencriptadobootstrap.php" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-user-plus"></i>Registro encriptado</div>
                                    </div>
                                </a>
                                </li>
                        </ul>
                    </li>
                    <li class="nav-item d-flex align-items-center"><a id="menu-toggle-right" class="nav-link" href="#"><i class="fa fa-bars"></i></a></li>
                    <nav id="sidebar-wrapper">
                      <div class="sidebar-nav"> 
                        <div class="tab" role="tabpanel"> 
                            <ul class="nav nav-tabs" role="tablist">
                              <li class="nav-item ">
                                <a class="nav-link active" href="#live" role="tab" data-toggle="tab"><i class="fa fa-globe"></i> Live</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#trend" role="tab" data-toggle="tab"><i class="fa fa-rocket"></i> Trending</a>
                              </li> 
                            </ul> 
                            <div class="tab-content tabs">
                              <div role="tabpanel" class="tab-pane fade show active" id="live">
                                <h3>Connect Live</h3>
                                <div class="content newsf-list">
                                    <ul class="list-unstyled">
                                        <li class="border border-primary">
                                            <a rel="nofollow " href="#" class=" d-flex">
                                                <div class="news-f-img"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                                <div class="msg-body">
                                                    <h6 class="h5 msg-nav-h6">New Innovation world</h6>
                                                    <small>Tech soft is great innovation for...</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="border border-success">
                                            <a rel="nofollow" href="#" class=" d-flex">
                                                <div class="news-f-img"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                                <div class="msg-body">
                                                    <h6 class="h5 msg-nav-h6">Modified hand-cart</h6>
                                                    <small>The idea is to incorporate easy...</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="border border-info">
                                            <a rel="nofollow" href="#" class=" d-flex">
                                                <div class="news-f-img"> <img src="img/avatar-4.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                                <div class="msg-body">
                                                    <h6 class="h5 msg-nav-h6">Low cost Modern printer</h6>
                                                    <small>A dot matrix printer modified at...</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="border border-primary">
                                            <a rel="nofollow" href="#" class=" d-flex">
                                                <div class="news-f-img"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                                <div class="msg-body">
                                                    <h6 class="h5 msg-nav-h6">Low cost Modern printer</h6>
                                                    <small>A dot matrix printer modified at...</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="border border-success">
                                            <a rel="nofollow" href="#" class=" d-flex">
                                                <div class="news-f-img"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                                <div class="msg-body">
                                                    <h6 class="h5 msg-nav-h6">Low cost Modern printer</h6>
                                                    <small>A dot matrix printer modified at...</small>
                                                </div>
                                            </a>
                                        </li> 
                                        <li class="border border-info">
                                            <a rel="nofollow" href="#" class=" d-flex">
                                                <div class="news-f-img"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                                <div class="msg-body">
                                                    <h6 class="h5 msg-nav-h6">Low cost Modern printer</h6>
                                                    <small>A dot matrix printer modified at...</small>
                                                </div>
                                            </a>
                                        </li> 
                                    </ul>
                                </div>
                              </div>
                              <div role="tabpanel" class="tab-pane fade" id="trend">
                                <div class="card card-c2" style="box-shadow: 0 0 0;">
                                    <div class="header">
                                        <h3 class="title">Trending Items</h3>
                                        <p class="category">Last Campaign Performance</p>
                                    </div>
                                    <div class="content">
                                        <canvas class="ct-chart" id="myChart4" height="250"></canvas>
                                        <div class="footer">
                                            <div class="legend">
                                                <i class="fa fa-circle text-info"></i> Open
                                                <i class="fa fa-circle text-danger"></i> Bounce
                                                <i class="fa fa-circle text-warning"></i> Unsubscribe
                                            </div>
                                            <hr>
                                            <div class="stats">
                                                <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                           </div>
                      </div>
                    </nav>
                </ul> 
            </div>
        </nav>
    </header>

    <!--====================================================
                        PAGE CONTENT
======================================================-->
    <div class="page-content d-flex align-items-stretch">

        <!--***** SIDE NAVBAR *****-->
        <nav class="side-navbar">
            <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"><img src="../<?=$_SESSION['foto']?>" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <h1 class="h4"><?=$_SESSION['usuario']?></h1>
                </div>
            </div>
            <hr>
            <!-- Sidebar Navidation Menus-->
            <ul class="list-unstyled">
                <li class="active"> <a href="indexbootstrap.php"><i class="icon-home"></i>Home</a></li>
                <li><a href="#apps" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Apps </a>
                    <ul id="apps" class="collapse list-unstyled">
                        <li><a href="calendar.php">Calendar</a></li> 
                        <li><a href="email.php">Email</a></li> 
                        <li><a href="media.php">Media</a></li> 
                        <li><a href="invoice.php">Invoice</a></li> 
                    </ul>
                </li>
                <li> <a href="chart.php"> <i class="fa fa-bar-chart"></i>Chart </a></li>
                <li><a href="#forms" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-building-o"></i>Forms </a>
                    <ul id="forms" class="collapse list-unstyled">
                        <li><a href="basic-form.php">Basic Form</a></li> 
                        <li><a href="form-layouts.php">Form Layouts</a></li> 
                    </ul>
                </li>
                <li> <a href="maps.php"> <i class="fa fa-map-o"></i>Maps </a></li>
                <li><a href="#pages" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-file-o"></i>Pages </a>
                    <ul id="pages" class="collapse list-unstyled">
                        <li><a href="faq.php">FAQ</a></li> 
                        <li><a href="empty.php">Empty</a></li> 
                        <li><a href="gallery.php">Gallery</a></li> 
                        <li><a href="login.php">Log In</a></li> 
                        <li><a href="register.php">Register</a></li> 
                        <li><a href="search-result.php">Search Result</a></li> 
                        <li><a href="404.php">404</a></li> 
                    </ul>
                </li>
                <li> <a href="tables.php"> <i class="icon-grid"></i>Tables </a></li> 
                <li><a href="#elements" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-globe"></i>UI Elements </a>
                    <ul id="elements" class="collapse list-unstyled">
                        <li><a href="ui-buttons.php">Buttons</a></li> 
                        <li><a href="ui-cards.php">Cards</a></li> 
                        <li><a href="ui-progressbars.php">Progress Bar</a></li> 
                        <li><a href="ui-timeline.php">Timeline</a></li>  
                    </ul>
                </li>
            </ul><span class="heading">Ejercicios</span>
            <ul class="list-unstyled">

                <li><a href="#ejercicios" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Ejercicios </a>
                    <ul id="ejercicios" class="collapse list-unstyled">
                    <li><a href="leergrabararchivotexto.php">Leer grabar archivo texto</a></li> 
                        <li><a href="crudmysqli.php">Crud mysqli</a></li> 
                        <li><a href="configuracion.php">Configuracion</a></li> 
                        <li><a href="reportes.php">Reportes(Reports)</a></li> 
                        <li><a href="informe.php">Informe imprimir</a></li>
                        <li><a href="graficas.php">Gráficas</a></li>
                        <li><a href="formsubirachivos.php">Subir archivos</a></li>
                        <li><a href="formtodo.php">Validar formulario</a></li>
                        <li><a href="plantilla.php">Plantilla</a></li>
                        <li><a href="plantillanormalcrud.php">Plantilla normal crud</a></li>  
                        <li><a href="leernuevoexcel.php">Leer nuevo excel</a></li>
                        <li><a href="grabarnuevoexcel.php">Grabar nuevo excel</a></li>
                        <li><a href="ejercicio1.php">ejercicio 1</a></li> 
                        <li><a href="ejercicio2.php">ejercicio 2</a></li> 
                        <li><a href="ejercicio3.php">ejercicio 3</a></li> 
                        <li><a href="ejercicio4.php">ejercicio 4</a></li> 
                        <li><a href="ejercicio5.php">ejercicio 5</a></li> 
                        <li><a href="ejercicio6.php">ejercicio 6</a></li> 
                        <li><a href="ejercicio7.php">ejercicio 7</a></li> 
                        <li><a href="ejercicio8.php">ejercicio 8</a></li> 
                        <li><a href="ejercicio9.php">ejercicio 9</a></li> 
                        <li><a href="ejercicio10.php">ejercicio 10</a></li> 
                        
                    </ul>
                </li>
        </nav>



