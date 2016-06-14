<?php

//process the forms and upload the files
if ($_POST) {
	
$teacher = $_GET['teacher'];
$folder = "tmp/"; 
		$filename = $_FILES["file"]['name'];
        $ext = substr(strrchr($_FILES["file"]['name'], "."), 1); 
        $imagePath = md5(rand() * time()) . ".$ext";
move_uploaded_file($_FILES["file"]["tmp_name"], "$folder" . $imagePath);

$sql   = "INSERT INTO tbl_documents (d_teacher, d_file, d_filename)
		          VALUES ('$teacher', '$imagePath', '$filename')";
	
		dbQuery($sql);

?>



		<center><font size="+1"><a href="index.php">Done Uploading documents...click here</a>


<?
//do whatever else needs to be done (insert information into database, etc...)

//redirect user
}
else
{

//

?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/ht ml; charset=iso-8859-1" />


</head>

<body>
<table align="center" bgcolor="#FFFFFF">
<tr>
<td>
<h1>Upload your file </h1>

<div>

    Choose a file to upload<br />

    <input name="file" type="file" id="file" size="30"/>


    <input name="Submit" type="submit" id="submit" value="Submit" />
  </form>
  </div>
  </table>

</body>
<?php }?>

</html>
