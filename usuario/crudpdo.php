<!--
author: Boostraptheme
author URL: https://boostraptheme.com
License: Creative Commons Attribution 4.0 Unported
License URL: https://creativecommons.org/licenses/by/4.0/
-->

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
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate/animate.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
<!--jagreen-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/custom.css">
  </head>

  <body id="page-top">
<?php
require_once 'head.php';
//require_once 'lib\conexion\conexionpdo.class.php';
//require_once 'lib\errorreporting\errorreporting.class.php';
//require_once 'lib\convertirdatos\convertirdatos.class.php';

//$er = new errorreporting(TRUE,TRUE,TRUE,TRUE);
//$er->errorreprting();





$result = $db->query("insert into tblprod(prod_code,prod_name,prod_ctry,prod_qty,price) values(555,'test','test',2,1)","insertar");
  
$result =$db->query("UPDATE tblprod SET prod_ctry = 'value1' WHERE prod_name='test';","actualizar");
$result = $db->query("delete from tblprod where prod_name='test'","borrar");


$db->querytabla  ("SELECT * FROM tblprod;","<tr><th>Id</th><th>Prod_code</th><th>Prod_name</th><th>Prod_ctry</th><th>Prod_qty</th><th>Price</th></tr>");



$db->connect();
echo "Conexion :" . $db->sqllastid() . "<br>";
$db->sqlexec("insert into tblprod(prod_code,prod_name,prod_ctry,prod_qty,price) values(555,'test','test',2,1)",FALSE,"insertado");

$db->sqlexec("UPDATE tblprod SET prod_ctry = 'value1' WHERE prod_name='test';",FALSE,"Actualizado");

$db->sqlexec("delete from tblprod where prod_name='test'",FALSE,"Borrado");
  

//$db->fetchall();
$array = $db->fetchall("SELECT * FROM tblprod;");//solo debuelbe  todos elementos
//var_dump($array);
//print_r($array);
echo "<br>";
foreach ($array as $elemento)
{
  //echo "$indice => " . convertirdatos::convertir($elemento,"string") . "<br>";
//   echo "{$indice} => {$elemento["id"]} <br>";
echo $elemento["prod_name"] . "<br>";

}
$db->fetchalltable("SELECT * FROM tblprod;",FALSE,"<tr><th>Id</th><th>Prod_code</th><th>Prod_name</th><th>Prod_ctry</th><th>Prod_qty</th><th>Price</th></tr>");
//$db->fetchalltableiterator("SELECT * FROM tblprod;",FALSE,"<tr><th>Id</th><th>Prod_code</th><th>Prod_name</th><th>Prod_ctry</th><th>Prod_qty</th><th>Price</th></tr>");


?>

    <!--Global JavaScript -->
   <!-- <script src="js/jquery/jquery.min.js"></script>-->
   <script src="js/popper/popper.min.js"></script>
    <!--<script src="js/bootstrap/bootstrap.min.js"></script>-->
    <script src="js/wow/wow.min.js"></script>
    <script src="js/owl-carousel/owl.carousel.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery-easing/jquery.easing.min.js"></script> 
    <script src="js/custom.js"></script> 
  </body>

</html>