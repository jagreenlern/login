<?php
/*if(!isset($_COOKIE["PHPSESSID"]))
{
  session_start();
}
session_unset("rol");

        //session_destroy();*/

        require_once "config\config.php";   
        require_once 'lib\conexion\loginpdo.class.php';

    





        $db = new loginpdo();
        
        //$db->login($username,$password);
        $db->logout();

    
    

?>