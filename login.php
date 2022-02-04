<?php
    include_once 'database.php';

    session_start();




    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = new database();
        $con = $db->connect();
        $sql= $con->prepare('SELECT * FROM usuarios WHERE usuario = :username AND password = :password');
          //$stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
        $sql->execute(['username' => $username, 'password' => $password]);

        $row = $sql->fetch(PDO::FETCH_NUM);
        if($row == true){
            // validar rol
            $rol = $row[3];//$row[3];
            echo $rol;
            $_SESSION['rol'] = $rol;

            switch($_SESSION['rol']){
                case "admin":
                    header('location: admin.php');
                break;
    
                case "usuario":
                header('location: colab.php');
                break;
    
                default:
            }
        }else{
            // no existe el usuario
            echo "El usuario o contraseña son incorrectos";
        }

    }
    

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