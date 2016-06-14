<?php
require_once '../../library/config.php';
require_once '../library/functions.php';

checkUser();

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'chair' :
		$content 	= 'list.php';		
		$pageTitle 	= 'Area Chair Evaluation Raking';
		$temp='template.php';	
		break;
	case 'student' :
		$content 	= 'student.php';		
		$pageTitle 	= 'Student Evaluation Raking';
		$temp='template.php';	
		break;
	case 'print' :
		$content 	= 'list.php';		
		$pageTitle 	= 'Student Evaluation Raking';
		$temp='printtemplate.php';	
		break;
	case 'point' :
		$content 	= 'point.php';		
		$pageTitle 	= 'Point of Evaluation  <br>for Annual Performance Evaluation Ranking';
		$temp='template.php';	
		break;

	default :
		$content 	= 'list.php';		
		$pageTitle 	= 'Deans Evaluation Raking';
		$temp='template.php';	
}

$script    = array('user.js');

require_once '../include/'.$temp;
?>
