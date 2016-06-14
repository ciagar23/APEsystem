<?php

require_once '../../library/config.php';
require_once '../library/functions.php';

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
		
		
		
	case 'upload' :
		$content 	= 'upload.php';
$pageTitle = 'Upload Document';		
		break;
		
	default :
		$content    = 'list.php';	
		$pageTitle 	= 'List of Documents';		
}




$script    = array('product.js');

require_once '../include/template.php';
?>
