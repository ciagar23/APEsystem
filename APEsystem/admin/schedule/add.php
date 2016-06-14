<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
$subcode = (isset($_GET['subcode']) && $_GET['subcode'] != '') ? $_GET['subcode'] : '';
?> 
     <script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='index.php?view=add&id=<?php echo $id;?>&subcode="+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>



   

 <table border="0" cellpadding="5" cellspacing="1" class="entryTable" align="center">
   <tr> 
   <th align="left">Subject:</td>
   <td class="content">
      <?php

$sqls = "SELECT s_id, s_code, s_name
        FROM tbl_subjects";
$results = dbQuery($sqls);

?> 
<select name="Subject" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">

<?php
while($rows = dbFetchAssoc($results)) {
	extract($rows);
	
	if ($s_code == $subcode)
	{
	$select = 'selected';
	
	}
	else
	{
	
	$select = '';
	
	}
	
	
	$i += 1;
?>
   <option <?php echo $select;?>><?php echo $s_code; ?></option>

<?php
} // end while

	$tsql = "SELECT *
        FROM tbl_subjects where s_code='$subcode'";
		$tresult = mysql_query($tsql);
		$tshow = mysql_fetch_array($tresult);	
		$subjtitle= $tshow['s_name'];
?>
 
   </td>

<form action="processSchedule.php?action=add" method="post" enctype="multipart/form-data" name="frmAddSchedule" id="frmAddSchedule">
 
  <input name="txtUserName" type="hidden"  value="<?php echo $id; ?>">
  <input name="txtSubject" type="hidden" value="<?php echo $subcode; ?>">
 
  <tr> 
   <th align="left" >Title:</td>
   <td class="content"> <?php echo $subjtitle;?></td>
  </tr>
  
  
  <tr> 
   <th align="left" >Class:</td>
   <td class="content"> <input name="txtCName" type="text" class="box" size="50" maxlength="50"></td>
  </tr>
  
    <tr> 
   <th align="left">Room:</td>
   <td class="content"> <input name="txtRoom" type="text" class="box" size="50" maxlength="50"></td>
  </tr>
    <tr> 
   <th colspan="2" align="left">Start Time: 
      <select name="txtFrom" class="box">
     <option value=""> - Select- </option>
     <option>7:30 AM</option>
     <option>8:00 AM</option>
     <option>8:30 AM</option>
     <option>9:00 AM</option>
     <option>9:30 AM</option>
     <option>10:00 AM</option>
     <option>10:30 AM</option>
     <option>11:00 AM</option>
     <option>11:30 AM</option>
     <option>12:00 AM</option>
     <option>12:30 AM</option>
     <option>1:00 PM</option>
     <option>1:30 PM</option>
     <option>2:00 PM</option>
     <option>2:30 PM</option>
     <option>3:00 PM</option>
     <option>3:30 PM</option>
     <option>4:00 PM</option>
     <option>4:30 PM</option>
     <option>5:00 PM</option>
     <option>5:30 PM</option>
     <option>6:00 PM</option>
     <option>6:30 PM</option>
     <option>7:00 PM</option>
     <option>7:30 PM</option>
     <option>8:00 PM</option>
     <option>8:30 PM</option>
     <option>9:00 PM</option>
     <option>9:30 PM</option>
   </select>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
End Time:
      <select name="txtTo" class="box">
     <option value=""> - Select- </option>
     <option>7:30 AM</option>
     <option>8:00 AM</option>
     <option>8:30 AM</option>
     <option>9:00 AM</option>
     <option>9:30 AM</option>
     <option>10:00 AM</option>
     <option>10:30 AM</option>
     <option>11:00 AM</option>
     <option>11:30 AM</option>
     <option>12:00 AM</option>
     <option>12:30 AM</option>
     <option>1:00 PM</option>
     <option>1:30 PM</option>
     <option>2:00 PM</option>
     <option>2:30 PM</option>
     <option>3:00 PM</option>
     <option>3:30 PM</option>
     <option>4:00 PM</option>
     <option>4:30 PM</option>
     <option>5:00 PM</option>
     <option>5:30 PM</option>
     <option>6:00 PM</option>
     <option>6:30 PM</option>
     <option>7:00 PM</option>
     <option>7:30 PM</option>
     <option>8:00 PM</option>
     <option>8:30 PM</option>
     <option>9:00 PM</option>
     <option>9:30 PM</option>
   </select>
   
   </td>
  </tr>
  
  <tr>
  <td colspan="2">
  <input type="checkbox" value="M" name="txtM" /> Monday
  <input type="checkbox" value="T" name="txtT" /> Tuesday
  <input type="checkbox" value="W" name="txtW" /> Wednesday <br>
  <input type="checkbox" value="Th" name="txtTH" /> Thursday
  <input type="checkbox" value="F" name="txtF" /> Friday
  <input type="checkbox" value="S" name="txtS" /> Saturday
  
  
  </td>
  
  
  
 </table>
                       <br>
                       <br>
                       <br>
                       <br>     
 
 <div align="center" class="content"> 
  <input name="btnAddSchedule" type="button" id="btnAddSchedule" value="Add Schedule" onClick="checkAddScheduleForm();" class="box">
  &nbsp;&nbsp;<input name="btnCancel" type="button" id="btnCancel" value="Cancel" onClick="window.location.href='index.php';" class="box">  
 </div>
</form>