<?php
if (!defined('WEB_ROOT')) {
	exit;
}


$id = (isset($_GET['id']) && $_GET['id'] > '') ? $_GET['id'] : '';

$sql = "SELECT a_id, a_teacher, a_time, a_date, a_status, a_remark from tbl_attendance where a_teacher='$id'
		ORDER BY a_date";
$result = dbQuery($sql);
$date = date('Y-m-d');	
?> 
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
           
                                
 <form action="processUser.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">

        <thead>
    	<tr>
            <th scope="col" class="rounded-company" width="20%">Date</th>
            <th scope="col" class="rounded" >Room</th>
            <th scope="col" class="rounded" >Class</th>
            <th scope="col" class="rounded" width="20%">Check</th>
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
	
	$tsql = "SELECT *
        FROM tbl_user where user_name='$a_teacher'";
		$tresult = mysql_query($tsql);
		$tshow = mysql_fetch_array($tresult);	
		$tfname= $tshow['user_fname'];
		$tlname= $tshow['user_lname'];
	
	$ssql = "SELECT s_id, s_teacher, s_room, s_subject , s_class , s_from , s_to, s_m, s_t, s_w, s_th, s_f, s_s FROM tbl_schedule
		WHERE s_teacher ='$id'";
		$sresult = mysql_query($ssql);
		$sshow = mysql_fetch_array($sresult);	
		$sto= $sshow['s_to'];	
		$sroom= $sshow['s_room'];
		$sclass= $sshow['s_class'];	
		$ssubject= $sshow['s_subject'];	
	
	
	$i += 1;
?>
  <tr class="<?php echo $class; ?>"> 
   <td><?php echo $a_date; ?></td>
   <td><?php echo $sroom; ?></td>
   <td><?php echo $sclass; ?> <br>(<?php echo $ssubject; ?>)</td>
   <td><font color="#FF0000"><?php echo $a_status;?></td>
      
   
  </tr>
<?php
} // end while

?>
  <tr> 
   <td colspan="6">&nbsp;</td>
  </tr>

 </table>
 
