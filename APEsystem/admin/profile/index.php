<?php
require_once '../../library/config.php';
require_once '../library/functions.php';

checkUser();

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'list' :
		$content 	= 'list.php';
$pageTitle = '';		
		break;

	case 'add' :
		$content 	= 'add.php';
$pageTitle = '';		
		break;

	case 'modify' :
		$content 	= 'modify.php';	
$pageTitle = 'Modify Profile';	
		break;
		
	case 'documents' :
		$content 	= 'documents.php';	
$pageTitle = '';	
		break;

	default :
		$content 	= 'detail.php';		
		$pageTitle 	= 'View Profile';
}

$script    = array('profile.js');

require_once '../include/template.php';
?>
