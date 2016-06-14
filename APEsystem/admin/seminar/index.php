<?php
require_once '../../library/config.php';
require_once '../library/functions.php';

checkUser();

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'list' :
		$content 	= 'list.php';	
		$template 	= 'template.php';	
$pageTitle = '';	
		break;

	case 'add' :
		$content 	= 'add.php';
		$template 	= 'template.php';	
$pageTitle = 'Add Seminar';		
		break;

	case 'teacher' :
		$content 	= 'teacher.php';
		$template 	= 'template.php';	
$pageTitle = '';		
		break;
		
	case 'attendance' :
		$content 	= 'attendance.php';	
		$template 	= 'template.php';
$pageTitle = '';		
		break;
		
		
	case 'myattendance' :
		$content 	= 'myattendance.php';
		$template 	= 'template.php';	
$pageTitle = '';		
		break;
		
	case 'printcert' :
		$content 	= 'printcert.php';
		$template 	= 'printtemplate.php';	
$pageTitle = '';		
		break;
		
		
	case 'attendancemodify' :
		$content 	= 'attendancemodify.php';
		$template 	= 'template.php';		
$pageTitle = '';	
		break;
		
	case 'teacherlist' :
		$content 	= 'teacherlist.php';
		$template 	= 'template.php';		
$pageTitle = 'View Seminar';
		break;
		
	case 'uploadcert' :
		$content 	= 'myuploadcert.php';
		$template 	= 'template.php';		
$pageTitle = 'View Seminar';
		break;
		
	case 'print' :
		$content 	= 'printattendance.php';
		$template 	= 'printtemplate.php';		
$pageTitle = '';
		break;

	default :
		$content 	= 'list.php';
		$template 	= 'template.php';
$pageTitle = 'Seminar';			
}

$script    = array('seminar.js');

require_once '../include/'.$template;
?>
