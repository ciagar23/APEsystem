<?php
if (!defined('WEB_ROOT')) {
	exit;
}


$search = (isset($_GET['search']) && $_GET['search'] > '') ? $_GET['search'] : '';

$sql = "SELECT user_id, user_name, user_regdate, user_last_login, user_fname, user_lname, user_position, user_thumbnail
        FROM tbl_user where user_position ='TEACHER'
		ORDER BY user_name";
$result = dbQuery($sql);

?> 
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
           
                                
<form action="processUser.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">

        <thead>
    	<tr>
            <th scope="col" class="rounded" colspan="4">Classroom Instruction Evaluation Dean's/Area Chair's Evaluation </th>
        </tr>
    </thead>

<?php
while($row = dbFetchAssoc($result)) {
	extract($row);
	
	if ($i%2) {
		$class = 'row1';
	} else {
		$class = 'row2';
	}
	
	if ($user_thumbnail)
	{
	$user_thumbnail = $user_thumbnail;
	}
	else
	{
	$user_thumbnail ='nopic.jpg';
	}
	
		$tsql = "SELECT *
        FROM tbl_user where user_name='$user_name'";
		$tresult = mysql_query($tsql);
		$tshow = mysql_fetch_array($tresult);	
		$tfname= $tshow['user_fname'];
		$tlname= $tshow['user_lname'];
	

	$asql = "SELECT *
        FROM tbl_sematt where a_teacher='$user_name' and a_semid=$search";
		$aresult = mysql_query($asql);
		$ashow = mysql_fetch_array($aresult);
		$acount = mysql_num_rows($aresult);	
		$astatus= $ashow['a_status'];
		$aid= $ashow['a_id'];
	
	$i += 1;
?>
  <tr class="<?php echo $class; ?>"> 
   <td><img src="<?php echo WEB_ROOT;?>profileImages/<?php echo $user_thumbnail;?>"></td>
   <td><?php echo $user_fname; ?> <?php echo $user_lname; ?></b></td>
   
   <?
   if ($acount == 0){
   ?>
   
   <td width="120" align="center"><a href="index.php?view=attendance&userId=<?php echo $user_name; ?>&seminarId=<?php echo $search; ?>" class="ico edit"><img src="<?php echo WEB_ROOT; ?>admin/include/images/user_edit.png" alt="" title="" border="0" /></a></td>
   <?
   }
   else
   {
   ?>
     <td width="300" align="center"><font color=red><? echo $astatus;?></font> - 
     <a href="index.php?view=attendancemodify&userId=<?php echo $user_name; ?>&seminarId=<?php echo $search; ?>" class="ico edit"><img src="<?php echo WEB_ROOT; ?>admin/include/images/user_edit.png" alt="" title="" border="0" /></a></td>
   
   <?
   }
   ?>
   
  </tr>
<?php
} // end while

?>
  <tr> 
   <td colspan="5">&nbsp;</td>
  </tr>

 </table>

<input type="button" value="print" onclick="window.location.href='index.php?view=print&search=<?php echo $search;?>';">