<?php
require_once '../../library/config.php';
require_once '../library/functions.php';

checkUser();

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'flist' :
		$content 	= 'facultylist.php';		
		$pageTitle 	= 'View Subjects';
		break;
	case 'list' :
		$content 	= 'list.php';		
		$pageTitle 	= 'View Subjects';
		break;

	case 'add' :
		$content 	= 'add.php';		
		$pageTitle 	= 'Add Subjects';
		break;

	case 'modify' :
		$content 	= 'modify.php';		
		$pageTitle 	= 'Modify Subjects';
		break;
		
	case 'changepassword' :
		$content 	= 'changepassword.php';		
		$pageTitle 	= 'GSO - Modify Subjects';
		break;

	default :
		$content 	= 'list.php';		
		$pageTitle 	= 'View Subjects';
}

$script    = array('user.js');

require_once '../include/template.php';
?>
