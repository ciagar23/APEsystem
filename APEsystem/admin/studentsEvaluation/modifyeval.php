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
  </table>
  <table>
  <tr>
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>A. PLANNING ANG PREPARATION</b>
  <tr>
  <td> 1. Comes to class Well Prepared
  <td width="30%">
   <input type="radio" name="A1" id="score1" value="5" />5
   <input type="radio" name="A1" id="score1" value="4" />4
   <input type="radio" name="A1" id="score1" value="3" />3
   <input type="radio" name="A1" id="score1" value="2" />2
   <input type="radio" name="A1" id="score1" value="1" />1
  <tr>
  
  <td> 2. Has needed equipment and materials readily available
  <td>
   <input type="radio" name="A2" id="score1" value="5" />5
   <input type="radio" name="A2" id="score1" value="4" />4
   <input type="radio" name="A2" id="score1" value="3" />3
   <input type="radio" name="A2" id="score1" value="2" />2
   <input type="radio" name="A2" id="score1" value="1" />1
  <tr>
    
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>B. PRESENTATION ON THE LESSON</b>
  <tr>
  <td> 3. Organization of the Subject Matter
  <td>
   <input type="radio" name="A3" id="score1" value="5" />5
   <input type="radio" name="A3" id="score1" value="4" />4
   <input type="radio" name="A3" id="score1" value="3" />3
   <input type="radio" name="A3" id="score1" value="2" />2
   <input type="radio" name="A3" id="score1" value="1" />1
  <tr>
  <td> 4. Demonstrates mstery of the student matter
  <td>
   <input type="radio" name="A4" id="score1" value="5" />5
   <input type="radio" name="A4" id="score1" value="4" />4
   <input type="radio" name="A4" id="score1" value="3" />3
   <input type="radio" name="A4" id="score1" value="2" />2
   <input type="radio" name="A4" id="score1" value="1" />1
  
 
  <tr>
  <td> 5. Uses a variety of teaching techniques appropriate to student's needs
  <td>
   <input type="radio" name="A5" id="score1" value="5" />5
   <input type="radio" name="A5" id="score1" value="4" />4
   <input type="radio" name="A5" id="score1" value="3" />3
   <input type="radio" name="A5" id="score1" value="2" />2
   <input type="radio" name="A5" id="score1" value="1" />1
  
 <tr>
  <td> 6. Stimulates critical thinking through a variety of questioning techniques
  <td>
   <input type="radio" name="A6" id="score1" value="5" />5
   <input type="radio" name="A6" id="score1" value="4" />4
   <input type="radio" name="A6" id="score1" value="3" />3
   <input type="radio" name="A6" id="score1" value="2" />2
   <input type="radio" name="A6" id="score1" value="1" />1
  <tr>
  <td> 7. Answer students' questions thoroughly
  <td>
   <input type="radio" name="A7" id="score1" value="5" />5
   <input type="radio" name="A7" id="score1" value="4" />4
   <input type="radio" name="A7" id="score1" value="3" />3
   <input type="radio" name="A7" id="score1" value="2" />2
   <input type="radio" name="A7" id="score1" value="1" />1
  <tr>
  <td> 8. Provides Activities that motivates students to learn
  <td>
   <input type="radio" name="A8" id="score1" value="5" />5
   <input type="radio" name="A8" id="score1" value="4" />4
   <input type="radio" name="A8" id="score1" value="3" />3
   <input type="radio" name="A8" id="score1" value="2" />2
   <input type="radio" name="A8" id="score1" value="1" />1
  <tr>
  <td> 9. Explains difficult concept clearly
  <td>
   <input type="radio" name="A9" id="score1" value="5" />5
   <input type="radio" name="A9" id="score1" value="4" />4
   <input type="radio" name="A9" id="score1" value="3" />3
   <input type="radio" name="A9" id="score1" value="2" />2
   <input type="radio" name="A9" id="score1" value="1" />1
  <tr>
  <td> 10. Speaks to appropriate volume
  <td>
   <input type="radio" name="A10" id="score1" value="5" />5
   <input type="radio" name="A10" id="score1" value="4" />4
   <input type="radio" name="A10" id="score1" value="3" />3
   <input type="radio" name="A10" id="score1" value="2" />2
   <input type="radio" name="A10" id="score1" value="1" />1
  <tr>
  <td> 11. Speaks clearly
  <td>
   <input type="radio" name="A11" id="score1" value="5" />5
   <input type="radio" name="A11" id="score1" value="4" />4
   <input type="radio" name="A11" id="score1" value="3" />3
   <input type="radio" name="A11" id="score1" value="2" />2
   <input type="radio" name="A11" id="score1" value="1" />1
  <tr>
  <td> 12. Speaks fluently in the language of instruction <br>
  		(Either English or Filipino depending on the subject)
  <td>
   <input type="radio" name="A12" id="score1" value="5" />5
   <input type="radio" name="A12" id="score1" value="4" />4
   <input type="radio" name="A12" id="score1" value="3" />3
   <input type="radio" name="A12" id="score1" value="2" />2
   <input type="radio" name="A12" id="score1" value="1" />1
   <tr>
  <td> 13. Demonstrates enthusiasm in teaching
  <td>
   <input type="radio" name="A13" id="score1" value="5" />5
   <input type="radio" name="A13" id="score1" value="4" />4
   <input type="radio" name="A13" id="score1" value="3" />3
   <input type="radio" name="A13" id="score1" value="2" />2
   <input type="radio" name="A13" id="score1" value="1" />1
   <tr>
  <td> 14. Avoids the use of indecent language in emphasizing ideas
  <td>
   <input type="radio" name="A14" id="score1" value="5" />5
   <input type="radio" name="A14" id="score1" value="4" />4
   <input type="radio" name="A14" id="score1" value="3" />3
   <input type="radio" name="A14" id="score1" value="2" />2
   <input type="radio" name="A14" id="score1" value="1" />1
   <tr>
     
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>C. CLASSROOM MANAGEMENT</b>
  <tr>
  <td> 15. Comes to class on time
  <td>
   <input type="radio" name="A15" id="score1" value="5" />5
   <input type="radio" name="A15" id="score1" value="4" />4
   <input type="radio" name="A15" id="score1" value="3" />3
   <input type="radio" name="A15" id="score1" value="2" />2
   <input type="radio" name="A15" id="score1" value="1" />1
   <tr>
  <td> 16. Dismisses class on time
  <td>
   <input type="radio" name="A16" id="score1" value="5" />5
   <input type="radio" name="A16" id="score1" value="4" />4
   <input type="radio" name="A16" id="score1" value="3" />3
   <input type="radio" name="A16" id="score1" value="2" />2
   <input type="radio" name="A16" id="score1" value="1" />1
   <tr>
  <td> 17. Uses activities that promote student involvement
  <td>
   <input type="radio" name="A17" id="score1" value="5" />5
   <input type="radio" name="A17" id="score1" value="4" />4
   <input type="radio" name="A17" id="score1" value="3" />3
   <input type="radio" name="A17" id="score1" value="2" />2
   <input type="radio" name="A17" id="score1" value="1" />1
   <tr>
  <td> 18. Maintains active classroom environment
  <td>
   <input type="radio" name="A18" id="score1" value="5" />5
   <input type="radio" name="A18" id="score1" value="4" />4
   <input type="radio" name="A18" id="score1" value="3" />3
   <input type="radio" name="A18" id="score1" value="2" />2
   <input type="radio" name="A18" id="score1" value="1" />1
   <tr>
  <td> 19. Uses classroom time effectively to maximize learning
  <td>
   <input type="radio" name="A19" id="score1" value="5" />5
   <input type="radio" name="A19" id="score1" value="4" />4
   <input type="radio" name="A19" id="score1" value="3" />3
   <input type="radio" name="A19" id="score1" value="2" />2
   <input type="radio" name="A19" id="score1" value="1" />1
   <tr>  
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>D. EVALUATION OF STUDENTS' PERFORMANCE</b>
  <tr>
  <td> 20. Uses the variety of evaluation techniques <br>(e.g. assignments, quizzes, oral and written activities, projects, reports, etc)
  <td>
  <input type="radio" name="A20" id="score1" value="5" />5
   <input type="radio" name="A20" id="score1" value="4" />4
   <input type="radio" name="A20" id="score1" value="3" />3
   <input type="radio" name="A20" id="score1" value="2" />2
   <input type="radio" name="A20" id="score1" value="1" />1
   <tr>
  <td> 21. Constructs tests directly related to skills and concepts taught 
   <td>
  <input type="radio" name="A21" id="score1" value="5" />5
   <input type="radio" name="A21" id="score1" value="4" />4
   <input type="radio" name="A21" id="score1" value="3" />3
   <input type="radio" name="A21" id="score1" value="2" />2
   <input type="radio" name="A21" id="score1" value="1" />1
   <tr>
  <td> 22. Returns students' outputs (test papers, assignment, project, written reports, etc.) promptly
   <td>
  <input type="radio" name="A22" id="score1" value="5" />5
   <input type="radio" name="A22" id="score1" value="4" />4
   <input type="radio" name="A22" id="score1" value="3" />3
   <input type="radio" name="A22" id="score1" value="2" />2
   <input type="radio" name="A22" id="score1" value="1" />1
   <tr>
  <td> 23. Uses a variety of techniques for communicating progress (e.g., immediate feedback, written and verbal comments, grades, individual and group conferences)
   <td>
  <input type="radio" name="A23" id="score1" value="5" />5
   <input type="radio" name="A23" id="score1" value="4" />4
   <input type="radio" name="A23" id="score1" value="3" />3
   <input type="radio" name="A23" id="score1" value="2" />2
   <input type="radio" name="A23" id="score1" value="1" />1
   <tr>
  <td> 24. Shows fairness and group conferences
   <td>
  <input type="radio" name="A24" id="score1" value="5" />5
   <input type="radio" name="A24" id="score1" value="4" />4
   <input type="radio" name="A24" id="score1" value="3" />3
   <input type="radio" name="A24" id="score1" value="2" />2
   <input type="radio" name="A24" id="score1" value="1" />1
   <tr>
  <td> 25. Praises students for good performance
   <td>
  <input type="radio" name="A25" id="score1" value="5" />5
   <input type="radio" name="A25" id="score1" value="4" />4
   <input type="radio" name="A25" id="score1" value="3" />3
   <input type="radio" name="A25" id="score1" value="2" />2
   <input type="radio" name="A25" id="score1" value="1" />1
   <tr>  
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>E. INTERPERSONAL RELATIONSHIPS</b>
  <tr>
  <td> 26. Listens to students' different points of view
   <td>
  <input type="radio" name="A26" id="score1" value="5" />5
   <input type="radio" name="A26" id="score1" value="4" />4
   <input type="radio" name="A26" id="score1" value="3" />3
   <input type="radio" name="A26" id="score1" value="2" />2
   <input type="radio" name="A26" id="score1" value="1" />1
   <tr>
  <td> 27. Treats students with respect
   <td>
  <input type="radio" name="A27" id="score1" value="5" />5
   <input type="radio" name="A27" id="score1" value="4" />4
   <input type="radio" name="A27" id="score1" value="3" />3
   <input type="radio" name="A27" id="score1" value="2" />2
   <input type="radio" name="A27" id="score1" value="1" />1
   <tr>
  <td> 28. Is approachable and friendly
   <td>
  <input type="radio" name="A28" id="score1" value="5" />5
   <input type="radio" name="A28" id="score1" value="4" />4
   <input type="radio" name="A28" id="score1" value="3" />3
   <input type="radio" name="A28" id="score1" value="2" />2
   <input type="radio" name="A28" id="score1" value="1" />1
   <tr>  
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>F. PERSONAL TRAITS</b>
  <tr>
  <td> 29. Demonstrates patience in dealing with students
   <td>
  <input type="radio" name="A29" id="score1" value="5" />5
   <input type="radio" name="A29" id="score1" value="4" />4
   <input type="radio" name="A29" id="score1" value="3" />3
   <input type="radio" name="A29" id="score1" value="2" />2
   <input type="radio" name="A29" id="score1" value="1" />1
   <tr>
  <td> 30. Shows concern for student's needs
   <td>
  <input type="radio" name="A30" id="score1" value="5" />5
   <input type="radio" name="A30" id="score1" value="4" />4
   <input type="radio" name="A30" id="score1" value="3" />3
   <input type="radio" name="A30" id="score1" value="2" />2
   <input type="radio" name="A30" id="score1" value="1" />1
   <tr>
  <td> 31. Uses homur appropriately in the classroom
   <td>
  <input type="radio" name="A31" id="score1" value="5" />5
   <input type="radio" name="A31" id="score1" value="4" />4
   <input type="radio" name="A31" id="score1" value="3" />3
   <input type="radio" name="A31" id="score1" value="2" />2
   <input type="radio" name="A31" id="score1" value="1" />1
   <tr>
  <td> 32. Maintains a pleasant disposition in class
   <td>
  <input type="radio" name="A32" id="score1" value="5" />5
   <input type="radio" name="A32" id="score1" value="4" />4
   <input type="radio" name="A32" id="score1" value="3" />3
   <input type="radio" name="A32" id="score1" value="2" />2
   <input type="radio" name="A32" id="score1" value="1" />1
   <tr>
  <td> 33. Dresses appropriately to command respect
   <td>
  <input type="radio" name="A33" id="score1" value="5" />5
   <input type="radio" name="A33" id="score1" value="4" />4
   <input type="radio" name="A33" id="score1" value="3" />3
   <input type="radio" name="A33" id="score1" value="2" />2
   <input type="radio" name="A33" id="score1" value="1" />1
   </tr> 
 
  <td colspan="2" align="center">
    <input type="button" value="Evaluate" onClick="checkDeanForm();" class="box">
  &nbsp;&nbsp;<input name="btnCancel" type="button" id="btnCancel" value="Cancel" onClick="window.location.href='index.php';" class="box">  
 </p>
  

</table>


</form>