<?php
if (!defined('WEB_ROOT')) {
	exit;
}


$search = (isset($_GET['search']) && $_GET['search'] > '') ? $_GET['search'] : '';

$sql = "SELECT s_id, s_teacher, s_room, s_subject , s_class , s_from , s_to, s_m, s_t, s_w, s_th, s_f, s_s FROM tbl_schedule
		WHERE s_teacher ='$session'
		ORDER BY s_from";
$result = dbQuery($sql);

?> 
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
           
                                
                                <form action="processUser.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">

        <thead>
    	<tr>
            <th scope="col" class="rounded-company" width="20%">Time</th>
            <th scope="col" class="rounded" width="20%" >Day</th>
            <th scope="col" class="rounded" width="20%">Room</th>
            <th scope="col" class="rounded" width="20%">Class</th>
            <th scope="col" class="rounded" width="10%">Edit</th>
            <th scope="col" class="rounded-q4" width="10%">Delete</th>
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
	
	$i += 1;
?>
  <tr class="<?php echo $class; ?>"> 
   <td><?php echo $s_from; ?> - <br><?php echo $s_to; ?></td>
   <td><?php echo $s_m; ?> <?php echo $s_t; ?> <?php echo $s_w; ?> <?php echo $s_th; ?> <?php echo $s_f; ?> <?php echo $s_s; ?></td>
   <td><?php echo $s_room; ?></td>
   <td><?php echo $s_class; ?> <br>(<?php echo $s_subject; ?>)</td>
   
   <td width="120" align="center"><a href="javascript:modifySchedule(<?php echo $s_id; ?>);" class="ico edit"><img src="<?php echo WEB_ROOT; ?>admin/include/images/user_edit.png" alt="" title="" border="0" /></a></td>
   <td width="70" align="center"><a href="javascript:deleteSchedule(<?php echo $s_id; ?>);" class="ico del"><img src="<?php echo WEB_ROOT; ?>admin/include/images/trash.png" alt="" title="" border="0" /></a></td>
  </tr>
<?php
} // end while

?>
  <tr> 
   <td colspan="6">&nbsp;</td>
  </tr>

 </table>
 
