<?php
require_once '../../library/config.php';
require_once '../library/functions.php';

checkUser();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
	
	case 'deanseval' :
		deanseval();
		break;
	
	case 'modifyeval' :
		modifyeval();
		break;
		
	case 'modify' :
		modifyUser();
		break;
		
	case 'changepass' :
		changepass();
		break;
		
	case 'delete' :
		deleteUser();
		break;
    

	default :
	    // if action is not defined or unknown
		// move to main user page
		header('Location: index.php');
}


function modifyeval()
{

$teacher = $_POST['txtUserName'];
$fullname = $_POST['fullname'];
$dateEval= $_POST['dateEval'];
$timeEval= $_POST['timeEval'];
$p1= isset($_POST['p1']) ? $_POST['p1']: '';
$p2= isset($_POST['p2']) ? $_POST['p2']: '';
$p3= isset($_POST['p3']) ? $_POST['p3']: '';
$p4= isset($_POST['p4']) ? $_POST['p4']: '';
$p5= isset($_POST['p5']) ? $_POST['p5']: '';
$p6= isset($_POST['p6']) ? $_POST['p6']: '';
$p7= isset($_POST['p7']) ? $_POST['p7']: '';
$p8= isset($_POST['p8']) ? $_POST['p8']: '';
$p9= isset($_POST['p9']) ? $_POST['p9']: '';
$p9= isset($_POST['p9']) ? $_POST['p9']: '';
$p10= isset($_POST['p10']) ? $_POST['p10']: '';
$p11= isset($_POST['p11']) ? $_POST['p11']: '';
$p12= isset($_POST['p12']) ? $_POST['p12']: '';
$p13= isset($_POST['p13']) ? $_POST['p13']: '';
$p14= isset($_POST['p14']) ? $_POST['p14']: '';
$p15= isset($_POST['p15']) ? $_POST['p15']: '';
$p16= isset($_POST['p16']) ? $_POST['p16']: '';
$p17= isset($_POST['p17']) ? $_POST['p17']: '';
$p18= isset($_POST['p18']) ? $_POST['p18']: '';
$p19= isset($_POST['p19']) ? $_POST['p19']: '';
$p20= isset($_POST['p20']) ? $_POST['p20']: '';
$p21= isset($_POST['p21']) ? $_POST['p21']: '';
$p22= isset($_POST['p22']) ? $_POST['p22']: '';
$p23= isset($_POST['p23']) ? $_POST['p23']: '';
$p24= isset($_POST['p24']) ? $_POST['p24']: '';
$p25= isset($_POST['p25']) ? $_POST['p25']: '';
$p26= isset($_POST['p26']) ? $_POST['p26']: '';
$p27= isset($_POST['p27']) ? $_POST['p27']: '';
$p28= isset($_POST['p28']) ? $_POST['p28']: '';
$p29= isset($_POST['p29']) ? $_POST['p29']: '';
$p30= isset($_POST['p30']) ? $_POST['p30']: '';
$p31= isset($_POST['p31']) ? $_POST['p31']: '';
$p32= isset($_POST['p32']) ? $_POST['p32']: '';
$p33= isset($_POST['p33']) ? $_POST['p33']: '';
$p34= isset($_POST['p34']) ? $_POST['p34']: '';
$p35= isset($_POST['p35']) ? $_POST['p35']: '';
$p36= isset($_POST['p36']) ? $_POST['p36']: '';
$p37= isset($_POST['p37']) ? $_POST['p37']: '';
$p38= isset($_POST['p38']) ? $_POST['p38']: '';
$p39= isset($_POST['p39']) ? $_POST['p39']: '';
$p40= isset($_POST['p40']) ? $_POST['p40']: '';
$p41= isset($_POST['p41']) ? $_POST['p41']: '';
$p42= isset($_POST['p42']) ? $_POST['p42']: '';
$p43= isset($_POST['p43']) ? $_POST['p43']: '';
$p44= isset($_POST['p44']) ? $_POST['p44']: '';
$p45= isset($_POST['p45']) ? $_POST['p45']: '';
$p46= isset($_POST['p46']) ? $_POST['p46']: '';
$p47= isset($_POST['p47']) ? $_POST['p47']: '';
$p48= isset($_POST['p48']) ? $_POST['p48']: '';
$p49= isset($_POST['p49']) ? $_POST['p49']: '';
$p50= isset($_POST['p50']) ? $_POST['p50']: '';
$p51= isset($_POST['p51']) ? $_POST['p51']: '';
$p52= isset($_POST['p52']) ? $_POST['p52']: '';
$p53= isset($_POST['p53']) ? $_POST['p53']: '';
$p54= isset($_POST['p54']) ? $_POST['p54']: '';
$p55= isset($_POST['p55']) ? $_POST['p55']: '';
$p56= isset($_POST['p56']) ? $_POST['p56']: '';
$p57= isset($_POST['p57']) ? $_POST['p57']: '';
$p58= isset($_POST['p58']) ? $_POST['p58']: '';
$p59= isset($_POST['p59']) ? $_POST['p59']: '';
$p60= isset($_POST['p60']) ? $_POST['p60']: '';
$p61= isset($_POST['p61']) ? $_POST['p61']: '';
$p62= isset($_POST['p62']) ? $_POST['p62']: '';
$p63= isset($_POST['p63']) ? $_POST['p63']: '';
$p64= isset($_POST['p64']) ? $_POST['p64']: '';
$p65= isset($_POST['p65']) ? $_POST['p65']: '';
$p66= isset($_POST['p66']) ? $_POST['p66']: '';
$p67= isset($_POST['p67']) ? $_POST['p67']: '';
$p68= isset($_POST['p68']) ? $_POST['p68']: '';
$p69= isset($_POST['p69']) ? $_POST['p69']: '';
$p70= isset($_POST['p70']) ? $_POST['p70']: '';
$p71= isset($_POST['p71']) ? $_POST['p71']: '';
$p72= isset($_POST['p72']) ? $_POST['p72']: '';
$p73= isset($_POST['p73']) ? $_POST['p73']: '';
$p74= isset($_POST['p74']) ? $_POST['p74']: '';
$p75= isset($_POST['p75']) ? $_POST['p75']: '';
$p76= isset($_POST['p76']) ? $_POST['p76']: '';
$p77= isset($_POST['p77']) ? $_POST['p77']: '';
$p78= isset($_POST['p78']) ? $_POST['p78']: '';
$p79= isset($_POST['p79']) ? $_POST['p79']: '';
$p80= isset($_POST['p80']) ? $_POST['p80']: '';
$p81= isset($_POST['p81']) ? $_POST['p81']: '';
$p82= isset($_POST['p82']) ? $_POST['p82']: '';


$total = $p1 + $p2 + $p3 + $p4 + $p5 + $p6 + $p7 + $p8 + $p9 + $p10 + $p11 + $p12 + $p13 + $p14 + $p15 + $p16 + $p17 + $p18 + $p19 + $p20 + $p21 + $p22 + $p23 + $p24 + $p25 + $p26 + $p27 + $p28 + $p29 + $p30 + $p31 + $p32 + $p33 + $p34 + $p35 + $p36 + $p37 + $p38 + $p39 + $p40 + $p41 + $p42 + $p43 + $p44 + $p45 + $p46 + $p47 + $p48 + $p49 + $p50 + $p50 + $p51 + $p52 + $p53 + $p54 + $p55 + $p56 + $p57 + $p58 + $p59 + $p60 + $p61 + $p62 + $p63 + $p64 + $p65 + $p66 + $p67 + $p68 + $p69 + $p70 + $p71 + $p72 + $p73 + $p74 + $p75 + $p76 + $p77 + $p78 + $p79 + $p80 + $p81 + $p82;
			
		$sql   = "UPDATE tbl_pointvaluation SET p_teacher='$teacher', p_dateEval='$dateEval', p_timeEval='$timeEval', p_p1='$p1', p_p2='$p2', p_p3='$p3', p_p4='$p4', p_p5='$p5', p_p6='$p6', p_p7='$p7', p_p8='$p8', p_p9='$p9', p_p10='$p10', p_p11='$p11', p_p12='$p12', p_p13='$p13', p_p14='$p14', p_p15='$p15', p_p16='$p16', p_p17='$p17', p_p18='$p18', p_p19='$p19', p_p20='$p20', p_p21='$p21', p_p22='$p22', p_p23='$p23', p_p24='$p24', p_p25='$p25', p_p26='$p26', p_p27='$p27', p_p28='$p28', p_p29='$p29', p_p30='$p30', p_p31='$p31', p_p32='$p32', p_p33='$p33', p_p34='$p34', p_p35='$p35', p_p36='$p36', p_p37='$p37', p_p38='$p38', p_p39='$p39', p_p40='$p40', p_p41='$p41', p_p42='$p42', p_p43='$p43', p_p44='$p44', p_p45='$p45', p_p46='$p46', p_p47='$p47', p_p48='$p48', p_p49='$p49', p_p50='$p50', p_p51='$p51', p_p52='$p52', p_p53='$p53', p_p54='$p54', p_p55='$p55', p_p56='$p56', p_p57='$p57', p_p58='$p58', p_p59='$p59', p_p60='$p60', p_p61='$p61', p_p62='$p62', p_p63='$p63', p_p64='$p64', p_p65='$p65', p_p66='$p66', p_p67='$p67', p_p68='$p68', p_p69='$p69', p_p70='$p70', p_p71='$p71', p_p72='$p72', p_p73='$p73', p_p74='$p74', p_p75='$p75', p_p76='$p76', p_p77='$p77', p_p78='$p78', p_p79='$p79', p_p80='$p80', p_p81='$p81', p_p82='$p82', p_total='$total' WHERE p_teacher='$teacher'";
	
		dbQuery($sql);
		header('Location: index.php?success=' . urlencode('You have Successfully Reevaluated '. $fullname));	
	
}

