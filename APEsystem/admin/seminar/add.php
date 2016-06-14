<?php
if (!defined('WEB_ROOT')) {
	exit;
}

?> 


<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />

<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>

<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%d-%M-%Y"

		});
	};
</script>



<form action="process.php?action=add" method="post" enctype="multipart/form-data" name="frmAddUser" id="frmAddUser">


 <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="entryTable">
  <tr> 
   <td width="50%" >Seminar Name:</td>
   <td class="content"> <input name="semName" type="text" class="box"size="50" maxlength="50"></td>
  </tr>
  
 
    <tr> 
   <td width="50%" >Location:</td>
   <td class="content"> <input name="Location" type="text" class="box"size="50" maxlength="50"></td>
  </tr>
  
 
    <tr> 
   <td width="50%" >Date:</td>
   <td class="content"> <input name="date" type="text" id="inputField" size="12" maxlength="50"> </td>
  </tr>
  
 
    <tr> 
   <td width="50%" >Time:</td>
   <td class="content"> <input name="time" type="text" class="box"size="50" maxlength="50"></td>
  </tr>
  
 
  
 </table>
                       <br>
                       <br>
                       <br>
                       <br>     
 
 <div align="center" class="content"> 
  <input name="btnAddUser" type="button" id="btnAddUser" value="Add Seminar" onClick="checkAdd();" class="box">
  &nbsp;&nbsp;<input name="btnCancel" type="button" id="btnCancel" value="Cancel" onClick="window.location.href='index.php';" class="box">  
 </div>
</form>