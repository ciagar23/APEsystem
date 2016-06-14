<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$errorMessage = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '&nbsp;';
$username= $_GET['username'];

$sql = "SELECT user_fname, user_lname, user_name, user_position, user_address, user_gender, user_birth, user_birth, user_bdegree, user_gdegree, user_school, user_seminar
        FROM tbl_user
        WHERE user_name = '$session'";
$result = dbQuery($sql);		
extract(dbFetchAssoc($result));


?> 
<p class="errorMessage"><?php echo $errorMessage; ?></p>
<table align="center">
<tr>
<td>
<form method="get" action="index.php?view=permonth3" name="hello">
<input type="hidden" name="view" value="permonth3">
<input type="hidden" name="username" value="<?php echo $username;?>">
Select Month: <select name="month">
<option value="01">January</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
<input type="submit" value="View"/>
</form>
</table>


<!--
<table>
<tr>
<td> <a href="index.php?view=permonth3&username=<?php echo $username;?>&month=01"><img src="<?php echo WEB_ROOT;?>calmonth/jan.png"></a>
<td> <a href="index.php?view=permonth3&username=<?php echo $username;?>&month=02"><img src="<?php echo WEB_ROOT;?>calmonth/feb.png"></a>

<tr>
<td> <a href="index.php?view=permonth3&username=<?php echo $username;?>&month=03"><img src="<?php echo WEB_ROOT;?>calmonth/mar.png"></a>
<td> <a href="index.php?view=permonth3&username=<?php echo $username;?>&month=04"><img src="<?php echo WEB_ROOT;?>calmonth/apr.png"></a>

<tr>
<td> <a href="index.php?view=permonth3&username=<?php echo $username;?>&month=05"><img src="<?php echo WEB_ROOT;?>calmonth/may.png"></a>
<td> <a href="index.php?view=permonth3&username=<?php echo $username;?>&month=06"><img src="<?php echo WEB_ROOT;?>calmonth/jun.png"></a>

<tr>
<td> <a href="index.php?view=permonth3&username=<?php echo $username;?>&month=07"><img src="<?php echo WEB_ROOT;?>calmonth/jul.png"></a>
<td> <a href="index.php?view=permonth3&username=<?php echo $username;?>&month=08"><img src="<?php echo WEB_ROOT;?>calmonth/aug.png"></a>

<tr>
<td> <a href="index.php?view=permonth3&username=<?php echo $username;?>&month=09"><img src="<?php echo WEB_ROOT;?>calmonth/sep.png"></a>
<td> <a href="index.php?view=permonth3&username=<?php echo $username;?>&month=10"><img src="<?php echo WEB_ROOT;?>calmonth/oct.png"></a>

<tr>
<td> <a href="index.php?view=permonth3&username=<?php echo $username;?>&month=11"><img src="<?php echo WEB_ROOT;?>calmonth/nov.png"></a>
<td> <a href="index.php?view=permonth3&username=<?php echo $username;?>&month=12"><img src="<?php echo WEB_ROOT;?>calmonth/dec.png"></a>


 </table> -->
 <p align="center"> 
