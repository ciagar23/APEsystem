<?php
require_once '../library/config.php';
require_once './library/functions.php';

$errorMessage = '';

if (isset($_POST['txtUserName'])) {
	$result = doLogin();
	
	if ($result != '') {
		$errorMessage = $result;
	}
}

?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>CABECS Faculty Monitoring and Decision Support System</title>
  <link rel="stylesheet" href="<?php echo WEB_ROOT;?>admin/include/login/css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<br>

    <center><img src="<?php echo WEB_ROOT;?>admin/include/header.jpg"> </center><br>
    <center><font color="#FFFF00" size="5">CSAB-CABECS Intranet-Based Faculty Information System</font></center>
  <form method="post" name="frmLogin" id="frmLogin" class="login">
  
    <p>
      <label for="login">User Name:</label>
      <input type="text" name="txtUserName" id="login">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="txtPassword" id="password">
    </p>

    <p class="login-submit">
      <button type="submit" class="login-button">Login</button>
    </p>

  </form>

</body>
</html>

 
 <?
if ($errorMessage !='')
{
?>
<script>
alert('<?php echo $errorMessage;?>');
</script>

<?
}
else
{
}
?>
