<?php
if (!defined('WEB_ROOT')) {
	exit;
}


$username = (isset($_GET['user']) && $_GET['user'] != '') ? $_GET['user'] : '';
$month = (isset($_GET['month']) && $_GET['month'] != '') ? $_GET['month'] : '';
$status = (isset($_GET['status']) && $_GET['status'] > '') ? $_GET['status'] : '';

$sql = "SELECT a_teacher, a_time, a_date, a_status,a_remark from tbl_attendance 
		where a_status='$status' and a_teacher='$username' and a_date like '$month%'";
$result = dbQuery($sql);
$date = date('Y-m-d');	
	$tsql = "SELECT *
        FROM tbl_user where user_name='$username'";
		$tresult = mysql_query($tsql);
		$tshow = mysql_fetch_array($tresult);	
		$tfname= $tshow['user_fname'];
		$tlname= $tshow['user_lname'];
	
?> 
<div align="left"><font size="+1">Teacher: <?php echo $tlname.' '.$tfname?></div>
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
     
                                
                                <form action="processUser.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">

        <thead>
    	<tr>
            <th scope="col" class="rounded-company" width="20%">Date</th>
            <th scope="col" class="rounded-company" width="20%">Time</th>
            <th scope="col" class="rounded" width="20%">Status</th>
            <th scope="col" class="rounded" width="40%">Remarks</th>
        </tr>
    </thead>

<?php
while($row = dbFetchAssoc($result)) {
	extract($row);
	
	if ($i%2) {
		$class = 'row1';
	} else {
		$class = 'row2';
	}
	

		
	$num = $i;
	
	$i += 1;
?>
  <tr class="<?php echo $class; ?>"> 
   <td><?php echo $num.'.)'; ?> <?php echo $a_date; ?> 
   <td><?php echo $a_time; ?></td>
     <td><font color=red><? echo $a_status;?></font> 
     <td><?php echo $a_remark;?>

   
   
  </tr>
<?php
} // end while

?>
  <tr> 
   <td colspan="6">&nbsp;</td>
  </tr>

 </table>
 
<input type="button" value="print" onclick="location.href='<?php echo WEB_ROOT;?>"admin/attendance/index.php?view=print&search=/?php echo $search;?>