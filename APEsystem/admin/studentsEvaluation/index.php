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
		
	case 'modifyeval' :
		$content 	= 'modifyeval.php';		
$pageTitle = '';
		break;
		
	case 'deanseval' :
		$content 	= 'deanseval.php';	
$pageTitle = 'Student Evaluation Form';	
		break;

	case 'add' :
		$content 	= 'add.php';	
$pageTitle = '';	
		break;
		
	case 'addlist' :
		$content 	= 'addlist.php';
$pageTitle = '';		
		break;

	case 'vieweval' :
		$content 	= 'viewEval.php';	
$pageTitle = 'View Evaluation';	
		break;
		
	case 'changepassword' :
		$content 	= 'changepassword.php';	
$pageTitle = '';
		break;

	default :
		$content 	= 'teacher.php';
		$pageTitle 	= 'Student Evaluation';	
	
}

$script    = array('evaluation.js');

require_once '../include/template.php';
?>
