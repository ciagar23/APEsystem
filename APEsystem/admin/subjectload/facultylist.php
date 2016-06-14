<?php
if (!defined('WEB_ROOT')) {
	exit;
}


$search = (isset($_GET['search']) && $_GET['search'] > '') ? $_GET['search'] : '';

$sql = "SELECT s_id, s_code, s_desc, s_unit, s_faculty from tbl_subjectload where s_faculty='$session'";
$result = dbQuery($sql);


?> 
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
           
                                
<form action="processUser.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">

        <thead>
    	<tr>
            <th scope="col" class="rounded">Subject</th>
         <?php if ($position=='TEACHER'){?>
            <th scope="col" class="rounded-q4">&nbsp;</th>
            <?php }else{?>
            <th scope="col" class="rounded-q4">Delete</th>
            <?php }?>
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
	
	$sqls = "SELECT *
        FROM tbl_user where user_name='$s_faculty'";
		$results = mysql_query($sqls);
		$show = mysql_fetch_array($results);	
		$fname= $show['user_fname'];
		$lname= $show['user_lname'];
	$i += 1;
?>
  <tr class="<?php echo $class; ?>"> 
   <td><?php echo $fname.' '.$lname.': '.$s_code.': '.$s_desc.' ('.$s_unit.')'; ?></td>
   
   <td width="70" align="center">
   <?php if ($position =='TEACHER'){} else{?>
   
   <a href="javascript:deleteUser(<?php echo $s_id; ?>);" class="ico del"><img src="<?php echo WEB_ROOT; ?>admin/include/images/trash.png" alt="" title="" border="0" /></a></td>
   <?php }?>
  </tr>
<?php
} // end while

?>
  <tr> 
   <td colspan="5">&nbsp;</td>
  </tr>
 </table>
