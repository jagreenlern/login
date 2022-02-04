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






	if (empty($_POST['delete_id'])){
		$errors[] = "Id vacío.";
	} elseif (!empty($_POST['delete_id'])){

	// escaping, additionally removing everything that could be (html/javascript-) code
    $id_producto=intval($_POST['delete_id']);
	

	// DELETE FROM  database
    $sql = "DELETE FROM  tblprod WHERE id='$id_producto'";
    $query = $db->sqlexec($sql);
    
			}
?>			