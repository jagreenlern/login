<?php
require_once "config/config.php";   
    include_once 'lib/conexion/loginpdo.class.php';

    //session_start();




    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = new loginpdo();
        $con = $db->connect();
        $db->login($username,$password);
        //$db->logout();

    }//if
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        Username: <br/><input type="text" name="username"><br/>
        Password: <br/><input type="text" name="password"><br/>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>