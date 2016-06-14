<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$errorMessage = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '&nbsp;';
$userId = (isset($_GET['userId']) && $_GET['userId'] != '') ? $_GET['userId'] : '';

$sql = "SELECT s_id, s_teacher, s_room, s_subject , s_class , s_from , s_to, s_m, s_t, s_w, s_th, s_f, s_s FROM tbl_schedule
		WHERE s_id =$userId";
$result = dbQuery($sql);		
extract(dbFetchAssoc($result));
	$tsql = "SELECT *
        FROM tbl_user where user_name='$s_teacher'";
		$tresult = mysql_query($tsql);
		$tshow = mysql_fetch_array($tresult);	
		$tfname= $tshow['user_fname'];
		$tlname= $tshow['user_lname'];

?> 
<p class="errorMessage"><?php echo $errorMessage; ?></p>
<form action="process.php?action=add" method="post" enctype="multipart/form-data" name="frmAdd">
  <input name="txtTeacher" type="hidden" value="<?php echo $s_teacher; ?>">
  <input name="txtFrom" type="hidden" value="<?php echo $s_from; ?>">

 <table border="0" cellpadding="5" cellspacing="1" class="entryTable" align="center">
  <tr> 
   <th align="left" colspan="2" ><?php echo $tfname; ?> <?php echo $tlname; ?>'s Attendance at <?php echo $s_from; ?>:</td>
  </tr>
    <tr> 
   <th align="left" colspan="2" ><input type="radio" name="attendance" value="present">Present</td>
  </tr>   
  <tr> 
   <th align="left" colspan="2" ><input type="radio" name="attendance" value="late">Late</td>
  </tr>
    <tr> 
   <th align="left" colspan="2" ><input type="radio" name="attendance" value="absent">Absent</td>
  </tr>
     <tr> 
   <th align="left" colspan="2" ><input type="radio" name="attendance" value="sick">Sick</td>
  </tr>
     <tr> 
   <th align="left" colspan="2" ><input type="radio" name="attendance" value="emergency">Emergency</td>
  </tr>
     <tr> 
   <th align="left" colspan="2" ><input type="radio" name="attendance" value="vacation">Vacation</td>
  </tr>
  
    <tr> 
   <th align="center" colspan="2">Remarks:</td>
   <tr>
   <td class="content"> <textarea rows="5" cols="60" name="remarks" ></textarea></td>
  </tr>
  

  
  
  
 </table>

 <p align="center"> 
  <input name="btnModifySchedule" type="submit" value="Save" class="box">
  &nbsp;&nbsp;<input name="btnCancel" type="button" id="btnCancel" value="Cancel" onClick="window.location.href='index.php';" class="box">  
 </p>
</form>