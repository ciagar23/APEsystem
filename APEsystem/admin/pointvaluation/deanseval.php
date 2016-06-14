<?php
if (!defined('WEB_ROOT')) {
	exit;
}


$userId = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$sql = "SELECT user_id, user_name, user_regdate, user_last_login, user_fname, user_lname, user_position
        FROM tbl_user where user_name='$userId'";
$result = dbQuery($sql);		
extract(dbFetchAssoc($result));

		$dean = mysql_query( "SELECT *
        FROM tbl_deanseval where d_teacher='$userId'");
		$showdean = mysql_fetch_array($dean);	
		$deantotal= $showdean['d_total'];
		if ($deantotal !=0){
		$total = $deantotal;} else
		{$total ='<font color=red>not yet evaluated';}

		$student = mysql_query( "SELECT *
        FROM tbl_studentseval where d_teacher='$userId'");
		$showstudent = mysql_fetch_array($student);	
		$studenttotal= $showstudent['d_total'];
		if ($studenttotal !=0){
		$totals = $studenttotal;} else
		{$totals ='<font color=red>not yet evaluated';}

?> 
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />

<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>

<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%d-%M-%Y"

		});
	};
</script>
<p class="errorMessage"><?php echo $errorMessage; ?></p>
<form action="process.php?action=deanseval" method="post" enctype="multipart/form-data" name="frmAddSchedule">
  <input name="txtUserName" type="hidden" id="txtUserId" value="<?php echo $user_name; ?>">
  <input name="fullname" type="hidden" id="txtUserId" value="<?php echo $user_fname.' '.$user_lname; ?>">
  <!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link type="text/css" href="css/bootstrap.min.css" />
        <link type="text/css" href="css/bootstrap-timepicker.min.css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-2.2.2.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
    </head>
    <body>
 
 
        <script type="text/javascript">
            $('#timepicker1').timepicker();
        </script>
    </body>
