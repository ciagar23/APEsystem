<?php
require_once '../../library/config.php';
require_once '../library/functions.php';

checkUser();

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'list' :
		$content 	= 'list.php';		
		break;
		
	case 'deanseval' :
		$content 	= 'deanseval.php';		
		break;

	case 'add' :
		$content 	= 'add.php';		
		break;
		
	case 'addlist' :
		$content 	= 'addlist.php';		
		break;

	case 'modify' :
		$content 	= 'modify.php';		
		break;
		
	case 'changepassword' :
		$content 	= 'changepassword.php';	
		break;

	default :
		$content 	= 'teacher.php';
		$pageTitle 	= 'Schedule';		
}

$script    = array('evaluation.js');

require_once '../include/template.php';
?>
