<?php
//include
//include_once
require_once "lib\controleshtml\controleshtml.php";
$datalist= array("Internet explorer", "Firefox");
//use controllist\controllist as leon;
//De esta forma leon se convierte en el valor completo de la clase y del namespace
$value="";
$name="nombre";
$type="";
$id="backgroundcolor";
$class="";
$size=5;
$autofocus=FALSE;
$height=0;
$width=0;
$acceptcharset="UTF-8";
$action="/";
$target="_self";
$autocomplete="off";
$enctype="application/x-www-form-urlencoded";
$method="POST";
$novalidate=FALSE;
$disabled=FALSE;
$multiple=FALSE;
$form = new controlform\form($id, $class,$acceptcharset,$action,$target,$autocomplete, $enctype, $method,$novalidate,$disabled);
echo $form->printstartformhtml();
$email = new controlfom\controlemail\controlemail($value,$name,$type,$id,$class,$size,$autofocus,$height,$width,$multiple);
echo $email;

$lista = new controlfom\controllist\controllist($value,$name,$type,$id,$class,$size,$autofocus,$height,$width,$datalist);
$submit = new controlfom\controlsubmit\controlsubmit($value,$name,$type,$id,$class,$size,$autofocus,$height,$width,$datalist);
$lista->printlist();    
$lista->printlistbootstrap();
$lista->printcheckboxbootstrap();
$lista->printcheckbox();
$lista->printradio();
$lista->printradiobootstrap();
$email->printemail();
$email->printemailbootstrap();
$submit->printsubmit();


                  // Patrón para usar en expresiones regulares (admite letras acentuadas y espacios):
                  //$patron_texto = "^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$";
                  //echo '<input name="campo1" type="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+">';
//echo '<input id="prodId" name="string" type="hidden" value="^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$';
//echo '<input id="prodId" name="pattercampo1" type="hidden" value="[^@\s]+@[^@\s]+\.[^@\s]+">';
                                                                            
if (isset($_GET["campo1"])){
$validar = new controlform\formvalidate($_GET["campo1"],"email");
//print_r($validar);
if ($validar->validate()) echo "validado";
else echo "no  validado";
echo $form->printendformhtml();

}
?>