<?php
	/* Connect To Database*/
//	require_once ("../conexion.php");
require_once '..\config\config.php';
require_once '..\lib\conexion\conexionpdo.class.php';
require_once '..\lib\errorreporting\errorreporting.class.php';
require_once '..\lib\paginar\paginar.class.php';
$er = new errorreporting(TRUE,TRUE,TRUE,TRUE);
$er->errorreporting();

$db = new conexionpdo();
$db->connect();
//esto carga los modales.
	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['edit_id'])){
	//require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos

	// quitar toda la porqueria que pueda ser dañina en el envio de informacion como js o  injeccciones sql
	//hay que decile la conexion es obligatorio
    $prod_code = $_POST["edit_code"];
	$prod_name = $_POST["edit_name"];
	$prod_ctry = $_POST["edit_category"];
	$stock = intval($_POST["edit_stock"]);
	$price = floatval($_POST["edit_price"]);
	
	$id=intval($_POST['edit_id']);
	// UPDATE data into database
    $sql = "UPDATE tblprod SET prod_code='".$prod_code."', prod_name='".$prod_name."', prod_ctry='".$prod_ctry."', price='".$price."',  prod_qty='".$stock."' WHERE id='".$id."' ";
    $query = $db->sqlexec($sql);
	
	}
?>