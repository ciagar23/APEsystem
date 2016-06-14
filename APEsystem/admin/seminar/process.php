<?php
require_once '../../library/config.php';
require_once '../library/functions.php';

checkUser();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
	
	case 'addSem' :
		addSem();
		break;
	
	case 'upload' :
		upload();
		break;
	
	case 'modifySem' :
		modifySem();
		break;
		
	case 'add' :
		addUser();
		break;
		
	case 'modify' :
		modifyUser();
		break;
		
	case 'changepass' :
		changepass();
		break;
		
	case 'delete' :
		delete();
		break;
    

	default :
	    // if action is not defined or unknown
		// move to main user page
		header('Location: index.php');
}


function addUser()
{
    $semName = $_POST['semName'];
    $Location = $_POST['Location'];
    $date = $_POST['date'];
    $time = $_POST['time'];
		
		$sql   = "INSERT INTO tbl_seminar (sem_name, sem_location, sem_date, sem_time)
		          VALUES ('$semName', '$Location', '$date', '$time')";
	
		dbQuery($sql);
		header('Location: index.php?success=' . urlencode('You have Successfully Added a Seminar'));	

}

/*
	Modify a user
*/

function addSem()
{

	$semId = $_POST['semId'];
$userId = $_POST['userId'];
$attendance = $_POST['attendance'];
$remarks = $_POST['remarks'];
		
		
	$images = uploadProductImage('fleImage', SRV_ROOT . 'profileImages/');

	$mainImage = $images['image'];
	$thumbnail = $images['thumbnail'];
	
	
		$sql   = "INSERT INTO tbl_sematt (a_semid, a_teacher, a_status, a_remark, a_cert)
		          VALUES ('$semId', '$userId', '$attendance', '$remarks', '$mainImage')";
	
		dbQuery($sql);
		header('Location: index.php?view=teacher&search='.$semId.'&success=' . urlencode('You have Successfully Checked Attendance'));	

}

function upload()
{

	$id = $_POST['id'];	
	$semId = $_POST['semId'];		
		
	$images = uploadProductImage('fleImage', SRV_ROOT . 'profileImages/');

	$mainImage = $images['image'];
	$thumbnail = $images['thumbnail'];
	
	
	
		$sql   = "UPDATE tbl_sematt 
	          SET a_cert ='$mainImage' where a_id=$id";
	
		dbQuery($sql);
		header('Location: index.php?view=myattendance&search='.$semId.'&success=' . urlencode('You have Successfully Uploaded a Certificate'));	

}



/*
	Upload an image and return the uploaded image name 
*/
function uploadProductImage($inputName, $uploadDir)
{
	$image     = $_FILES[$inputName];
	$imagePath = '';
	$thumbnailPath = '';
	
	// if a file is given
	if (trim($image['tmp_name']) != '') {
		$ext = substr(strrchr($image['name'], "."), 1); //$extensions[$image['type']];

		// generate a random new file name to avoid name conflict
		$imagePath = md5(rand() * time()) . ".$ext";
		
		list($width, $height, $type, $attr) = getimagesize($image['tmp_name']); 

			$result = move_uploaded_file($image['tmp_name'], $uploadDir . $imagePath);
			
		
		if ($result) {
			// create thumbnail
			$thumbnailPath =  md5(rand() * time()) . ".$ext";
			$result = createThumbnail($uploadDir . $imagePath, $uploadDir . $thumbnailPath, THUMBNAIL_WIDTH);
			
			// create thumbnail failed, delete the image
			if (!$result) {
				unlink($uploadDir . $imagePath);
				$imagePath = $thumbnailPath = '';
			} else {
				$thumbnailPath = $result;
			}	
		} else {
			// the product cannot be upload / resized
			$imagePath = $thumbnailPath = '';
		}
		
	}

	
	return array('image' => $imagePath, 'thumbnail' => $thumbnailPath);
}


/*
	Modify a user
*/

function modifySem()
{

	$semId = $_POST['semId'];
$userId = $_POST['userId'];
$attendance = $_POST['attendance'];
$remarks = $_POST['remarks'];
		
		$sql   = "UPDATE tbl_sematt 
	          SET a_status ='$attendance', a_remark='$remarks' where a_teacher='$userId' and a_semid=$semId";
	
		dbQuery($sql);
		header('Location: index.php?view=teacher&search='.$semId.'&success=' . urlencode('You have Successfully Checked Attendance'));	

}

/*
	Modify a user
*/
function modifyUser()
{
	$userId   = (int)$_POST['hidUserId'];	
	$FName = $_POST['txtFName'];
    $LName = $_POST['txtLName'];
    $userName = $_POST['txtUserName'];
    $Password = $_POST['txtPassword'];
    $Position = $_POST['txtPosition'];
	
	$sql   = "UPDATE tbl_user 
	          SET user_password = PASSWORD('$Password'), user_fname='$FName', user_lname='$LName', user_position='$Position'
			  WHERE user_id = $userId";

	dbQuery($sql);
	header('Location: index.php?success=' . urlencode('You have Successfully Modified this User'));

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
function delete()
{
	if (isset($_GET['userId']) && (int)$_GET['userId'] > 0) {
		$userId = (int)$_GET['userId'];
	} else {
		header('Location: index.php');
	}
	
	
	$sql = "DELETE FROM tbl_seminar 
	        WHERE sem_id = $userId";
	dbQuery($sql);
	
	header('Location: index.php?alert=' . urlencode('You have Successfully Deleted A Seminar'));
}
?>