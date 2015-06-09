<!doctype html>
<html>
<head>
</head>
<body>

<?php

if (isset($_GET['pagina'])) {

switch ( $_GET ["pagina"] ) {
		
	case 'missao';
	include "missao.php";
	break;
	
	case 'visao';
	include "visao.php";
	break;
	
	case'valores';
	include "valores.php";
	break;
		
	case 'mesa';
	include "mesa.php";
	break;
	
	case 'cadeira';
	include "cadeira.php";
	break;
	
	case 'diversos';
	include "diversos.php";
	break;
	
	case 'pedido';
	include "pedido.php";
	break;
	
	case 'contato';
	include "contato.php";
	break;
	
	default:
	include ("home.php");
	break;
	
}

} else {
	
include ("home.php");

}

?>

</body>
</html>