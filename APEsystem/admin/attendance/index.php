<?php
require_once '../../library/config.php';
require_once '../library/functions.php';

checkUser();

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'print' :
		$content 	= 'print.php';
		$temp='printtemplate.php'	;	
$pageTitle = '';		
		break;
	case 'list' :
		$content 	= 'list.php';	
		$temp='template.php';	
		$pageTitle 	= 'View Attendance';		
		break;
		
		
	case 'permonthdetail' :
		$content 	= 'permonthdetail.php';	
		$temp='template.php';	
		$pageTitle 	= 'View Attendance';		
		break;
		
	case 'adminview' :
		$content 	= 'adminview.php';
		$temp='template.php'	;	
$pageTitle = '';
		break;

	case 'add' :
		$content 	= 'add.php';
		$temp='template.php';	
$pageTitle = '';			
		break;
		
	case 'addlist' :
		$content 	= 'addlist.php';	
		$temp='template.php';			
$pageTitle = '';
		break;

	case 'modify' :
		$content 	= 'modify.php';
		$temp='template.php';		
$pageTitle = '';		
		break;
		
	case 'teacher' :
		$content 	= 'teacher.php';
		$temp='template.php';	
$pageTitle = '';		
		break;
		
	case 'permonth' :
		$content 	= 'permonth.php';
		$temp='template.php';	
$pageTitle = 'Summary of Attendance Per Month';		
		break;
		
	case 'permonth2' :
		$content 	= 'permonth2.php';
		$temp='template.php';
$pageTitle = 'Summary of Attendance Per Month';		
		break;
		
	case 'permonth3' :
		$content 	= 'permonth3.php';
		$temp='template.php';	
$pageTitle = 'Summary of Attendance Per Month';	
		break;	
		
	case 'permonthprint' :
		$content 	= 'permonth3.php';
		$temp='printtemplate.php';	
$pageTitle = 'Summary of Attendance Per Month';	
		break;	
		
	case 'persemister' :
		$content 	= 'persemister.php';
		$temp='template.php';	
$pageTitle = 'Summary of Attendance Per Semester';	
		break;	
		
	case 'persemister2' :
		$content 	= 'persemister2.php';
		$temp='template.php';	
$pageTitle = 'Summary of Attendance Per Semester';		
		break;
	case 'persemisterprint' :
		$content 	= 'persemister2.php';
		$temp='printtemplate.php';	
$pageTitle = 'Summary of Attendance Per Semester';		
		break;

	default :
		$content 	= 'time.php';
		$temp='template.php';		
		$pageTitle 	= 'Faculty Attendance';		
}

$script    = array('attendance.js');

require_once '../include/'.$temp;
?>
