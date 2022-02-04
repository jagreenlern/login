<?php
	
	/* Connect To Database*/
//	require_once ("../conexion.php");
$finales=0;
require_once '..\config\config.php';
require_once '..\lib\conexion\conexionpdo.class.php';
require_once '..\lib\errorreporting\errorreporting.class.php';
require_once '..\lib\paginar\paginar.class.php';
$er = new errorreporting(TRUE,TRUE,TRUE,TRUE);
$er->errorreporting();

$db = new conexionpdo();
$db->connect();

	if (empty($_POST['name'])){
		$errors[] = "Ingresa el nombre del producto.";
	} elseif (!empty($_POST['name'])){
	
	// escaping, additionally removing everything that could be (html/javascript-) code
    $prod_code = $_POST["code"];
	$prod_name = $_POST["name"];
	$prod_ctry = $_POST["category"];
	$stock = intval($_POST["stock"]);
	$price = floatval($_POST["price"]);
	

	// REGISTER data into database
    $sql = "INSERT INTO tblprod(id, prod_code, prod_name, prod_ctry, prod_qty, price) VALUES (NULL,'$prod_code','$prod_name','$prod_ctry','$stock','$price')";
    $query = $db->sqlexec($sql);
    
			}
?>			