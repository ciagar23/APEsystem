<?php
if (!defined('WEB_ROOT')) {
	exit;
}


		

$errorMessage = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '';
$successMessage = (isset($_GET['success']) && $_GET['success'] != '') ? $_GET['success'] : '';



if ($errorMessage == '')
{
$errorMessage = '';
}
else
{
$errorMessage = '<div class="warning_box">'.$errorMessage.'</div>';
}


if ($successMessage == '')
{
$successMessage = '';
}
else
{
$successMessage = '<div class="valid_box">'.$successMessage.'
     </div>';
}


$session = $_SESSION["username"];

$sql = "SELECT *
        FROM tbl_user where user_name='$session'";
		$result = mysql_query($sql);
		$show = mysql_fetch_array($result);	
		$fname= $show['user_fname'];
		$lname= $show['user_lname'];
		$position= $show['user_position'];


$n = count($script);
for ($i = 0; $i < $n; $i++) {
	if ($script[$i] != '') {
		echo '<script language="JavaScript" type="text/javascript" src="' . WEB_ROOT. 'admin/library/' . $script[$i]. '"></script>';
	}
}






$self = WEB_ROOT . 'admin/index.php';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CSAB-CABECS Intranet-based Faculty Information System</title>
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>admin/include/style.css" />
<script type="text/javascript" src="<?php echo WEB_ROOT;?>admin/include/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo WEB_ROOT;?>admin/include/ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='<?php echo WEB_ROOT; ?>admin/include/images/plus.gif' class='statusicon' />", "<img src='<?php echo WEB_ROOT; ?>admin/include/images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>
<script src="jquery.jclock-1.2.0.js.txt" type="text/javascript"></script>
<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>
<script type="text/javascript">
$(function($) {
    $('.jclock').jclock();
});
</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />



<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/common.js"></script>

<script>

	$(document).ready(function(){		
		$(".addProject").colorbox({width:"440px", inline:true, href:"#add-new-project"});
		$(".addMilestone").colorbox({width:"440px", inline:true, href:"#add-new-milestone"});		
		
	});
</script>


<script>
function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
t=setTimeout(function(){startTime()},500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}
</script>


<!--#########################################################################################3-->

<link rel="stylesheet" type="text/css" media="all" href="<?php echo WEB_ROOT;?>calendar/jsDatePick_ltr.min.css" />
<!-- 
	OR if you want to use the calendar in a right-to-left website
	just use the other CSS file instead and don't forget to switch g_jsDatePickDirectionality variable to "rtl"!
	
	<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.css" />
-->
<script type="text/javascript" src="<?php echo WEB_ROOT;?>calendar/jsDatePick.min.1.3.js"></script>
<!-- 
	After you copied those 2 lines of code , make sure you take also the files into the same folder :-)
    Next step will be to set the appropriate statement to "start-up" the calendar on the needed HTML element.
    
    The first example of Javascript snippet is for the most basic use , as a popup calendar
    for a text field input.
-->
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%d-%M-%Y"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
	};
</script>

<!--#########################################################################################3-->


</head>
<body onload="startTime()">
<div id="main_container">

	<div class="header">
    <div class="logo"><a href="#"><img src="<?php echo WEB_ROOT;?>admin/include/images/logo.gif" alt="" title="" border="0" /></a></div>
    
    <div class="right_header">Welcome <?php echo $fname; ?> <?php echo $lname; ?> 
                (<?php echo $position; ?>), <a href="#">Visit site</a> | <a href="<?php echo $self; ?>?logout" class="logout">Logout</a></div>
    <div class="jclock"></div>
    </div>
    
    <div class="main_content">
    
                    <div class="menu">
&nbsp;
                    </div> 
                    
                    
                    
                    
    <div class="center_content">  
    
    
    
    <div class="left_content">
    
	  <a class="menuitem" href=""> <table><tr><td><?php echo date('M d, Y');?><td><div id="txt"> </div> </table>   </a>  
    		
    
            <div class="sidebarmenu">
            
             <a class="menuitem" href="<?php echo WEB_ROOT; ?>admin/">Home</a>
<!--admin##############################################################################################################3-->

