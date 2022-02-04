
<?php
if(!isset($_COOKIE["PHPSESSID"]))
{
  session_start();
}

class database{

    public $host;
    public $db;
    public $user;
    public $password;
    public $charset;
    public $rol;
    public $con;


    public function __construct($host = 'localhost',$db = 'login',    $user = 'root',$password = '',$charset = 'utf8mb4')
    {
        $this->host = 'localhost';
        $this->db = 'login';
        $this->user = 'root';
        $this->password = '';
        $this->charset = 'utf8mb4';
    }

    public function connect(){
        try{
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            
            $pdo = new PDO($connection, $this->user, $this->password, $options);
            $this->con=$pdo;
            return $pdo;
        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }
    }//funcion


    public function login($username,$password){
    $sql= $this->con->prepare('SELECT * FROM usuarios WHERE usuario = :username AND password = :password');
          //$stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
        $sql->execute(['username' => $username, 'password' => $password]);

        $row = $sql->fetch(PDO::FETCH_NUM);
        if($row == true){
            // validar rol
            $this->rol = $row[3];//$row[3];
            echo $this->rol;
            $_SESSION['rol'] = $this->rol;

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

    }//fun




    public function logout(){
      
        session_unset("rol");
        header('location: loginclass.php');
        
                //session_destroy();
    }//funcion

    public function comprobar ($url="loc")
{


    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != "admin"){
           //header('location: login.php');
        }
        elseif($_SESSION['rol'] != "usuario"){

         //header('location: login.php');
        }

    }
}//FUNC
}//class

?>
