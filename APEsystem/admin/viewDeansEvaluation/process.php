<?php
require_once '../../library/config.php';
require_once '../library/functions.php';

checkUser();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
	
	case 'deanseval' :
		deanseval();
		break;
		
	case 'modify' :
		modifyUser();
		break;
		
	case 'changepass' :
		changepass();
		break;
		
	case 'delete' :
		deleteUser();
		break;
    

	default :
	    // if action is not defined or unknown
		// move to main user page
		header('Location: index.php');
}


function deanseval()
{

$teacher = $_POST['txtUserName'];
$dateEval= $_POST['dateEval'];
$timeEval= $_POST['timeEval'];
$classSize= $_POST['classSize'];
$courseNum= $_POST['courseNum'];
$courseDesc= $_POST['courseDesc'];
$A1= isset($_POST['A1']) ? $_POST['A1']: '';
$A2= isset($_POST['A2']) ? $_POST['A2']: '';
$A3= isset($_POST['A3']) ? $_POST['A3']: '';
$A4= isset($_POST['A4']) ? $_POST['A4']: '';
$A5= isset($_POST['A5']) ? $_POST['A5']: '';
$A6= isset($_POST['A6']) ? $_POST['A6']: '';
$A7= isset($_POST['A7']) ? $_POST['A7']: '';
$A8= isset($_POST['A8']) ? $_POST['A8']: '';
$B1= isset($_POST['B1']) ? $_POST['B1']: '';
$B2= isset($_POST['B2']) ? $_POST['B2']: '';
$B3= isset($_POST['B3']) ? $_POST['B3']: '';
$B4= isset($_POST['B4']) ? $_POST['B4']: '';
$B5= isset($_POST['B5']) ? $_POST['B5']: '';
$B6= isset($_POST['B6']) ? $_POST['B6']: '';
$B7= isset($_POST['B7']) ? $_POST['B7']: '';
$C1= isset($_POST['C1']) ? $_POST['C1']: '';
$C2= isset($_POST['C2']) ? $_POST['C2']: '';
$D1= isset($_POST['D1']) ? $_POST['D1']: '';
$D2= isset($_POST['D2']) ? $_POST['D2']: '';
$D3= isset($_POST['D3']) ? $_POST['D3']: '';
$D4= isset($_POST['D4']) ? $_POST['D4']: '';

			
		$sql   = "INSERT INTO tbl_deanseval (d_teacher, d_dateEval, d_timeEval, d_classSize, d_courseNum, d_courseDesc, d_A1, d_A2, d_A3, d_A4, d_A5, d_A6, d_A7, d_A8, d_B1, d_B2, d_B3, d_B4, d_B5, d_B6, d_B7, d_C1, d_C2, d_D1, d_D2, d_D3, d_D4)
		          VALUES ('$teacher', '$dateEval', '$timeEval', '$classSize', '$courseNum', '$courseDesc', '$A1', '$A2', '$A3', '$A4', '$A5', '$A6', '$A7', '$A8', '$B1', '$B2', '$B3', '$B4', '$B5', '$B6', '$B7', '$C1', '$C2', '$D1', '$D2', '$D3', '$D4')";
	
		dbQuery($sql);
		header('Location: index.php?success=' . urlencode('You have Successfully Evaluated'. $teacher));	
	
}

/*
	Modify a user
*/
function modifyUser()
{
    $UserId = $_POST['txtUserId'];
	$Room = $_POST['txtRoom'];
	$Subject = $_POST['txtSubject'];
	$CName = $_POST['txtCName'];
	$From = $_POST['txtFrom'];
	$To  = $_POST['txtTo'];
	$M = (isset($_POST['txtM']) && $_POST['txtM'] != '') ? $_POST['txtM'] : '';
	$T = (isset($_POST['txtT']) && $_POST['txtT'] != '') ? $_POST['txtT'] : '';
	$W = (isset($_POST['txtW']) && $_POST['txtW'] != '') ? $_POST['txtW'] : '';
	$TH = (isset($_POST['txtTH']) && $_POST['txtTH'] != '') ? $_POST['txtTH'] : '';
	$F = (isset($_POST['txtF']) && $_POST['txtF'] != '') ? $_POST['txtF'] : '';
	$S = (isset($_POST['txtS']) && $_POST['txtS'] != '') ? $_POST['txtS'] : '';
	
	$sql   = "UPDATE tbl_schedule 
	          SET  s_room='$Room', s_subject='$Subject', s_class='$CName', s_from='$From', s_to='$To', s_m='$M', s_t='$T', s_w='$W', s_th='$TH', s_f='$F', s_s='$S'
			  WHERE s_id = $UserId";

	dbQuery($sql);
	header('Location: index.php?success=' . urlencode('You have Successfully Modified this Time Slot'));

}/*
	Modify a user
*/
function changepass()
{
	$session = $_SESSION["username"];	
    $Password = $_POST['txtPassword'];
    $Password2 = $_POST['txtPassword2'];
	
	if ($Password != $Password2)
	{
	header('Location: index.php?view=changepassword&alert=' . urlencode('PassWord Do not Match'));
	}
	else
	{
	
	$sql   = "UPDATE tbl_user 
	          SET user_password = PASSWORD('$Password')
			  WHERE user_name = '$session'";

	dbQuery($sql);
	header('Location: index.php?view=changepassword&alert=' . urlencode('You have Successfully Modified this User'));
}
}

/*
	Remove a user
*/
function deleteUser()
{
	if (isset($_GET['userId']) && (int)$_GET['userId'] > 0) {
		$userId = (int)$_GET['userId'];
	} else {
		header('Location: index.php');
	}
	
	
	$sql = "DELETE FROM tbl_schedule 
	        WHERE s_id = $userId";
	dbQuery($sql);
	
	header('Location: index.php?success=' . urlencode('You have Successfully Deleted a Time Slot'));
}
?>
