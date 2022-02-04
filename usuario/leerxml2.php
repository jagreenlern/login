<?php

$canciones=simplexml_load_file("nodos.conf.xml") or die("Error: Cannot create object");
//print_r($xml);





foreach($canciones as $cancion)
{
    echo "Baseurl: " . $cancion->baseurl ."<br>";
echo "Controllerdefault: " . $cancion->controllerdefault ."<br>";
echo "Actiondefault: " . $cancion->actiondefault . "<br>";
echo "Idioma: " . $cancion->idioma ."<br>";
echo "Fondo: " . $cancion->fondo ."<br>";
echo "Letras: " . $cancion->letras ."<br>";

}


?>