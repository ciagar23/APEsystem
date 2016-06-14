<?php
require_once '../../library/config.php';
require_once '../library/functions.php';

checkUser();

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'list' :
		$content 	= 'list.php';	
		$pageTitle 	= 'View History';		
		break;
		
	case 'adminview' :
		$content 	= 'adminview.php';
		$pageTitle 	= 'View History';		
		break;

	case 'add' :
		$content 	= 'add.php';		
		$pageTitle 	= 'View History';		
		break;
		
	case 'addlist' :
		$content 	= 'addlist.php';	
		$pageTitle 	= 'View History';			
		break;

	case 'modify' :
		$content 	= 'modify.php';	
		$pageTitle 	= 'View History';			
		break;
		
	case 'teacher' :
		$content 	= 'teacher.php';	
		$pageTitle 	= 'View History';		
		break;	
		
	case 'teachersched' :
		$content 	= 'teachersched.php';	
		$pageTitle 	= 'View History';		
		break;

	default :
		$content 	= 'teacher.php';
		$pageTitle 	= 'Faculty Attendance';		
}

$script    = array('attendance.js');

require_once '../include/template.php';
?>
