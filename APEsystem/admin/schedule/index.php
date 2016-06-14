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
		
	case 'adminview' :
		$content 	= 'adminview.php';	
$pageTitle = 'My Schedule';	
		break;

	case 'add' :
		$content 	= 'add.php';	
$pageTitle = 'Add Schedule';	
		break;
		
	case 'addlist' :
		$content 	= 'addlist.php';
$pageTitle = 'Add Schedule';		
		break;

	case 'modify' :
		$content 	= 'modify.php';	
$pageTitle = '';	
		break;
		
	case 'changepassword' :
		$content 	= 'changepassword.php';	
$pageTitle = '';
		break;

	default :
		$content 	= 'teacher.php';
		$pageTitle 	= 'Schedule';		
}

$script    = array('schedule.js');

require_once '../include/template.php';
?>
