
<?php
/*session_start();

if(!isset($_SESSION['rol'])){
    header('location: login.php');
}else{
    if($_SESSION['rol'] != "admin"){
       // header('location: login.php');
    }
    elseif($_SESSION['rol'] != "usuario"){}
     //header('location: login.php');

}*/
require_once 'loginpdo.class.php';

        $db = new loginpdo();
        
        //$db->login($username,$password);
        $db->comprobar($_SERVER["PHP_SELF"]);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    <h1>Colaborador</h1>
</body>
</html>