</html>

 <table border="0" cellpadding="5" cellspacing="1" width="100%" class="entryTable" align="center">
  <tr>
  <td>Name of Teacher: <b><?php echo $user_fname.' '.$user_lname;?></b>
  <td>Date Evaluated: <input type="text" name="dateEval" id="inputField" size="12" />
  <tr> 
  <td>Time Evaluated: <input type="text" name="timeEval"/>
  <td>&nbsp; <input type="hidden" name="classSize" value="class" />
  <input type="hidden" name="courseNum" value="class"  />
  <input type="hidden" name="courseDesc" value="class"  />
  </table>
  <table>
  <tr>
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>A. Teaching Efficiency (Maximum: 40 points)</b>
  <tr>
  <td> 1. Evaluation Dean/ Area Head/ Level Chair Coordinator:
  <td width="30%">
  <?php echo $total;?>
  
  <input name="p1" type="hidden" value="<?php echo $deantotal; ?>">
  <tr>
  <td> 2. Student's Evaluation (TBI):
  <td width="30%">
  <?php echo $totals;?>
  
  <input name="p2" type="hidden" value="<?php echo $studenttotal; ?>">
  <tr>
  <td colspan="2"> <b>A. Professional Responsibility (Maximum: 20 points)</b>
  <tr>
  <td> 1. Syllabi:
  <td width="30%">
  <input type="text" name="p3" size="3" />
  <tr>
  <td> 2. Attendance and Punctuality in Classes:
  <td width="30%">
  <input type="text" name="p4" size="3" />
  <tr>
  <td> 3. Prompt Submission of Grades:
  <td width="30%">
  <input type="text" name="p5" size="3" />
  <tr>
  <td> 4. Accreditation and Other Assigned Tasks:
  <td width="30%">
  <input type="text" name="p6" size="3" />
  <tr>
  <td> 5. Academic Consultation:
  <td width="30%">
  <input type="text" name="p7" size="3" />
  <tr>
  <td> 6. Other Requirements as may be required by the Dean/Principal:
  <td width="30%">
  <input type="text" name="p8" size="3" />
  <tr>
  <td colspan="2"> <b>C. Professional Growth and Advancement (Maximum: 15 points)</b>
  <tr>
  <td colspan="2"> 1. Attendance at Conferences/ Seminars/ Workshops, etc.
  <tr>
  <td> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School: <td width="30%">
  <input type="text" name="p9" size="3" />
  <tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City Area: <td><input type="text" name="p10" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provencial Area: <td><input type="text" name="p11" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regional Area: <td><input type="text" name="p12" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Area: <td><input type="text" name="p13" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International: <td><input type="text" name="p14" size="3" /><tr><td>
  <tr>
  <td colspan="2"> 2. Active membership in academic and professional organization.
  <tr>
  <td> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School: <td><input type="text" name="p15" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City Area: <td><input type="text" name="p16" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provencial Area: <td><input type="text" name="p17" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regional Area: <td><input type="text" name="p18" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Area: <td><input type="text" name="p19" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International: <td><input type="text" name="p20" size="3" /><tr><td>
  <tr>
  <td colspan="2"> 3. Other Activities acceptable to the.
  <tr>
  <td> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BPTP:<td> <input type="text" name="p21" size="3" />
  <tr>
  <td colspan="2"> <b>D. Service to the School (Maximum: 15 points)</b>
  <tr>
  <td colspan="2"> 1. Membership in committees/Boards/Councils.
  <tr>
  <td colspan="2"> Category A:
  <tr>
  <td colspan="2"> a) School-level standing committee/Board/Council or <br> 
  					b) Any similar committee/board/council acceptable to the BPTP
  <tr>
  <td> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chairman: <td><input type="text" name="p22" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Officer: <td><input type="text" name="p23" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Member: <td><input type="text" name="p24" size="3" /><tr><td>
  <tr>
  <td colspan="2"> Category B:
  <tr>
  <td colspan="2"> a) College/Department-level Standing Committee or <br> 
  					b) Any similar committee/board/council acceptable to the BPTP
  <tr>
  <td> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chairman: <td><input type="text" name="p25" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Officer: <td><input type="text" name="p26" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Member: <td><input type="text" name="p27" size="3" /><tr><td>
  <tr>
  <td colspan="2"> 2. Adviser of duly recognized campus organization
  <tr>
  <td> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School: <td><input type="text" name="p28" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;College/Department: <td><input type="text" name="p29" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Section/Class: <td><input type="text" name="p30" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other: <td><input type="text" name="p31" size="3" /><tr><td>
  <tr>
  <td colspan="2"> 3. Adviser of duly recognized publication
  <tr>
  <td> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School: <td><input type="text" name="p32" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;College/Department: <td><input type="text" name="p33" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Section/Class: <td><input type="text" name="p34" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other: <td><input type="text" name="p35" size="3" /><tr><td>
  <tr>
  <td colspan="2"> 4. Participation and involvement in curricular and co-corricular projects and programs.
  <tr>
  <td>
   Project or Program<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School: <td><input type="text" name="p36" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City Area: <td><input type="text" name="p37" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provencial Area: <td><input type="text" name="p38" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regional Area: <td><input type="text" name="p39" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Area: <td><input type="text" name="p40" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International: <td><input type="text" name="p41" size="3" /><tr><td>
  <tr>
  <td>
   Field Trips/ Educational Tours<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bacolod Area: <td><input type="text" name="p42" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Negros Area: <td><input type="text" name="p43" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visayas (Central, East, and West): <td><input type="text" name="p44" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Area: <td><input type="text" name="p45" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International Area: <td><input type="text" name="p46" size="3" /><tr><td>
  <tr>
  <td>
   Girls/Boys Scout Campaign<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Local/Provincial Area: <td><input type="text" name="p47" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regional Area: <td><input type="text" name="p48" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Area: <td><input type="text" name="p49" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International Area: <td><input type="text" name="p50" size="3" /><tr><td>
  <tr>
  <td> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other projects acceptable to the BPTP: <td><input type="text" name="p51" size="3" />
  <tr>
  <td colspan="2"> 5. Trainers/Coaches in Competitions
  <tr>
  <td >
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School: <td><input type="text" name="p52" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City Area: <td><input type="text" name="p53" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provencial Area: <td><input type="text" name="p54" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regional Area: <td><input type="text" name="p55" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Area: <td><input type="text" name="p56" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International: <td><input type="text" name="p57" size="3" /><tr><td>
  <tr>
 
  <td colspan="2"> <b>E. Community involvement (Maximun: 10 points)</b>
  <tr>
  <td colspan="2"> 1. Recognition for outstanding service.
  <tr>
  <td >
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School: <td><input type="text" name="p58" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City Area: <td><input type="text" name="p59" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provencial Area: <td><input type="text" name="p60" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regional Area: <td><input type="text" name="p61" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Area: <td><input type="text" name="p62" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International: <td><input type="text" name="p63" size="3" /><tr><td>
  <tr>
  <td colspan="2"> 2. Adviser/consultancy in one's field of expertise for community projects and programs.
  <tr>
  <td >
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School: <td><input type="text" name="p64" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City Area: <td><input type="text" name="p65" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provencial Area: <td><input type="text" name="p66" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regional Area: <td><input type="text" name="p67" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Area: <td><input type="text" name="p68" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International: <td><input type="text" name="p69" size="3" /><tr><td>
  <tr>
 
  <td colspan="2"> 3. Participation in community projects.
  <tr>
  <td >
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School: <td><input type="text" name="p70" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City Area: <td><input type="text" name="p71" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provencial Area: <td><input type="text" name="p72" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regional Area: <td><input type="text" name="p73" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Area: <td><input type="text" name="p74" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International: <td><input type="text" name="p75" size="3" /><tr><td>
  <tr>
  <td colspan="2"> 4. Active membership in religious, civic or social organizations.
  <tr>
  <td >
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School: <td><input type="text" name="p76" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City Area: <td><input type="text" name="p77" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provencial Area: <td><input type="text" name="p78" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regional Area: <td><input type="text" name="p79" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Area: <td><input type="text" name="p80" size="3" /><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International: <td><input type="text" name="p81" size="3" /><tr><td>
  <tr>
 
  <td colspan="2"> 5. Other community or related service.
  <tr>
  <td >
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Acceptable to the BPTP: <td><input type="text" name="p82" size="3" /><tr><td>
  <tr>
 
 
 
 
 
 
 
 
 
 
 
  <tr>
  <td colspan="2" align="center">
    <input type="button" value="Evaluate" onClick="checkDeanForm();" class="box">
  &nbsp;&nbsp;<input name="btnCancel" type="button" id="btnCancel" value="Cancel" onClick="window.location.href='index.php';" class="box">  
 </p>
  

</table>


</form>