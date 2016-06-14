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
            <th scope="col" class="rounded" colspan="4">Classroom Instruction Evaluation Students' Evaluation </th>
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
	
	$sqldean = mysql_num_rows(mysql_query("SELECT * FROM tbl_pointvaluation where p_teacher='$user_name'"));
	if($sqldean != 0)
	{
	$evaluate ='<a href="index.php?view=modifyeval&id='.$user_name.'">Modify</a>';
	$viewdean ='<a href="index.php?view=vieweval&id='.$user_name.'">View Evaluation</a>';
	}
	else
	{
	$evaluate = '<a href="index.php?view=deanseval&id='.$user_name.'">Evaluate</a>';
	$viewdean = '<font color=red>Not yet Evaluated</font>';
	}
	
	
	$i += 1;
?>
  <tr class="<?php echo $class; ?>"> 
   <td><img src="<?php echo WEB_ROOT;?>profileImages/<?php echo $user_thumbnail;?>"></td>
   <td><?php echo $user_fname; ?> <?php echo $user_lname; ?></b></td>
   <td><?php echo $evaluate;?>
   <td><?php echo $viewdean;?>
   
  </tr>
<?php
} // end while

?>
  <tr> 
   <td colspan="5">&nbsp;</td>
  </tr>

 </table>
