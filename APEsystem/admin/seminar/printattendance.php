<?php
if (!defined('WEB_ROOT')) {
	exit;
}


$search = (isset($_GET['search']) && $_GET['search'] > '') ? $_GET['search'] : '';

$sql = "SELECT a_teacher, a_status
        FROM tbl_sematt where a_semid=$search";
$result = dbQuery($sql);

		$tsql = "SELECT *
        FROM tbl_seminar where sem_id='$search'";
		$tresult = mysql_query($tsql);
		$tshow = mysql_fetch_array($tresult);	
		$seminarname= $tshow['sem_name'];
		$loc= $tshow['sem_location'];
		$date= $tshow['sem_date'];
		$time= $tshow['sem_time'];

?> 
<table align="center" width="90%">
           
                               
    	<tr>
            <td colspan="2" align="center"> <font size="+3" face="Arial, Helvetica, sans-serif"><b>Attendance of Seminar </font><br>
			Name: <?php echo $seminarname;?><br>
			at <?php echo $loc;?><br />
            
			Date: <?php echo $date;?> / Time: <?php echo $time;?><br /><br /><br />
            <hr size="5" color="#000000">
        </tr>  
                               
    	<tr>
            <td><font size="+1" face="Arial, Helvetica, sans-serif"><b>Name:
            <td><font size="+1" face="Arial, Helvetica, sans-serif"><b>Attendance:
        </tr>


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
		$thumbnail= $tshow['user_thumbnail'];
		
			if ($thumbnail)
	{
	$thumbnail = $thumbnail;
	}
	else
	{
	$thumbnail ='nopic.jpg';
	}
	
	$num = $i;
	$i += 1;
?>
  <tr class="<?php echo $class; ?>"> 
   <td><font size="+1" face="Arial, Helvetica, sans-serif"><?php echo $i;?>) <?php echo $tfname; ?> <?php echo $tlname; ?></b></td>

     <td width="300"><font size="+1" face="Arial, Helvetica, sans-serif"><? echo $a_status;?></td>
   
   
  </tr>
<?php
} // end while

?>
  <tr> 
   <td colspan="5">&nbsp;</td>
  </tr>

 </table>
 
 <script>
 window.print();
 window.location.href='index.php?view=teacher&search=<?php echo $search;?>';
 </script>
