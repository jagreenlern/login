<?php
require_once "lib/xml/xml.class.php";
$ixml=new xml("nodos.conf.php");
$canciones=$ixml->leerxml();
$ixml->grabarxml($canciones);



?>	