/*
	Modify a user
*/

function deanseval()
{

$teacher = $_POST['txtUserName'];
$fullname = $_POST['fullname'];
$dateEval= $_POST['dateEval'];
$timeEval= $_POST['timeEval'];
$p1= isset($_POST['p1']) ? $_POST['p1']: '';
$p2= isset($_POST['p2']) ? $_POST['p2']: '';
$p3= isset($_POST['p3']) ? $_POST['p3']: '';
$p4= isset($_POST['p4']) ? $_POST['p4']: '';
$p5= isset($_POST['p5']) ? $_POST['p5']: '';
$p6= isset($_POST['p6']) ? $_POST['p6']: '';
$p7= isset($_POST['p7']) ? $_POST['p7']: '';
$p8= isset($_POST['p8']) ? $_POST['p8']: '';
$p9= isset($_POST['p9']) ? $_POST['p9']: '';
$p9= isset($_POST['p9']) ? $_POST['p9']: '';
$p10= isset($_POST['p10']) ? $_POST['p10']: '';
$p11= isset($_POST['p11']) ? $_POST['p11']: '';
$p12= isset($_POST['p12']) ? $_POST['p12']: '';
$p13= isset($_POST['p13']) ? $_POST['p13']: '';
$p14= isset($_POST['p14']) ? $_POST['p14']: '';
$p15= isset($_POST['p15']) ? $_POST['p15']: '';
$p16= isset($_POST['p16']) ? $_POST['p16']: '';
$p17= isset($_POST['p17']) ? $_POST['p17']: '';
$p18= isset($_POST['p18']) ? $_POST['p18']: '';
$p19= isset($_POST['p19']) ? $_POST['p19']: '';
$p20= isset($_POST['p20']) ? $_POST['p20']: '';
$p21= isset($_POST['p21']) ? $_POST['p21']: '';
$p22= isset($_POST['p22']) ? $_POST['p22']: '';
$p23= isset($_POST['p23']) ? $_POST['p23']: '';
$p24= isset($_POST['p24']) ? $_POST['p24']: '';
$p25= isset($_POST['p25']) ? $_POST['p25']: '';
$p26= isset($_POST['p26']) ? $_POST['p26']: '';
$p27= isset($_POST['p27']) ? $_POST['p27']: '';
$p28= isset($_POST['p28']) ? $_POST['p28']: '';
$p29= isset($_POST['p29']) ? $_POST['p29']: '';
$p30= isset($_POST['p30']) ? $_POST['p30']: '';
$p31= isset($_POST['p31']) ? $_POST['p31']: '';
$p32= isset($_POST['p32']) ? $_POST['p32']: '';
$p33= isset($_POST['p33']) ? $_POST['p33']: '';
$p34= isset($_POST['p34']) ? $_POST['p34']: '';
$p35= isset($_POST['p35']) ? $_POST['p35']: '';
$p36= isset($_POST['p36']) ? $_POST['p36']: '';
$p37= isset($_POST['p37']) ? $_POST['p37']: '';
$p38= isset($_POST['p38']) ? $_POST['p38']: '';
$p39= isset($_POST['p39']) ? $_POST['p39']: '';
$p40= isset($_POST['p40']) ? $_POST['p40']: '';
$p41= isset($_POST['p41']) ? $_POST['p41']: '';
$p42= isset($_POST['p42']) ? $_POST['p42']: '';
$p43= isset($_POST['p43']) ? $_POST['p43']: '';
$p44= isset($_POST['p44']) ? $_POST['p44']: '';
$p45= isset($_POST['p45']) ? $_POST['p45']: '';
$p46= isset($_POST['p46']) ? $_POST['p46']: '';
$p47= isset($_POST['p47']) ? $_POST['p47']: '';
$p48= isset($_POST['p48']) ? $_POST['p48']: '';
$p49= isset($_POST['p49']) ? $_POST['p49']: '';
$p50= isset($_POST['p50']) ? $_POST['p50']: '';
$p51= isset($_POST['p51']) ? $_POST['p51']: '';
$p52= isset($_POST['p52']) ? $_POST['p52']: '';
$p53= isset($_POST['p53']) ? $_POST['p53']: '';
$p54= isset($_POST['p54']) ? $_POST['p54']: '';
$p55= isset($_POST['p55']) ? $_POST['p55']: '';
$p56= isset($_POST['p56']) ? $_POST['p56']: '';
$p57= isset($_POST['p57']) ? $_POST['p57']: '';
$p58= isset($_POST['p58']) ? $_POST['p58']: '';
$p59= isset($_POST['p59']) ? $_POST['p59']: '';
$p60= isset($_POST['p60']) ? $_POST['p60']: '';
$p61= isset($_POST['p61']) ? $_POST['p61']: '';
$p62= isset($_POST['p62']) ? $_POST['p62']: '';
$p63= isset($_POST['p63']) ? $_POST['p63']: '';
$p64= isset($_POST['p64']) ? $_POST['p64']: '';
$p65= isset($_POST['p65']) ? $_POST['p65']: '';
$p66= isset($_POST['p66']) ? $_POST['p66']: '';
$p67= isset($_POST['p67']) ? $_POST['p67']: '';
$p68= isset($_POST['p68']) ? $_POST['p68']: '';
$p69= isset($_POST['p69']) ? $_POST['p69']: '';
$p70= isset($_POST['p70']) ? $_POST['p70']: '';
$p71= isset($_POST['p71']) ? $_POST['p71']: '';
$p72= isset($_POST['p72']) ? $_POST['p72']: '';
$p73= isset($_POST['p73']) ? $_POST['p73']: '';
$p74= isset($_POST['p74']) ? $_POST['p74']: '';
$p75= isset($_POST['p75']) ? $_POST['p75']: '';
$p76= isset($_POST['p76']) ? $_POST['p76']: '';
$p77= isset($_POST['p77']) ? $_POST['p77']: '';
$p78= isset($_POST['p78']) ? $_POST['p78']: '';
$p79= isset($_POST['p79']) ? $_POST['p79']: '';
$p80= isset($_POST['p80']) ? $_POST['p80']: '';
$p81= isset($_POST['p81']) ? $_POST['p81']: '';
$p82= isset($_POST['p82']) ? $_POST['p82']: '';


$total = $p1 + $p2 + $p3 + $p4 + $p5 + $p6 + $p7 + $p8 + $p9 + $p10 + $p11 + $p12 + $p13 + $p14 + $p15 + $p16 + $p17 + $p18 + $p19 + $p20 + $p21 + $p22 + $p23 + $p24 + $p25 + $p26 + $p27 + $p28 + $p29 + $p30 + $p31 + $p32 + $p33 + $p34 + $p35 + $p36 + $p37 + $p38 + $p39 + $p40 + $p41 + $p42 + $p43 + $p44 + $p45 + $p46 + $p47 + $p48 + $p49 + $p50 + $p50 + $p51 + $p52 + $p53 + $p54 + $p55 + $p56 + $p57 + $p58 + $p59 + $p60 + $p61 + $p62 + $p63 + $p64 + $p65 + $p66 + $p67 + $p68 + $p69 + $p70 + $p71 + $p72 + $p73 + $p74 + $p75 + $p76 + $p77 + $p78 + $p79 + $p80 + $p81 + $p82;
			
		$sql   = "INSERT INTO tbl_pointvaluation (p_teacher, p_dateEval, p_timeEval, p_p1, p_p2, p_p3, p_p4, p_p5, p_p6, p_p7, p_p8, p_p9, p_p10, p_p11, p_p12, p_p13, p_p14, p_p15, p_p16, p_p17, p_p18, p_p19, p_p20, p_p21, p_p22, p_p23, p_p24, p_p25, p_p26, p_p27, p_p28, p_p29, p_p30, p_p31, p_p32, p_p33, p_p34, p_p35, p_p36, p_p37, p_p38, p_p39, p_p40, p_p41, p_p42, p_p43, p_p44, p_p45, p_p46, p_p47, p_p48, p_p49, p_p50, p_p51, p_p52, p_p53, p_p54, p_p55, p_p56, p_p57, p_p58, p_p59, p_p60, p_p61, p_p62, p_p63, p_p64, p_p65, p_p66, p_p67, p_p68, p_p69, p_p70, p_p71, p_p72, p_p73, p_p74, p_p75, p_p76, p_p77, p_p78, p_p79, p_p80, p_p81, p_p82, p_total)
		          VALUES ('$teacher', '$dateEval', '$timeEval', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11', '$p12', '$p13', '$p14', '$p15', '$p16', '$p17', '$p18', '$p19', '$p20', '$p21', '$p22', '$p23', '$p24', '$p25', '$p26', '$p27', '$p28', '$p29', '$p30', '$p31', '$p32', '$p33', '$p34', '$p35', '$p36', '$p37', '$p38', '$p39', '$p40', '$p41', '$p42', '$p43', '$p44', '$p45', '$p46', '$p47', '$p48', '$p49', '$p50', '$p51', '$p52', '$p53', '$p54', '$p55', '$p56', '$p57', '$p58', '$p59', '$p60', '$p61', '$p62', '$p63', '$p64', '$p65', '$p66', '$p67', '$p68', '$p69', '$p70', '$p71', '$p72', '$p73', '$p74', '$p75', '$p76', '$p77', '$p78', '$p79', '$p80', '$p81', '$p82', '$total')";
	
		dbQuery($sql);
		header('Location: index.php?success=' . urlencode('You have Successfully Evaluated '. $fullname));	
	
}

/*
	Modify a user
*/
function modifyUser()
{
    $UserId = $_POST['txtUserId'];
	$Room = $_POST['txtRoom'];
	$Subject = $_POST['txtSubject'];
	$CName = $_POST['txtCName'];
	$From = $_POST['txtFrom'];
	$To  = $_POST['txtTo'];
	$M = (isset($_POST['txtM']) && $_POST['txtM'] != '') ? $_POST['txtM'] : '';
	$T = (isset($_POST['txtT']) && $_POST['txtT'] != '') ? $_POST['txtT'] : '';
	$W = (isset($_POST['txtW']) && $_POST['txtW'] != '') ? $_POST['txtW'] : '';
	$TH = (isset($_POST['txtTH']) && $_POST['txtTH'] != '') ? $_POST['txtTH'] : '';
	$F = (isset($_POST['txtF']) && $_POST['txtF'] != '') ? $_POST['txtF'] : '';
	$S = (isset($_POST['txtS']) && $_POST['txtS'] != '') ? $_POST['txtS'] : '';
	
	$sql   = "UPDATE tbl_schedule 
	          SET  s_room='$Room', s_subject='$Subject', s_class='$CName', s_from='$From', s_to='$To', s_m='$M', s_t='$T', s_w='$W', s_th='$TH', s_f='$F', s_s='$S'
			  WHERE s_id = $UserId";

	dbQuery($sql);
	header('Location: index.php?success=' . urlencode('You have Successfully Modified this Time Slot'));

}/*
	Modify a user
*/
function changepass()
{
	$session = $_SESSION["username"];	
    $Password = $_POST['txtPassword'];
    $Password2 = $_POST['txtPassword2'];
	
	if ($Password != $Password2)
	{
	header('Location: index.php?view=changepassword&alert=' . urlencode('PassWord Do not Match'));
	}
	else
	{
	
	$sql   = "UPDATE tbl_user 
	          SET user_password = PASSWORD('$Password')
			  WHERE user_name = '$session'";

	dbQuery($sql);
	header('Location: index.php?view=changepassword&alert=' . urlencode('You have Successfully Modified this User'));
}
}

/*
	Remove a user
*/
function deleteUser()
{
	if (isset($_GET['userId']) && (int)$_GET['userId'] > 0) {
		$userId = (int)$_GET['userId'];
	} else {
		header('Location: index.php');
	}
	
	
	$sql = "DELETE FROM tbl_schedule 
	        WHERE s_id = $userId";
	dbQuery($sql);
	
	header('Location: index.php?success=' . urlencode('You have Successfully Deleted a Time Slot'));
}
?>
