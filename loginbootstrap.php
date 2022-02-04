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
    <link rel="stylesheet" href="css/pages/login.css">
</head>

<body>




<?php
require_once "config\config.php";   
require_once 'lib\conexion\loginpdo.class.php';

    //session_start();


    $username = 'usuario';
    $password = 'usuario';

    $db = new loginpdo();
    $con = $db->connect();
    $db->login($username,$password);

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = new loginpdo();
        $con = $db->connect();
        $db->login($username,$password);
        //$db->logout();

    }//if
    

?>


<style>


.form-group {                               /* make the box translucent (20% opaque) */

   margin-bottom: 5px;
   /*text-align:justify;*/
   
   

}
#center {                               /* make the box translucent (20% opaque) */
   
  text-align: center;

   
   
   

}
#backgroundcolor {                               /* make the box translucent (20% opaque) */
   
   background-color: orchid;

   
   

}
.transparente {                               /* make the box translucent (20% opaque) */
   border:1px solid red;
   background-color: black;
   color: red;
   opacity: 0.2;
   filter: alpha(opacity=20);       /* IE8 and lower */
   zoom: 1;       /* set "zoom", "width" or "height" to trigger "hasLayout" in IE 7 and lower */
}
        </style>

<!--====================================================
                        PAGE CONTENT
======================================================--> 
      <section class="hero-area">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 ">
                <div class="contact-h-cont">
                  <h3 class="text-center"><img src="img/logo.png" class="img-fluid" alt=""></h3><br>
                  <form action="" method="POST">
                    

                  <div class="form-group" >
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="username" id="nombre" pattern="[A-Za-z]{1,9}" />
        </div>
    
              
    <div class="form-group" >
        <label for="clave2">Clave:</label><br>
        <input type="password" id="clave2" name="password"   title="UpperCase, LowerCase and Number" >
    </div>

                   
                    
                    <div class="form-group" id="center">
<input class="btn btn-general btn-blue" type="reset">
<input class="btn btn-general btn-blue" type="submit" alt="Submit" name="form1" value="Enviar">
<a href="registerbootstrap.php">REGISTRO</a>
</div>

                  </form>
                </div>
            </div>
          </div>  
        </div>
      </section>
      
    <!--Global Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>