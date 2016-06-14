<?php
require_once '../../library/config.php';
require_once '../library/functions.php';

checkUser();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
	
	case 'add' :
		add();
		break;
		
	case 'modify' :
		modify();
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


/*
	Modify a user
*/
function add()
{
    $Teacher  = $_POST['txtTeacher'];
    $From  = $_POST['txtFrom'];
	$Att = (isset($_POST['attendance']) && $_POST['attendance'] != '') ? $_POST['attendance'] : '';
	$Remarks = (isset($_POST['remarks']) && $_POST['remarks'] != '') ? $_POST['remarks'] : '';
	
	$sql   = "INSERT INTO tbl_attendance (a_teacher, a_time, a_date, a_status, a_remark)
		          VALUES ('$Teacher','$From',now(),'$Att','$Remarks')";
	dbQuery($sql);
	header('Location: index.php?success=' . urlencode('You have Successfully Checked the Attendance'));

}/*
	Modify a user
*/

/*
	Modify a user
*/
function modify()
{
    $Teacher  = $_POST['txtTeacher'];
    $aId  = $_POST['aId'];
    $From  = $_POST['txtFrom'];
	$Att = (isset($_POST['attendance']) && $_POST['attendance'] != '') ? $_POST['attendance'] : '';
	$Remarks = (isset($_POST['remarks']) && $_POST['remarks'] != '') ? $_POST['remarks'] : '';
	
	$sql   = "INSERT INTO tbl_attendance (a_teacher, a_time, a_date, a_status, a_remark)
		          VALUES ('$Teacher','$From',now(),'$Att','$Remarks')";
				  
	$sql   = "UPDATE tbl_attendance 
	          SET a_status = '$Att', a_remark ='$Remarks'
			  WHERE a_id = $aId";
	
	dbQuery($sql);
	header('Location: index.php?success=' . urlencode('You have Successfully Modify the Attendance'));

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
