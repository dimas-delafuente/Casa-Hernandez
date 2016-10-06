<?php

date_default_timezone_set('UTC');

/*
 * This is the controller php file.
 * It has possible passed values of $action and $category_id
 * 
 * 1) None - this is the inex page so show the default category ($category_id=1)
 * 2) POST input
 * 3) GET input
 */

//Need the files to connect to the DB and to make functions available
require ("../model/database.php");
require ("../model/productos_db.php");
require ("../model/categorias_db.php");


/* A variable 'action' is needed, it can be passed by POST, GET or not at all
 * If not at all, then make action = default of list_products
 */

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
	$action = filter_input(INPUT_GET, 'action');
	if ($action == NULL) {
		$action = 'inicio';
	}
}


switch ($action) {
	case 'inicio':

	$title = "Casa Hernandez";
	$header = "";
	$header_title = "Inicio";

	include('../view/inicio.php');
	break;

}
?>

