<?php
require_once '../../library/config.php';
require_once '../library/functions.php';

checkUser();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
	
	case 'deanseval' :
		deanseval();
		break;
	
	case 'modifyeval' :
		modifyeval();
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


function modifyeval()
{

$teacher = $_POST['txtUserName'];
$fullname = $_POST['fullname'];
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
$A9= isset($_POST['A9']) ? $_POST['A9']: '';
$A10= isset($_POST['A10']) ? $_POST['A10']: '';
$A11= isset($_POST['A11']) ? $_POST['A11']: '';
$A12= isset($_POST['A12']) ? $_POST['A12']: '';
$A13= isset($_POST['A13']) ? $_POST['A13']: '';
$A14= isset($_POST['A14']) ? $_POST['A14']: '';
$A15= isset($_POST['A15']) ? $_POST['A15']: '';
$A16= isset($_POST['A16']) ? $_POST['A16']: '';
$A17= isset($_POST['A17']) ? $_POST['A17']: '';
$A18= isset($_POST['A18']) ? $_POST['A18']: '';
$A19= isset($_POST['A19']) ? $_POST['A19']: '';
$A20= isset($_POST['A20']) ? $_POST['A20']: '';
$A21= isset($_POST['A21']) ? $_POST['A21']: '';
$A22= isset($_POST['A22']) ? $_POST['A22']: '';
$A23= isset($_POST['A23']) ? $_POST['A23']: '';
$A24= isset($_POST['A24']) ? $_POST['A24']: '';
$A25= isset($_POST['A25']) ? $_POST['A25']: '';
$A26= isset($_POST['A26']) ? $_POST['A26']: '';
$A27= isset($_POST['A27']) ? $_POST['A27']: '';
$A28= isset($_POST['A28']) ? $_POST['A28']: '';
$A29= isset($_POST['A29']) ? $_POST['A29']: '';
$A30= isset($_POST['A30']) ? $_POST['A30']: '';
$A31= isset($_POST['A31']) ? $_POST['A31']: '';
$A32= isset($_POST['A32']) ? $_POST['A32']: '';
$A33= isset($_POST['A33']) ? $_POST['A33']: '';


$total = $A1 + $A2 + $A3 + $A4 + $A5 + $A6 + $A7 + $A8 + $A9 + $A10 + $A11 + $A12 + $A13 + $A14 + $A15 + $A16 + $A17 + $A18 + $A19 + $A20 + $A21 + $A22 + $A23 + $A24 + $A25 + $A26 + $A27 + $A28 + $A29 + $A30 + $A31 + $A32 + $A33;
			
		$sql   = "UPDATE tbl_studentseval SET d_teacher='$teacher', d_dateEval='$dateEval', d_timeEval='$timeEval', d_classSize='$classSize', d_courseNum='$courseNum', d_courseDesc='$courseDesc', d_A1='$A1', d_A2='$A2', d_A3='$A3', d_A4='$A4', d_A5='$A5', d_A6='$A6', d_A7='$A7', d_A8='$A8', d_A9='$A9', d_A10='$A10', d_A11='$A11', d_A12='$A12', d_A13='$A13', d_A14='$A14', d_A15='$A15', d_A16='$A16', d_A17='$A17', d_A18='$A18', d_A19='$A19', d_A10='$A10', d_A11='$A11', d_A12='$A12', d_A13='$A13', d_A14='$A14', d_A15='$A15', d_A16='$A16', d_A17='$A17', d_A18='$A18', d_A19='$A19', d_A20='$A20', d_A21='$A21', d_A22='$A22', d_A23='$A23', d_A24='$A24', d_A25='$A25', d_A26='$A26', d_A27='$A27', d_A28='$A28', d_A29='$A29', d_A30='$A30', d_A31='$A31', d_A32='$A32', d_A33='$A33', d_total='$total' WHERE d_teacher='$teacher'";
	
		dbQuery($sql);
		header('Location: index.php?success=' . urlencode('You have Successfully Reevaluated '. $fullname));	
	
}

/*
	Modify a user
*/

function deanseval()
{

$teacher = $_POST['txtUserName'];
$fullname = $_POST['fullname'];
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
$A9= isset($_POST['A9']) ? $_POST['A9']: '';
$A10= isset($_POST['A10']) ? $_POST['A10']: '';
$A11= isset($_POST['A11']) ? $_POST['A11']: '';
$A12= isset($_POST['A12']) ? $_POST['A12']: '';
$A13= isset($_POST['A13']) ? $_POST['A13']: '';
$A14= isset($_POST['A14']) ? $_POST['A14']: '';
$A15= isset($_POST['A15']) ? $_POST['A15']: '';
$A16= isset($_POST['A16']) ? $_POST['A16']: '';
$A17= isset($_POST['A17']) ? $_POST['A17']: '';
$A18= isset($_POST['A18']) ? $_POST['A18']: '';
$A19= isset($_POST['A19']) ? $_POST['A19']: '';
$A20= isset($_POST['A20']) ? $_POST['A20']: '';
$A21= isset($_POST['A21']) ? $_POST['A21']: '';
$A22= isset($_POST['A22']) ? $_POST['A22']: '';
$A23= isset($_POST['A23']) ? $_POST['A23']: '';
$A24= isset($_POST['A24']) ? $_POST['A24']: '';
$A25= isset($_POST['A25']) ? $_POST['A25']: '';
$A26= isset($_POST['A26']) ? $_POST['A26']: '';
$A27= isset($_POST['A27']) ? $_POST['A27']: '';
$A28= isset($_POST['A28']) ? $_POST['A28']: '';
$A29= isset($_POST['A29']) ? $_POST['A29']: '';
$A30= isset($_POST['A30']) ? $_POST['A30']: '';
$A31= isset($_POST['A31']) ? $_POST['A31']: '';
$A32= isset($_POST['A32']) ? $_POST['A32']: '';
$A33= isset($_POST['A33']) ? $_POST['A33']: '';

$total = $A1 + $A2 + $A3 + $A4 + $A5 + $A6 + $A7 + $A8 + $A9 + $A10 + $A11 + $A12 + $A13 + $A14 + $A15 + $A16 + $A17 + $A18 + $A19 + $A20 + $A21 + $A22 + $A23 + $A24 + $A25 + $A26 + $A27 + $A28 + $A29 + $A30 + $A31 + $A32 + $A33;
			
		$sql   = "INSERT INTO tbl_studentseval (d_teacher, d_dateEval, d_timeEval, d_classSize, d_courseNum, d_courseDesc, d_A1, d_A2, d_A3, d_A4, d_A5, d_A6, d_A7, d_A8, d_A9, d_A10, d_A11, d_A12, d_A13, d_A14, d_A15, d_A16, d_A17, d_A18, d_A19, d_A20, d_A21, d_A22, d_A23, d_A24, d_A25, d_A26, d_A27, d_A28, d_A29, d_A30, d_A31, d_A32, d_A33, d_total)
		          VALUES ('$teacher', '$dateEval', '$timeEval', '$classSize', '$courseNum', '$courseDesc', '$A1', '$A2', '$A3', '$A4', '$A5', '$A6', '$A7', '$A8', '$A9', '$A10', '$A11', '$A12', '$A13', '$A14', '$A15', '$A16', '$A17', '$A18', '$A19', '$A20', '$A21', '$A22', '$A23', '$A24', '$A25', '$A26', '$A27', '$A28', '$A29', '$A30', '$A31', '$A32', '$A33', '$total')";
	
		dbQuery($sql);
		header('Location: index.php?success=' . urlencode('You have Successfully Evaluated '. $fullname));	
	
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
