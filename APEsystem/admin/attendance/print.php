<?php
if (!defined('WEB_ROOT')) {
	exit;
}


$search = (isset($_GET['search']) && $_GET['search'] > '') ? $_GET['search'] : '';

$sql = "SELECT s_id, s_teacher, s_room, s_subject , s_class , s_from , s_to, s_m, s_t, s_w, s_th, s_f, s_s FROM tbl_schedule
		WHERE s_from ='$search'
		ORDER BY s_from";
$result = dbQuery($sql);
$date = date('Y-m-d');	
?> 
<table align="center" width="100%">
          
 
 <center><h3>Faculty Attendance Sheet <br>Time: <?php echo $search;?><br>Date: <?php echo date('M d, Y');?> </center>

<?php
while($row = dbFetchAssoc($result)) {
	extract($row);
	
	if ($i%2) {
		$class = 'row1';
	} else {
		$class = 'row2';
	}
	
	$tsql = "SELECT *
        FROM tbl_user where user_name='$s_teacher'";
		$tresult = mysql_query($tsql);
		$tshow = mysql_fetch_array($tresult);	
		$tfname= $tshow['user_fname'];
		$tlname= $tshow['user_lname'];
	

	$asql = "SELECT *
        FROM tbl_attendance where a_teacher='$s_teacher' and a_time='$search' and a_date='$date'";
		$aresult = mysql_query($asql);
		$ashow = mysql_fetch_array($aresult);
		$acount = mysql_num_rows($aresult);	
		$astatus= $ashow['a_status'];
		$aid= $ashow['a_id'];
		
	$i += 1;
?>
  <tr class="<?php echo $class; ?>"> 
   <td><b><?php echo $i;?>.  <?php echo $tfname; ?> <?php echo $tlname; ?></b></td>
 	<tr>
   <td> <b>Rm: </b><?php echo $s_room; ?>
   <tr><td><b>Subj: </b><?php echo $s_class; ?>(<?php echo $s_subject; ?>)</td>
   <tr>
   <td colspan="3"> _____ Present&nbsp;&nbsp;&nbsp;&nbsp;_____ Late&nbsp;&nbsp;&nbsp;&nbsp;_____ Absent&nbsp;&nbsp;&nbsp;&nbsp;_____ Emergency&nbsp;&nbsp;&nbsp;&nbsp;_____ Vacation&nbsp;&nbsp;&nbsp;&nbsp;
   <tr>
   <td colspan="3">Remarks: ______________________________________________________
   <br> <br> <br>
   
   
  </tr>
<?php
} // end while

?>
  <tr> 
   <td colspan="6">&nbsp;</td>
  </tr>

 </table>
 
<script>
window.print();
</script>