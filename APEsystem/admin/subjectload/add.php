<?php
if (!defined('WEB_ROOT')) {
	exit;
}

?> 



<form action="processUser.php?action=add" method="post" enctype="multipart/form-data" name="frmAddUser" id="frmAddUser">


 <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="entryTable">
  <tr> 
   <td width="50%" >Subject Code:</td>
   <td class="content"> <input name="txtcode" type="text" class="box" size="50" maxlength="50"></td>
  </tr>
  
  <tr> 
   <td >Subject Description: </td>
   <td class="content"> <input name="txtdesc" type="text" class="box" size="50" maxlength="50"></td>
  </tr>
  
  <tr> 
   <td >Unit: </td>
   <td class="content"> <input name="txtunit" type="text" class="box"  size="20" maxlength="20"></td>
  </tr>

<tr> <td>Faculty:  
<td><?php

$sqls = "SELECT user_fname, user_lname, user_name
        FROM tbl_user where user_position='TEACHER'";
$results = dbQuery($sqls);

?> 
<select name="username" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">

<?php
while($rows = dbFetchAssoc($results)) {
	extract($rows);
	
	
	$i += 1;
?>
   <option value=<?php echo $user_name;?>><?php echo $user_fname.' '.$user_lname; ?></option>

<?php
} // end while

?>
 
 
  </tr>
  
 </table>
                       <br>
                       <br>
                       <br>
                       <br>     
 
 <div align="center" class="content"> 
  <input name="btnAddUser" type="submit" id="btnAddUser" value="Add Subject" onClick="checkAddUserForm();" class="box">
  &nbsp;&nbsp;<input name="btnCancel" type="button" id="btnCancel" value="Cancel" onClick="window.location.href='index.php';" class="box">  
 </div>
</form>