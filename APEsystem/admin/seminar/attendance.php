<?php

//wala pa ni natapus and nasuguran.... iya ni ka seminar

if (!defined('WEB_ROOT')) {
	exit;
}

$errorMessage = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '&nbsp;';
$userId = (isset($_GET['userId']) && $_GET['userId'] != '') ? $_GET['userId'] : '';
$semId = (isset($_GET['seminarId']) && $_GET['seminarId'] != '') ? $_GET['seminarId'] : 0;

	$tsql = "SELECT *
        FROM tbl_user where user_name='$userId'";
		$tresult = mysql_query($tsql);
		$tshow = mysql_fetch_array($tresult);	
		$tfname= $tshow['user_fname'];
		$tlname= $tshow['user_lname'];
		
		
	$asql = "SELECT *
        FROM tbl_seminar where sem_id=$semId";
		$aresult = mysql_query($asql);
		$ashow = mysql_fetch_array($aresult);
		$sem_name= $ashow['sem_name'];
		

?> 
<p class="errorMessage"><?php echo $errorMessage; ?></p>
<form action="process.php?action=addSem" method="post" enctype="multipart/form-data" name="frmAdd">

 <table border="0" cellpadding="5" cellspacing="1" class="entryTable" align="center">
  <tr> 
   <th align="left" colspan="2" ><?php echo $tfname; ?> <?php echo $tlname; ?>'s Attendance at <?php echo $sem_name; ?>:</td>
  </tr><input name="semId" type="hidden" value="<?php echo $semId;?>">
  <input name="userId" type="hidden" value="<?php echo $userId;?>">
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
    <tr> 
   <th align="center" colspan="2">Upload Certificate:</td>
   <tr>
   <td class="content"> <input name="fleImage" type="file" id="fleImage" class="box"> </td>
  </tr>
  

  
  
  
 </table>

 <p align="center"> 
  <input name="btnModifySchedule" type="submit" value="Save" class="box">
  &nbsp;&nbsp;<input name="btnCancel" type="button" id="btnCancel" value="Cancel" onClick="window.location.href='index.php';" class="box">  
 </p>
</form>