<? if ($position =='ADMIN') 
{?>
               
                <a class="menuitem submenuheader" href="">User</a>
                <div class="submenu">
                    <ul>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/user/">View User</a></li>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/user/index.php?view=add">Add User</a></li>
                    </ul>
                </div>
                <a class="menuitem submenuheader" href="" >Faculty Attendance</a>
                <div class="submenu">
                    <ul>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/attendance/">Check Attendance</a></li>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/aHistory/">Attendance History</a></li>
                    </ul>
                </div>
                <a class="menuitem submenuheader" href="">Seminar Attendance</a>
                <div class="submenu">
                    <ul>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/seminar">View Seminars</a></li>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/seminar/?view=add">Add Seminar</a></li>
                    </ul>
                </div>  
                <a class="menuitem submenuheader" href="" >Teacher Schedule</a>
                <div class="submenu">
                    <ul>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/schedule/">View Schedule</a></li>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/schedule/index.php?view=addlist">Add Schedule</a></li>
                    </ul>
                </div>
                <a class="menuitem submenuheader" href="">Performance Evaluation</a>
                <div class="submenu">
                    <ul>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/deansEvaluation">*Dean's Evaluation</a></li>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/chairEvaluation">*Area Chair's Evaluation</a></li>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/studentsEvaluation">*Students' Evaluation</a></li>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/pointvaluation">*Point Valuation for Annual Performance Evaluation</a></li>
                     </ul>
                </div>
                <a class="menuitem submenuheader" href="">Ranking</a>
                <div class="submenu">
                    <ul>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/ranking">*Deans's Evaluation Ranking</a></li>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/ranking/?view=chair">*Area Chair's Evaluation Ranking</a></li>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/ranking/?view=student">*Students' Evaluation Ranking</a></li>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/ranking/?view=point">*Point Valuation for Annual Performance Evaluation Ranking</a>
                    </ul>
                </div> 
                <a class="menuitem submenuheader" href="">Summary of Attendance</a>
                <div class="submenu">
                    <ul>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/attendance/?view=permonth">Per Month</a></li>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/attendance/?view=persemister">Per Semester</a></li>
                    </ul>
                </div>   
              
<a class="menuitem submenuheader" href="" >Subject Load</a>
                <div class="submenu">
                    <ul>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/schedule/">View Teacher's Subject</a></li>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/schedule/index.php?view=addlist">Add Subject</a></li>
                    </ul>
                </div>
               <!--<a class="menuitem submenuheader" href="">Subject Load</a>
                <div class="submenu">
                    <ul>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/subjectload/">View Subject</a></li>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/subjectload/?view=add">Add Subject</a></li>
                    </ul>
                </div> 
    
            -->
            
            
 <!--faculty######################################################################################-->    
 <? }else{?>
 
 
                <a class="menuitem submenuheader" href="">My Profile</a>
                <div class="submenu">
                    <ul>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/profile/">View Profile</a></li>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/profile/index.php?view=modify">Modiy Profile</a></li>
                    </ul>
                </div>
                <a class="menuitem submenuheader" href="">My Documents</a>
                <div class="submenu">
                    <ul>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/documents/?teacher=<?php echo $session?>">View Documents</a></li>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/documents/index.php?view=upload&teacher=<?php echo $session?>">Upload Documents</a></li>
                    </ul>
                </div>
                <a class="menuitem submenuheader" href="" >My Class Schedule</a>
                <div class="submenu">
                    <ul>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/schedule/index.php?view=adminview&id=<? echo $session;?>">View Schedule</a></li>
                    </ul>
                </div>
                <a class="menuitem submenuheader" href="">Summary of Evaluation</a>
                <div class="submenu">
                    <ul>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/deansEvaluation/?view=vieweval&id=<?php echo $session;?>">*Dean's/Area Chair's Evaluation</a></li>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/studentsEvaluation/?view=vieweval&id=<?php echo $session;?>">*Students' Evaluation</a></li>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/pointvaluation/?view=vieweval&id=<?php echo $session;?>">*Point Valuation for Annual Performance Evaluation</a></li>      
                    </div>
                <a class="menuitem submenuheader" href="">Summary of Attendance</a>
                <div class="submenu">
                    <ul>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/attendance/?view=permonth&search=<?php echo $session;?>">Per Month</a></li>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/attendance/?view=persemister&search=<?php echo $session;?>">Per Semester</a></li>
                    </ul>
                </div>   
                <a class="menuitem submenuheader" href="">Seminar Attended</a>
                <div class="submenu">
                    <ul>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/seminar/?view=teacherlist">View Seminar</a></li>
                    </ul>
                </div>
                <a class="menuitem submenuheader" href="">Subject Load</a>
                <div class="submenu">
                    <ul>
                    <li><a href="<?php echo WEB_ROOT; ?>admin/subjectload/?view=flist">View Subject</a></li>
                    </ul>
                </div> 
                    <? }?>
                    
         
            </div>
                    
       
              
    
    </div>  
    
    <div class="right_content" align="center">            
       

    
	
          <font size="+2" color="#0000CC"><?php  echo $pageTitle;?></font><br><br><br>  
	<?php echo $successMessage;?>  
    <?php echo $errorMessage;?>  
          <?php require_once $content;?>  
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	
    
    <div class="footer">
    
    	<div class="left_footer">&nbsp;</div>
    
    </div>

</div>		
</body>
</html>