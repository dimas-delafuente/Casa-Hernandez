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
	$header_title = "Bienvenidos a Casa Hernandez";

	include('../view/inicio.php');
	break;

	case 'empresa':
		$title = "Casa Hernandez - Empresa";
		$header = "";
		$header_title = "Nuestra empresa";

		include('../view/empresa.php');
		break;
	case 'productos':
		$title = "Casa Hernandez - Productos";
		$header = "";
		$header_title = "Conoce nuestros productos";

		include('../view/productos.php');
		break;

	case 'pagina_producto':
		$title = "Casa Hernandez - Productos";
		

		include('../view/pagina_producto.php');
		break;

	case 'contacto':
		$title = "Casa Hernandez - Contacto";
		$header = "";
		$header_title = "Contacta con nosotros";

		include('../view/contacto.php');
		break;

	case 'ofertas':
		$title = "Casa Hernandez - Ofertas";
		$header = "";
		$header_title = "Nuestras ofertas";

		include('../view/ofertas.php');
		break;
}
?>

