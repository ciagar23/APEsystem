<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$userId = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$sql = "SELECT user_id, user_name, user_regdate, user_last_login, user_fname, user_lname, user_position
        FROM tbl_user where user_name='$userId'";
$result = dbQuery($sql);		
extract(dbFetchAssoc($result));


?> 
<p class="errorMessage"><?php echo $errorMessage; ?></p>
<form action="process.php?action=modifyeval" method="post" enctype="multipart/form-data" name="frmAddSchedule">
  <input name="txtUserName" type="hidden" id="txtUserId" value="<?php echo $user_name; ?>">
  <input name="fullname" type="hidden" id="txtUserId" value="<?php echo $user_fname.' '.$user_lname; ?>">

 <table border="0" cellpadding="5" cellspacing="1" width="100%" class="entryTable" align="center">
  <tr>
  <td>Name of Teacher: <b><?php echo $user_fname.' '.$user_lname;?></b>
  <td>Date Evaluated: <input type="text" name="dateEval" />
  <tr> 
  <td>Time Evaluated: <input type="text" name="timeEval" />
  <td>Size of Class: <input type="text" name="classSize" />
  <tr>
  <td>Course Number: <input type="text" name="courseNum" />
  <td>Course Description: <input type="text" name="courseDesc" />
  <tr>
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>A. TEACHER (25%)</b>
  <tr>
  <td> 1. Teaching Personality
  <td>
   <input type="radio" name="A1" id="score1" value="5" />5
   <input type="radio" name="A1" id="score1" value="4" />4
   <input type="radio" name="A1" id="score1" value="3" />3
   <input type="radio" name="A1" id="score1" value="2" />2
   <input type="radio" name="A1" id="score1" value="1" />1
  <tr>
  
  <td> 2. Composure
  <td>
   <input type="radio" name="A2" id="score1" value="5" />5
   <input type="radio" name="A2" id="score1" value="4" />4
   <input type="radio" name="A2" id="score1" value="3" />3
   <input type="radio" name="A2" id="score1" value="2" />2
   <input type="radio" name="A2" id="score1" value="1" />1
  <tr>
  
  <td> 3. Articulation
  <td>
   <input type="radio" name="A3" id="score1" value="5" />5
   <input type="radio" name="A3" id="score1" value="4" />4
   <input type="radio" name="A3" id="score1" value="3" />3
   <input type="radio" name="A3" id="score1" value="2" />2
   <input type="radio" name="A3" id="score1" value="1" />1
  <tr>
  
  <td> 4. Modulation of Voice
  <td>
   <input type="radio" name="A4" id="score1" value="5" />5
   <input type="radio" name="A4" id="score1" value="4" />4
   <input type="radio" name="A4" id="score1" value="3" />3
   <input type="radio" name="A4" id="score1" value="2" />2
   <input type="radio" name="A4" id="score1" value="1" />1
  <tr>
  
  <td> 5. Mastery of Medium of instruction
  <td>
   <input type="radio" name="A5" id="score1" value="5" />5
   <input type="radio" name="A5" id="score1" value="4" />4
   <input type="radio" name="A5" id="score1" value="3" />3
   <input type="radio" name="A5" id="score1" value="2" />2
   <input type="radio" name="A5" id="score1" value="1" />1
  <tr>
  
  <td> 6. Mastery of Instruction
  <td>
   <input type="radio" name="A6" id="score1" value="5" />5
   <input type="radio" name="A6" id="score1" value="4" />4
   <input type="radio" name="A6" id="score1" value="3" />3
   <input type="radio" name="A6" id="score1" value="2" />2
   <input type="radio" name="A6" id="score1" value="1" />1
  <tr>
  
  <td> 7. Mastery of Subject Matter
  <td>
   <input type="radio" name="A7" id="score1" value="5" />5
   <input type="radio" name="A7" id="score1" value="4" />4
   <input type="radio" name="A7" id="score1" value="3" />3
   <input type="radio" name="A7" id="score1" value="2" />2
   <input type="radio" name="A7" id="score1" value="1" />1
  <tr>
  
  <td> 8. Openness to Student's Opinion
  <td>
   <input type="radio" name="A8" id="score1" value="5" />5
   <input type="radio" name="A8" id="score1" value="4" />4
   <input type="radio" name="A8" id="score1" value="3" />3
   <input type="radio" name="A8" id="score1" value="2" />2
   <input type="radio" name="A8" id="score1" value="1" />1
  <tr>
  
  
  
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>B. TEACHING PROCEDURE (25%)</b>
  <tr>
  <td> 1. Organization of the Subject Matter
  <td>
   <input type="radio" name="B1" id="score1" value="5" />5
   <input type="radio" name="B1" id="score1" value="4" />4
   <input type="radio" name="B1" id="score1" value="3" />3
   <input type="radio" name="B1" id="score1" value="2" />2
   <input type="radio" name="B1" id="score1" value="1" />1
  <tr>
  
  <td> 2. Ability to Relate Subject Matter to Other Fields
  <td>
   <input type="radio" name="B2" id="score1" value="5" />5
   <input type="radio" name="B2" id="score1" value="4" />4
   <input type="radio" name="B2" id="score1" value="3" />3
   <input type="radio" name="B2" id="score1" value="2" />2
   <input type="radio" name="B2" id="score1" value="1" />1
  <tr>
  
  <td> 3. Ability of Provoke Critical Thinking
  <td>
   <input type="radio" name="B3" id="score1" value="5" />5
   <input type="radio" name="B3" id="score1" value="4" />4
   <input type="radio" name="B3" id="score1" value="3" />3
   <input type="radio" name="B3" id="score1" value="2" />2
   <input type="radio" name="B3" id="score1" value="1" />1
  <tr>
  
  <td> 4. Ability to Motivate
  <td>
   <input type="radio" name="B4" id="score1" value="5" />5
   <input type="radio" name="B4" id="score1" value="4" />4
   <input type="radio" name="B4" id="score1" value="3" />3
   <input type="radio" name="B4" id="score1" value="2" />2
   <input type="radio" name="B4" id="score1" value="1" />1
  <tr>
  
  <td> 5. Ability to Manage Class
  <td>
   <input type="radio" name="B5" id="score1" value="5" />5
   <input type="radio" name="B5" id="score1" value="4" />4
   <input type="radio" name="B5" id="score1" value="3" />3
   <input type="radio" name="B5" id="score1" value="2" />2
   <input type="radio" name="B5" id="score1" value="1" />1
  <tr>
  
  <td> 6. Questioning Technique
  <td>
   <input type="radio" name="B6" id="score1" value="5" />5
   <input type="radio" name="B6" id="score1" value="4" />4
   <input type="radio" name="B6" id="score1" value="3" />3
   <input type="radio" name="B6" id="score1" value="2" />2
   <input type="radio" name="B6" id="score1" value="1" />1
  <tr>
  
  <td> 7. Use of Teaching Aids
  <td>
   <input type="radio" name="B7" id="score1" value="5" />5
   <input type="radio" name="B7" id="score1" value="4" />4
   <input type="radio" name="B7" id="score1" value="3" />3
   <input type="radio" name="B7" id="score1" value="2" />2
   <input type="radio" name="B7" id="score1" value="1" />1
  <tr>
  
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>C. STUDENTS (25%)</b>
  <tr>
  <td> 1. Class Attention
  <td>
   <input type="radio" name="C1" id="score1" value="5" />5
   <input type="radio" name="C1" id="score1" value="4" />4
   <input type="radio" name="C1" id="score1" value="3" />3
   <input type="radio" name="C1" id="score1" value="2" />2
   <input type="radio" name="C1" id="score1" value="1" />1
  <tr>
  
  <td> 2. Class Participation
  <td>
   <input type="radio" name="C2" id="score1" value="5" />5
   <input type="radio" name="C2" id="score1" value="4" />4
   <input type="radio" name="C2" id="score1" value="3" />3
   <input type="radio" name="C2" id="score1" value="2" />2
   <input type="radio" name="C2" id="score1" value="1" />1
  <tr>
  
  
  
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>D. GENERAL OBSERVATION (25%)</b>
  <tr>
  <td> 1. Report between Teacher and Students
  <td>
   <input type="radio" name="D1" id="score1" value="5" />5
   <input type="radio" name="D1" id="score1" value="4" />4
   <input type="radio" name="D1" id="score1" value="3" />3
   <input type="radio" name="D1" id="score1" value="2" />2
   <input type="radio" name="D1" id="score1" value="1" />1
  <tr>
  
  <td> 2. Class Atmosphere
  <td>
   <input type="radio" name="D2" id="score1" value="5" />5
   <input type="radio" name="D2" id="score1" value="4" />4
   <input type="radio" name="D2" id="score1" value="3" />3
   <input type="radio" name="D2" id="score1" value="2" />2
   <input type="radio" name="D2" id="score1" value="1" />1
  <tr>
  
  <td> 3. Overall Teacher Impact
  <td>
   <input type="radio" name="D3" id="score1" value="5" />5
   <input type="radio" name="D3" id="score1" value="4" />4
   <input type="radio" name="D3" id="score1" value="3" />3
   <input type="radio" name="D3" id="score1" value="2" />2
   <input type="radio" name="D3" id="score1" value="1" />1
  <tr>
  
  <td> 4. General Classroom Condition
  <td>
   <input type="radio" name="D4" id="score1" value="5" />5
   <input type="radio" name="D4" id="score1" value="4" />4
   <input type="radio" name="D4" id="score1" value="3" />3
   <input type="radio" name="D4" id="score1" value="2" />2
   <input type="radio" name="D4" id="score1" value="1" />1
  <tr>
 
  
  <td colspan="2" align="center">
    <input type="button" value="Evaluate" onClick="checkDeanForm();" class="box">
  &nbsp;&nbsp;<input name="btnCancel" type="button" id="btnCancel" value="Cancel" onClick="window.location.href='index.php';" class="box">  
 </p>
  

</table>


</form>