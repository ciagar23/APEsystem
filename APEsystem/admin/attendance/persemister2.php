<?php

//wala pa ni natapus and nasuguran.... iya ni ka seminar

if (!defined('WEB_ROOT')) {
	exit;
}

$errorMessage = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '&nbsp;';
$username = (isset($_GET['username']) && $_GET['username'] != '') ? $_GET['username'] : '';
$month = (isset($_GET['month']) && $_GET['month'] != '') ? $_GET['month'] : '';
$print = (isset($_GET['print']) && $_GET['print'] != '') ? $_GET['print'] : '';

if ($month =='01')
{
$m= 'jan';
}
else if ($month =='02')
{
$m= 'feb';
}
else if ($month =='03')
{
$m= 'mar';
}
else if ($month =='04')
{
$m= 'apr';
}
else if ($month =='05')
{
$m= 'may';
}
else if ($month =='06')
{
$m= 'jun';
}
else if ($month =='07')
{
$m= 'jul';
}
else if ($month =='08')
{
$m= 'aug';
}
else if ($month =='09')
{
$m= 'sep';
}
else if ($month =='10')
{
$m= 'oct';
}
else if ($month =='11')
{
$m= 'nov';
}
else if ($month =='12')
{
$m= 'dec';
}


	$tsql = "SELECT *
        FROM tbl_user where user_name='$username'";
		$tresult = mysql_query($tsql);
		$tshow = mysql_fetch_array($tresult);	
		$tfname= $tshow['user_fname'];
		$tlname= $tshow['user_lname'];
		

		
		$present = mysql_num_rows(mysql_query("select * from tbl_attendance where a_status='present' and a_teacher='$username'"));
		$late = mysql_num_rows(mysql_query("select * from tbl_attendance where a_status='late' and a_teacher='$username'"));
		$absent = mysql_num_rows(mysql_query("select * from tbl_attendance where a_status='absent' and a_teacher='$username'"));
		$sick = mysql_num_rows(mysql_query("select * from tbl_attendance where a_status='sick' and a_teacher='$username'"));
		$emergency = mysql_num_rows(mysql_query("select * from tbl_attendance where a_status='emergency' and a_teacher='$username'"));
		$vacation = mysql_num_rows(mysql_query("select * from tbl_attendance where a_status='vacation' and a_teacher='$username'"));
		
		$total = $present + $late + $absent + $sick + $emergency + $vacation;

?> 
<p class="errorMessage"><?php echo $errorMessage; ?></p>
<form action="process.php?action=addSem" method="post" enctype="multipart/form-data" name="frmAdd">

 <table border="0" cellpadding="5" cellspacing="1" class="entryTable" align="center">
 <tr>
   <th align="left" colspan="3" ><font size="+1" color="#FF0000"><?php echo $tfname; ?> <?php echo $tlname; ?>'s</font> Summary of Attendance</th>
 <!--<th align="left"><img src="<?php echo WEB_ROOT;?>calmonth/<?php echo $m;?>.png">-->
   </tr>
      <tr> 
   <th align="left"  >&nbsp;</td>
   <th align="left">Present : <?php echo $present;?></td>
   <th align="left" width="50%"><input type="button" value="View Detail" onclick="window.location.href='index.php?view=permonthdetail&status=present&user=<?php echo $username; ?>';"></td>
  </tr>   
  <tr> 
   <th align="left"  >&nbsp;</td>
   <th align="left" >Late :<?php echo $late;?></td>
   <th align="left" width="50%"><input type="button" value="View Detail" onclick="window.location.href='index.php?view=permonthdetail&status=late&user=<?php echo $username; ?>';"></td>
  </tr>
    <tr> 
   <th align="left"  >&nbsp;</td>
   <th align="left" >Absent :<?php echo $absent;?></td>
   <th align="left" width="50%"><input type="button" value="View Detail" onclick="window.location.href='index.php?view=permonthdetail&status=absent&user=<?php echo $username; ?>';"></td>
  </tr>
     <tr> 
   <th align="left" >&nbsp;</td>
   <th align="left">Sick :<?php echo $sick;?></td>
   <th align="left" width="50%"><input type="button" value="View Detail" onclick="window.location.href='index.php?view=permonthdetail&status=sick&user=<?php echo $username; ?>';"></td>
  </tr>
     <tr> 
   <th align="left"  >&nbsp;</td>
   <th align="left">Emergency :<?php echo $emergency;?></td>
   <th align="left" width="50%"><input type="button" value="View Detail" onclick="window.location.href='index.php?view=permonthdetail&status=emergency&user=<?php echo $username; ?>';"></td>
  </tr>
     <tr> 
   <th align="left" >&nbsp;</td>
   <th align="left"  >Vacation :<?php echo $vacation;?></td>
   <th align="left" width="50%"><input type="button" value="View Detail" onclick="window.location.href='index.php?view=permonthdetail&status=vacation&user=<?php echo $username; ?>';"></td>
  </tr>
<td colspan="3"><br><br><br>

<?php /*if($total ==0)
{
}
else {?>
<img src="<?php echo WEB_ROOT; ?>admin/attendance/pieimage.php?data=<?php echo $present;?>*<?php echo $late;?>*<?php echo $absent;?>*<?php echo $sick;?>*<?php echo $emergency;?>*<?php echo $vacation;?>&label=A*b*c*d*e*f" />
<?php }
 */?>
  
 </table>

</form>


<input type="button" value="Print" onclick="window.location.href='index.php?view=permonthprint&username=<?=$username;?>&month=<?=$month;?>&print=yes';">
