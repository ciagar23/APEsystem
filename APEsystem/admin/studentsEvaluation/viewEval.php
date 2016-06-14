<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$userId = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$sql = "SELECT d_id, d_teacher, d_dateeval, d_timeeval, d_classsize, d_coursenum, d_coursedesc, d_A1, d_A2, d_A3, d_A4, d_A5, d_A6, d_A7, d_A8, d_A9, d_A10, d_A11, d_A12, d_A13, d_A14, d_A15, d_A16, d_A17, d_A18, d_A19, d_A20, d_A21, d_A22, d_A23, d_A24, d_A25, d_A26, d_A27, d_A28, d_A29, d_A30, d_A31, d_A32, d_A33, d_total
        FROM tbl_studentseval where d_teacher='$userId'";
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
  
  
  </table>
  
   <table width="100%">
  <tr>
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>A. PLANNING ANG PREPARATION</b>
  <tr>
  <td> 1. Comes to class Well Prepared
  <td width="30%">
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A1;?>.png">
  <tr>
  
  <td> 2. Has needed equipment and materials readily available
  <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A2;?>.png">
  <tr>
    
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>B. PRESENTATION ON THE LESSON</b>
  <tr>
  <td> 3. Organization of the Subject Matter
  <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A3;?>.png">
  <tr>
  <td> 4. Demonstrates mstery of the student matter
  <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A3;?>.png">  
 
  <tr>
  <td> 5. Uses a variety of teaching techniques appropriate to student's needs
  <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A5;?>.png">
  
 <tr>
  <td> 6. Stimulates critical thinking through a variety of questioning techniques
  <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A6;?>.png">
  <tr>
  <td> 7. Answer students' questions thoroughly
  <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A7;?>.png">
  <tr>
  <td> 8. Provides Activities that motivates students to learn
  <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A8;?>.png">
  <tr>
  <td> 9. Explains difficult concept clearly
  <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A9;?>.png">
  <tr>
  <td> 10. Speaks to appropriate volume
  <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A10;?>.png">
  <tr>
  <td> 11. Speaks clearly
  <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A11;?>.png">
  <tr>
  <td> 12. Speaks fluently in the language of instruction <br>
  		(Either English or Filipino depending on the subject)
  <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A12;?>.png">
   <tr>
  <td> 13. Demonstrates enthusiasm in teaching
  <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A13;?>.png">
   <tr>
  <td> 14. Avoids the use of indecent language in emphasizing ideas
  <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A14;?>.png">
   <tr>
     
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>C. CLASSROOM MANAGEMENT</b>
  <tr>
  <td> 15. Comes to class on time
  <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A15;?>.png">
   <tr>
  <td> 16. Dismisses class on time
  <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A16;?>.png">
   <tr>
  <td> 17. Uses activities that promote student involvement
  <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A17;?>.png">
   <tr>
  <td> 18. Maintains active classroom environment
  <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A18;?>.png">
   <tr>
  <td> 19. Uses classroom time effectively to maximize learning
  <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A19;?>.png">
   <tr>  
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>D. EVALUATION OF STUDENTS' PERFORMANCE</b>
  <tr>
  <td> 20. Uses the variety of evaluation techniques <br>(e.g. assignments, quizzes, oral and written activities, projects, reports, etc)
  <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A20;?>.png">
   <tr>
  <td> 21. Constructs tests directly related to skills and concepts taught 
   <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A21;?>.png">
   <tr>
  <td> 22. Returns students' outputs (test papers, assignment, project, written reports, etc.) promptly
   <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A22;?>.png">
   <tr>
  <td> 23. Uses a variety of techniques for communicating progress (e.g., immediate feedback, written and verbal comments, grades, individual and group conferences)
   <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A23;?>.png">
   <tr>
  <td> 24. Shows fairness and group conferences
   <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A24;?>.png">
   <tr>
  <td> 25. Praises students for good performance
   <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A25;?>.png">
   <tr>  
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>E. INTERPERSONAL RELATIONSHIPS</b>
  <tr>
  <td> 26. Listens to students' different points of view
   <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A26;?>.png">
   <tr>
  <td> 27. Treats students with respect
   <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A27;?>.png">
   <tr>
  <td> 28. Is approachable and friendly
   <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A28;?>.png">
   <tr>  
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>F. PERSONAL TRAITS</b>
  <tr>
  <td> 29. Demonstrates patience in dealing with students
   <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A29;?>.png">
   <tr>
  <td> 30. Shows concern for student's needs
   <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A30;?>.png">
   <tr>
  <td> 31. Uses homur appropriately in the classroom
   <td>
  <td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A31;?>.png">
   <tr>
  <td> 32. Maintains a pleasant disposition in class
   <td><td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A32;?>.png">
   <tr>
  <td> 33. Dresses appropriately to command respect
   <td><td><img src="<?php echo WEB_ROOT;?>admin/rateImages/s<?php echo $d_A33;?>.png">
   <tr> 
  
  <tr>
  <td align="center" colspan="2"><br><br><b>Total: <?php echo $d_total;?> points

</table>


</form>

<?php }?>