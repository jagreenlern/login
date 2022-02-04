<?php
 require_once "head.php";
    // Arrays para guardar mensajes y errores:
     $errores = array();
     $mensajes = array();
    // Patrón para usar en expresiones regulares (admite letras acentuadas y espacios):
     $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
     require_once baseurl . "lib\controleshtml\controleshtml.php";
    // Comprobar si se ha enviado el formulario:
 // if( !empty($_POST) )
    {
      //  echo "FORMULARIO RECIBIDO:<br/>";
      //  echo "====================<p/>";
        // Mostrar la información recibida del formulario:
       //     print_r( $_POST);
       // echo "<hr/>";
        
       // print_r( $_FILES );
       // echo "<hr/>";


        //$validar = new controlform\formvalidate($_POST["email"],"email");
        $validar = new controlform\formvalidate();

                if ($validar->validate($_POST["email"],"email")) $mensajes[]= "email validado";
                else  $errores[]= "email no validado";
                
               
                //$validar->type="email";
                //$validar->name=$_POST["email"];

//                $validar = new controlform\formvalidate($_POST["clave"],"hardpassword");


                if ($validar->validate($_POST["clave"],"hardpassword")) $mensajes[]= "clave dificil validado";

            
                else  $errores[]= "clave dificil no validado";

                

  //              $validar = new controlform\formvalidate($_POST["clave2"],"easypassword");


                if ($validar->validate($_POST["clave2"],"easypassword")) $mensajes[]= "clave facil validado";
                else  $errores[]= "clave facil no validado";
                

        
                
                
                
                



    //            $validar = new controlform\formvalidate($_FILES["imagen"]["name"],"imagen");
                //echo $_FILES["imagen"]["name"];
                
                if ($validar->validate($_FILES["imagen"]["name"],"imagen")) $mensajes[]= "imagen validada";
                else  $errores[]= "imagen no validado";
                


      //          $validar = new controlform\formvalidate($_FILES["imagen"]["name"],"imagen");
                //echo $_FILES["imagen"]["name"];
                
                if ($validar->validate($_FILES["imagen"]["name"],"imagen")) $mensajes[]= "imagen validada";
                else  $errores[]= "imagen no validado";
                


            
       //         $validar = new controlform\formvalidate($_FILES["sonido"]["name"],"sonido");
                //echo $_FILES["sonido"]["name"];
                
                if ($validar->validate($_FILES["sonido"]["name"],"sonido")) $mensajes[]= "sonido validado";
                else  $errores[]= "sonido no validado";
               

         //       $validar = new controlform\formvalidate($_FILES["video"]["name"],"video");
                //echo $_FILES["video"]["name"];
               
                if ($validar->validate($_FILES["video"]["name"],"video")) $mensajes[]= "video validado";
                else  $errores[]="video no validado";
               

                //$validar = new controlform\formvalidate($_FILES["word"]["name"],"word");
                //echo $_FILES["word"]["name"];
               
                if ($validar->validate($_FILES["word"]["name"],"word")) $mensajes[]= "word validado";
                else  $errores[]= "word no validado";
                
                //$validar = new controlform\formvalidate($_FILES["excel"]["name"],"excel");
                //echo $_FILES["excel"]["name"];
                
                if ($validar->validate($_FILES["excel"]["name"],"excel")) $mensajes[]= "excel validado";
                else  $errores[]= "excel no validado";
                






                //$validar = new controlform\formvalidate($_FILES["imagenes"]["name"],"imagen");
                
                
                if ($validar->validatearray($_FILES["imagenes"]["name"],"imagen")) $mensajes[] = "validado  imagenes";
                else  $errores[] = "no imagenes validadas";
                
                //$validar = new controlform\formvalidate($_FILES["sonidos"]["name"],"sonido");
                //echo $_FILES["sonidos"]["name"];
                
                if ($validar->validatearray($_FILES["sonidos"]["name"],"sonido")) $mensajes[]= "validado sonidos";
                else  $errores[]= "no validados sonidos";
                

                //$validar = new controlform\formvalidate($_FILES["videos"]["name"],"video");
                //echo $_FILES["videos"]["name"];
                
                if ($validar->validatearray($_FILES["videos"]["name"],"video")) $mensajes[]="validado videos";
                else  $errores[]= "no videos validados";
                

                //$validar = new controlform\formvalidate($_FILES["words"]["name"],"word");
                //echo $_FILES["words"]["name"];
                
                if ($validar->validatearray($_FILES["words"]["name"],"word")) $mensajes[]="validados words";
                else  $errores[]= "no words validados";
                
                //$validar = new controlform\formvalidate($_FILES["excels"]["name"],"excel");
                //echo $_FILES["excels"]["name"];
                
                if ($validar->validatearray($_FILES["excels"]["name"],"excel")) $mensajes[]= "excels validados";
                else  $errores[]= "no excels validados";
                

                //mensajes y errores
        // Si han habido errores se muestran, sino se mostrán los mensajes
         $validar->mostrarmensajes($mensajes);
         $validar->mostraerrores($errores);
      
    }
   // else
   // {
    //    echo "<p>No se ha enviado el formulario.</p>";
    //}
    //jag echo "<p><a href='03_form3.html'>Haz clic aquí para volver al formulario</a></p>";

    require_once "foot.php";
?>
