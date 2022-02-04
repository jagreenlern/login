<?php
    // Arrays para guardar mensajes y errores:
     $errores = array();
     $mensajes = array();
    // Patrón para usar en expresiones regulares (admite letras acentuadas y espacios):
     $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
     require_once "lib\controleshtml\controleshtml.php";
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


        $validar = new controlform\formvalidate($_POST["email"],"email");


                if ($validar->validate()) $mensajes[]= "email validado";
                else  $errores[]= "email no  validado";
                
               
                //$validar->type="email";
                //$validar->name=$_POST["email"];

                $validar = new controlform\formvalidate($_POST["clave"],"hardpassword");


                if ($validar->validate()) $mensajes[]= "clave dificil validado";
                else  $errores[]= "clave dificil no validado";
                

                $validar = new controlform\formvalidate($_POST["clave2"],"easypassword");


                if ($validar->validate()) $mensajes[]= "clave facil validado";
                else  $errores[]= "clave facil no validado";
                

        
                
                
                
                



                $validar = new controlform\formvalidate($_FILES["imagen"]["name"],"imagen");
                //echo $_FILES["imagen"]["name"];
                
                if ($validar->validate()) $mensajes[]= "imagen validada";
                else  $errores[]= "imagen no  validado";
                


                $validar = new controlform\formvalidate($_FILES["imagen"]["name"],"imagen");
                //echo $_FILES["imagen"]["name"];
                
                if ($validar->validate()) $mensajes[]= "imagen validada";
                else  $errores[]= "imagen no  validado";
                


            
                $validar = new controlform\formvalidate($_FILES["sonido"]["name"],"sonido");
                //echo $_FILES["sonido"]["name"];
                
                if ($validar->validate()) $mensajes[]= "sonido validado";
                else  $errores[]= "sonido no  validado";
               

                $validar = new controlform\formvalidate($_FILES["video"]["name"],"video");
                //echo $_FILES["video"]["name"];
               
                if ($validar->validate()) $mensajes[]= "video validado";
                else  $errores[]="video no  validado";
               

                $validar = new controlform\formvalidate($_FILES["word"]["name"],"word");
                //echo $_FILES["word"]["name"];
               
                if ($validar->validate()) $mensajes[]= "word validado";
                else  $errores[]= "word no  validado";
                
                $validar = new controlform\formvalidate($_FILES["excel"]["name"],"excel");
                //echo $_FILES["excel"]["name"];
                
                if ($validar->validate()) $mensajes[]= "excel validado";
                else  $errores[]= "excel no  validado";
                






                $validar = new controlform\formvalidate($_FILES["imagenes"]["name"],"imagen");
                
                
                if ($validar->validatearray()) $mensajes[] = "validado  imagenes";
                else  $errores[] = "no  imagenes validadas";
                
                $validar = new controlform\formvalidate($_FILES["sonidos"]["name"],"sonido");
                //echo $_FILES["sonidos"]["name"];
                
                if ($validar->validatearray()) $mensajes[]= "validado sonidos";
                else  $errores[]= "no  validados sonidos";
                

                $validar = new controlform\formvalidate($_FILES["videos"]["name"],"video");
                //echo $_FILES["videos"]["name"];
                
                if ($validar->validatearray()) $mensajes[]="validado videos";
                else  $errores[]= "no  videos validados";
                

                $validar = new controlform\formvalidate($_FILES["words"]["name"],"word");
                //echo $_FILES["words"]["name"];
                
                if ($validar->validatearray()) $mensajes[]="validados words";
                else  $errores[]= "no  words validados";
                
                $validar = new controlform\formvalidate($_FILES["excels"]["name"],"excel");
                //echo $_FILES["excels"]["name"];
                
                if ($validar->validatearray()) $mensajes[]= "excels validados";
                else  $errores[]= "no  excels validados";
                

        // Comprobar si llegaron los campos requeridos:
         if( isset($_FILES)) //&& isset($_POST['txtApellidos']) )
        {
            // Nombre:
             if( empty($_FILES) )
                $errores[] = "Debe especificar el nombre";
            else
            {
//echo $_POST["email"];
//$validar = new controlform\formvalidate($_POST["email"],"email");
//$validar->type="email";
//$validar->name=$_POST["email"];

                //if ($validar->validate()) $mensajes[] ="email validado";
//else  $errores[]= "email no  validado";
                // Comprobar mediante una expresión regular, que sólo contiene letras y espacios:
                 //if( preg_match($patron_texto, $_POST['txtNombre']) )
                  //  $mensajes[] = "Nombre: [".$_POST['txtNombre']."]";
                //else
                //    $errores[] = "El nombre sólo puede contener letras y espacios";
            }
            // Apellidos:
            if( empty($_POST['txtApellidos']) )
                $errores[] = "Debe especificar los apellidos";
            else
            {
                // Comprobar mediante una expresión regular, que sólo contienen letras y espacios:
                if( preg_match($patron_texto, $_POST['txtApellidos']) )
                    $mensajes[] = "Apellidos: [".$_POST['txtApellidos']."]";
                else
                    $errores[] = "Los apellidos sólo pueden contener letras y espacios";
            }
            // Edad:
            if( (isset($_POST['txtEdad']) ) && (!empty($_POST['txtEdad'])) )
            {
                if( is_numeric($_POST['txtEdad']) )
                    $mensajes[] ="Edad: [".$_POST['txtEdad']."]";
                else
                    $errores[] = "El campo edad debe contener un número.";
            }
            // Inglés:
            if( isset($_POST['radIngles']) )
                $mensajes[] = "El nivel de inglés es: [".$_POST['radIngles']."]";
            // Coche:
            if( isset($_POST['chkCoche']) )
            {
                /*
                    No hace falta comprobar el valor de la casilla de verificación, ya que si
                    está definido 'chkCoche' es que se ha marcado (al igual que sucede con
                    los botones radio)
                */
                $mensajes[] = "Coche: [SI]";
            }
        }
        else
        {
            echo "<p>No se han especificado todos los datos requeridos.</p>";
        }
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
?>