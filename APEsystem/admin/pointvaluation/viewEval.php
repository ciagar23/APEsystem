<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$userId = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$sql = "SELECT p_id, p_teacher, p_dateeval, p_timeeval, p_p1, p_p2, p_p3, p_p4, p_p5, p_p6, p_p7, p_p8, p_p9, p_p10, p_p11, p_p12, p_p13, p_p14, p_p15, p_p16, p_p17, p_p18, p_p19, p_p20, p_p21, p_p22, p_p23, p_p24, p_p25, p_p26, p_p27, p_p28, p_p29, p_p30, p_p31, p_p32, p_p33, p_p34, p_p35, p_p36, p_p37, p_p38, p_p39, p_p40, p_p41, p_p42, p_p43, p_p44, p_p45, p_p46, p_p47, p_p48, p_p49, p_p50, p_p51, p_p52, p_p53, p_p54, p_p55, p_p56, p_p57, p_p58, p_p59, p_p60, p_p61, p_p62, p_p63, p_p64, p_p65, p_p66, p_p67, p_p68, p_p69, p_p70, p_p71, p_p72, p_p73, p_p74, p_p75, p_p76, p_p77, p_p78, p_p79, p_p80, p_p81, p_p82, p_total
        FROM tbl_pointvaluation where p_teacher='$userId'";
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
  <td>Date Evaluated: <b><?php echo $p_dateeval;?></b>
  <tr> 
  <td colspan="2">Time Evaluated: <b><?php echo $p_timeeval;?>
  
  
  </table>
  
  <table>
  <tr>
  <td colspan="2"> &nbsp;
  <tr>
  <td colspan="2"> <b>A. Teaching Efficiency (Maximum: 40 points)</b>
  <tr>
  <td> 1. Evaluation Dean/ Area Head/ Level Chair Coordinator:
  <td width="30%">
  <?php echo $p_p1;?>
  <tr>
  <td> 2. Student's Evaluation (TBI):
  <td width="30%">
  <?php echo $p_p2;?>
  <tr>
  <td colspan="2"> <b>A. Professional Responsibility (Maximum: 20 points)</b>
  <tr>
  <td> 1. Syllabi:
  <td width="30%">
  <?php echo $p_p3;?>
  <tr>
  <td> 2. Attendance and Punctuality in Classes:
  <td width="30%">
  <?php echo $p_p4;?>
  <tr>
  <td> 3. Prompt Submission of Grades:
  <td width="30%">
  <?php echo $p_p5;?>
  <tr>
  <td> 4. Accreditation and Other Assigned Tasks:
  <td width="30%">
  <?php echo $p_p6;?>
  <tr>
  <td> 5. Academic Consultation:
  <td width="30%">
  <?php echo $p_p7;?>
  <tr>
  <td> 6. Other Requirements as may be required by the Dean/Principal:
  <td width="30%">
  <?php echo $p_p8;?>
  <tr>
  <td colspan="2"> <b>C. Professional Growth and Advancement (Maximum: 15 points)</b>
  <tr>
  <td colspan="2"> 1. Attendance at Conferences/ Seminars/ Workshops, etc.
  <tr>
  <td> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School: <td width="30%">
  <?php echo $p_p9;?>
  <tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City Area: <td><?php echo $p_p10;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provencial Area: <td><?php echo $p_p11;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regional Area: <td><?php echo $p_p12;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Area: <td><?php echo $p_p13;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International: <td><?php echo $p_p14;?><tr><td>
  <tr>
  <td colspan="2"> 2. Active membership in academic and professional organization.
  <tr>
  <td> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School: <td><?php echo $p_p15;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City Area: <td><?php echo $p_p16;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provencial Area: <td><?php echo $p_p17;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regional Area: <td><?php echo $p_p18;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Area: <td><?php echo $p_p19;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International: <td><?php echo $p_p20;?><tr><td>
  <tr>
  <td colspan="2"> 3. Other Activities acceptable to the.
  <tr>
  <td> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BPTP:<td> <?php echo $p_p21;?>
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
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chairman: <td><?php echo $p_p22;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Officer: <td><?php echo $p_p23;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Member: <td><?php echo $p_p24;?><tr><td>
  <tr>
  <td colspan="2"> Category B:
  <tr>
  <td colspan="2"> a) College/Department-level Standing Committee or <br> 
  					b) Any similar committee/board/council acceptable to the BPTP
  <tr>
  <td> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chairman: <td><?php echo $p_p25;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Officer: <td><?php echo $p_p26;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Member: <td><?php echo $p_p27;?><tr><td>
  <tr>
  <td colspan="2"> 2. Adviser of duly recognized campus organization
  <tr>
  <td> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School: <td><?php echo $p_p28;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;College/Department: <td><?php echo $p_p29;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Section/Class: <td><?php echo $p_p30;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other: <td><?php echo $p_p31;?><tr><td>
  <tr>
  <td colspan="2"> 3. Adviser of duly recognized publication
  <tr>
  <td> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School: <td><?php echo $p_p32;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;College/Department: <td><?php echo $p_p33;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Section/Class: <td><?php echo $p_p34;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other: <td><?php echo $p_p35;?><tr><td>
  <tr>
  <td colspan="2"> 4. Participation and involvement in curricular and co-corricular projects and programs.
  <tr>
  <td>
   Project or Program<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School: <td><?php echo $p_p36;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City Area: <td><?php echo $p_p37;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provencial Area: <td><?php echo $p_p38;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regional Area: <td><?php echo $p_p39;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Area: <td><?php echo $p_p40;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International: <td><?php echo $p_p41;?><tr><td>
  <tr>
  <td>
   Field Trips/ Educational Tours<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bacolod Area: <td><?php echo $p_p42;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Negros Area: <td><?php echo $p_p43;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visayas (Central, East, and West): <td><?php echo $p_p44;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Area: <td><?php echo $p_p45;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International Area: <td><?php echo $p_p46;?><tr><td>
  <tr>
  <td>
   Girls/Boys Scout Campaign<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Local/Provincial Area: <td><?php echo $p_p47;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regional Area: <td><?php echo $p_p48;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Area: <td><?php echo $p_p49;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International Area: <td><?php echo $p_p50;?><tr><td>
  <tr>
  <td> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other projects acceptable to the BPTP: <td><?php echo $p_p51;?>
  <tr>
  <td colspan="2"> 5. Trainers/Coaches in Competitions
  <tr>
  <td >
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School: <td><?php echo $p_p52;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City Area: <td><?php echo $p_p53;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provencial Area: <td><?php echo $p_p54;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regional Area: <td><?php echo $p_p55;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Area: <td><?php echo $p_p56;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International: <td><?php echo $p_p57;?><tr><td>
  <tr>
 
  <td colspan="2"> <b>E. Community involvement (Maximun: 10 points)</b>
  <tr>
  <td colspan="2"> 1. Recognition for outstanding service.
  <tr>
  <td >
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School: <td><?php echo $p_p58;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City Area: <td><?php echo $p_p59;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provencial Area: <td><?php echo $p_p60;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regional Area: <td><?php echo $p_p61;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Area: <td><?php echo $p_p62;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International: <td><?php echo $p_p63;?><tr><td>
  <tr>
  <td colspan="2"> 2. Adviser/consultancy in one's field of expertise for community projects and programs.
  <tr>
  <td >
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School: <td><?php echo $p_p64;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City Area: <td><?php echo $p_p65;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provencial Area: <td><?php echo $p_p66;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regional Area: <td><?php echo $p_p67;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Area: <td><?php echo $p_p68;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International: <td><?php echo $p_p69;?><tr><td>
  <tr>
 
  <td colspan="2"> 3. Participation in community projects.
  <tr>
  <td >
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School: <td><?php echo $p_p70;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City Area: <td><?php echo $p_p71;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provencial Area: <td><?php echo $p_p72;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regional Area: <td><?php echo $p_p73;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Area: <td><?php echo $p_p74;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International: <td><?php echo $p_p75;?><tr><td>
  <tr>
  <td colspan="2"> 4. Active membership in religious, civic or social organizations.
  <tr>
  <td >
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School: <td><?php echo $p_p76;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City Area: <td><?php echo $p_p77;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provencial Area: <td><?php echo $p_p78;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regional Area: <td><?php echo $p_p79;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Area: <td><?php echo $p_p80;?><tr><td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International: <td><?php echo $p_p81;?><tr><td>
  <tr>
 
  <td colspan="2"> 5. Other community or related service.
  <tr>
  <td >
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Acceptable to the BPTP: <td><?php echo $p_p82;?><tr><td>
  <tr> <tr  bgcolor="#CCCCCC">
  <td>
  <b>Total Points </b>: <td><b><?php echo $p_total;?><tr><td>
  <tr>
 
 
 
 
 
 
 
 
  

</table>


</form>

<?php }?>