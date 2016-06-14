<?php
if (!defined('WEB_ROOT')) {
	exit;
}



$sql = "SELECT d_id, d_file, d_filename from tbl_documents where d_teacher ='$session'";
$result = dbQuery($sql);

?> 
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
           
                                
<form action="processUser.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">

        <thead>
    	<tr>
            <th scope="col" class="rounded">Document fiename</th>
            <th scope="col" class="rounded-q4">Download</th>
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
   <td><?php echo $d_filename; ?></td>
   
   <td width="120" align="center"><a href="<?php echo WEB_ROOT;?>admin/documents/tmp/<?php echo $d_file;?>" class="ico edit"><img src="<?php echo WEB_ROOT; ?>admin/include/images/user_edit.png" alt="" title="" border="0" /></a></td>
   <td width="70" align="center"><a href="process.php?action=delete&id=<?php echo $d_id;?>" class="ico del"><img src="<?php echo WEB_ROOT; ?>admin/include/images/trash.png" alt="" title="" border="0" /></a></td>
  </tr>
<?php
} // end while

?>
  <tr> 
   <td colspan="5">&nbsp;</td>
  </tr>
  <tr> 
 </table>
