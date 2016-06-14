<?php
if (!defined('WEB_ROOT')) {
	exit;
}


$search = (isset($_GET['search']) && $_GET['search'] > '') ? $_GET['search'] : '';

$sql = "SELECT sem_id, sem_name, sem_date, sem_time,sem_location
        FROM tbl_seminar";
$result = dbQuery($sql);

?> 
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
           
                                
<form action="processUser.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">

        <thead>
    	<tr>
            <th scope="col" class="rounded">Name</th>
            <th scope="col" class="rounded">Location</th>
            <th scope="col" class="rounded">Date</th>
            <th scope="col" class="rounded-q4">Delete</th>
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
   <td><a href="index.php?view=teacher&search=<?php echo $sem_id; ?>"><?php echo $sem_name; ?></a></td>
   
   <td><?php echo $sem_location; ?></td>
   
   <td><?php echo $sem_date.' ('.$sem_time.')'; ?></td>
   
   <td width="70" align="center"><a href="javascript:deleteSem(<?php echo $sem_id; ?>);" class="ico del"><img src="<?php echo WEB_ROOT; ?>admin/include/images/trash.png" alt="" title="" border="0" /></a></td>
  </tr>
<?php
} // end while

?>
  <tr> 
   <td colspan="5">&nbsp;</td>
  </tr>
  <tr> 
   <td colspan="5" align="right">
   <div class="content"><input name="btnAddUser" type="button"  value="Add Seminar" class="add-button" onClick="add()"></div></td>
  </tr>
 </table>
