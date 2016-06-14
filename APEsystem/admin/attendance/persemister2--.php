<?php

//wala pa ni natapus and nasuguran.... iya ni ka seminar

if (!defined('WEB_ROOT')) {
	exit;
}

$errorMessage = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '&nbsp;';
$username = (isset($_GET['username']) && $_GET['username'] != '') ? $_GET['username'] : '';



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
   <th align="left" colspan="3" ><font size="+1" color="#FF0000"><?php echo $tfname; ?> <?php echo $tlname; ?>'s</font> <br>Summary of Attendance</th>
  </tr>
    <tr> 
   <th align="left" bgcolor="#9A99FF" >&nbsp;</td>
   <th align="left">Present : <?php echo $present;?></td>
   <th align="left" width="50%">&nbsp;</td>
  </tr>   
  <tr> 
   <th align="left" bgcolor="#9D3364" >&nbsp;</td>
   <th align="left" >Late :<?php echo $late;?></td>
   <th align="left" width="50%">&nbsp;</td>
  </tr>
    <tr> 
   <th align="left" bgcolor="#FF3266" >&nbsp;</td>
   <th align="left" >Absent :<?php echo $absent;?></td>
   <th align="left" width="50%">&nbsp;</td>
  </tr>
     <tr> 
   <th align="left"  bgcolor="#00FF99">&nbsp;</td>
   <th align="left">Sick :<?php echo $sick;?></td>
   <th align="left" width="50%">&nbsp;</td>
  </tr>
     <tr> 
   <th align="left" bgcolor="#FF969B" >&nbsp;</td>
   <th align="left">Emergency :<?php echo $emergency;?></td>
   <th align="left" width="50%">&nbsp;</td>
  </tr>
     <tr> 
   <th align="left"bgcolor="#0066CB" >&nbsp;</td>
   <th align="left"  >Vacation :<?php echo $vacation;?></td>
   <th align="left" width="50%">&nbsp;</td>
  </tr>
<td colspan="3"><br><br><br>

<?php if($total ==0)
{
}
else {?>
<img src="<?php echo WEB_ROOT; ?>admin/attendance/pieimage.php?data=<?php echo $present;?>*<?php echo $late;?>*<?php echo $absent;?>*<?php echo $sick;?>*<?php echo $emergency;?>*<?php echo $vacation;?>&label=A*b*c*d*e*f" />
<?php }
?>
  
 </table>

</form>
<input type="button" value="Print" onclick="window.location.href='index.php?view=persemisterprint&username=<?=$username;?>&print=yes';">
