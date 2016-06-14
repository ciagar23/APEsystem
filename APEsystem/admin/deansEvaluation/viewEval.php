<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$userId = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$sql = "SELECT d_id, d_teacher, d_dateeval, d_timeeval, d_classsize, d_coursenum, d_coursedesc, d_A1, d_A2, d_A3, d_A4, d_A5, d_A6, d_A7, d_A8, d_B1, d_B2, d_B3, d_B4, d_B5, d_B6, d_B7, d_C1, d_C2, d_D1, d_D2, d_D3, d_D4, d_total
        FROM tbl_deanseval where d_teacher='$userId'";
$result = dbQuery($sql);

$count = mysql_num_rows(mysql_query($sql));
if($count == 0)
{
echo '<h1>Sorry, you have not been evaluated yet';	
}
else{
		
extract(dbFetchAssoc($result));

		$tsql = "SELECT *
        FROM tbl_user where user_name='$userId'";
		$tresult = mysql_query($tsql);
		$tshow = mysql_fetch_array($tresult);	
		$tfname= $tshow['user_fname'];
		$tlname= $tshow['user_lname'];

?> 
<p class="errorMessage"><?php echo $errorMessage; ?></p>
<form action="process.php?action=deanseval" method="post" enctype="multipart/form-data" name="frmAddSchedule">

 <table border="0" cellpadding="5" cellspacing="1" width="100%" class="entryTable" align="center">
  <tr>
  <td>Name of Teacher: <b><?php echo $tfname.' '.$tlname;?></b>
  <td>Date Evaluated: <b><?php echo $d_dateeval;?></b>
  <tr> 
  <td>Time Evaluated: <b><?php echo $d_timeeval;?>
  <td>Size of Class: <b><?php echo $d_classsize;?>
  <tr>
  <td>Course Number: <b><?php echo $d_coursenum;?>
  <td>Course Description: <b><?php echo $d_coursedesc;?>
  <tr>
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>A. TEACHER (25%)</b>
  <tr>
  <td> 1. Teaching Personality
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A1;?>.png">
  <tr>
  
  <td> 2. Composure
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A2;?>.png">
  <tr>
  
  <td> 3. Articulation
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A3;?>.png">
  <tr>
  
  <td> 4. Modulation of Voice
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A4;?>.png">
  <tr>
  
  <td> 5. Mastery of Medium of instruction
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A5;?>.png">
  <tr>
  
  <td> 6. Mastery of Instruction
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A6;?>.png">
  <tr>
  
  <td> 7. Mastery of Subject Matter
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A7;?>.png">
  <tr>
  
  <td> 8. Openness to Student's Opinion
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A8;?>.png">
  <tr>
  
  
  
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>B. TEACHING PROCEDURE (25%)</b>
  <tr>
  <td> 1. Organization of the Subject Matter
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_B1;?>.png">
  <tr>
  
  <td> 2. Ability to Relate Subject Matter to Other Fields
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_B2;?>.png">
  <tr>
  
  <td> 3. Ability of Provoke Critical Thinking
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_B3;?>.png">
  <tr>
  
  <td> 4. Ability to Motivate
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_B4;?>.png">
  <tr>
  
  <td> 5. Ability to Manage Class
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_B5;?>.png">
  <tr>
  
  <td> 6. Questioning Technique
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_B6;?>.png">
  <tr>
  
  <td> 7. Use of Teaching Aids
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_B7;?>.png">
  <tr>
  
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>C. STUDENTS (25%)</b>
  <tr>
  <td> 1. Class Attention
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_C1;?>.png">
  <tr>
  
  <td> 2. Class Participation
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_C2;?>.png">
  <tr>
  
  
  
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>D. GENERAL OBSERVATION (25%)</b>
  <tr>
  <td> 1. Report between Teacher and Students
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_D1;?>.png">
  <tr>
  
  <td> 2. Class Atmosphere
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_D2;?>.png">
  <tr>
  
  <td> 3. Overall Teacher Impact
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_D3;?>.png">
  <tr>
  
  <td> 4. General Classroom Condition
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_D4;?>.png">

  <tr>
  <td align="center" colspan="2"><br><br><b>Total: <?php echo $d_total;?> points

</table>


</form>
<?php }?>