<?php
if (!defined('WEB_ROOT')) {
	exit;
}


$search = (isset($_GET['search']) && $_GET['search'] > '') ? $_GET['search'] : '';

$sql = "SELECT d_id, d_teacher, d_dateeval, d_timeeval, d_classsize, d_coursenum, d_coursedesc, d_A1, d_A2, d_A3, d_A4, d_A5, d_A6, d_A7, d_A8, d_A9, d_A10, d_A11, d_A12, d_A13, d_A14, d_A15, d_A16, d_A17, d_A18, d_A19, d_A20, d_A21, d_A22, d_A23, d_A24, d_A25, d_A26, d_A27, d_A28, d_A29, d_A30, d_A31, d_A32, d_A33, d_total
        FROM tbl_studentseval order by d_total desc";
$result = dbQuery($sql);

?> 
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
           
                                
<form action="processUser.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">

        <thead>
    	<tr>
            <th scope="col" class="rounded">Teacher</th>
            <th scope="col" class="rounded">&nbsp;</th>
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
	$num= $i;
	$i += 1;
	
	//, d_A1, d_A2, d_A3, d_A4, d_A5, d_A6, d_A7, d_A8, d_B1, d_B2, d_B3, d_B4, d_B5, d_B6, d_B7, d_C1, d_C2, d_D1, d_D2, d_D3, d_D4
	
		$results = mysql_query("SELECT *
        FROM tbl_user where user_name='$d_teacher'");
		$show = mysql_fetch_array($results);	
		$fname= $show['user_fname'];
		$lname= $show['user_lname'];
	
	
?>
  <tr class="<?php echo $class; ?>"> 
   <td><?php echo $num;?>.) <?php echo $fname; ?> <?php echo $lname; ?></b></td>
   
   <td width="120" align="center"><?php echo $d_total;?> points</td>
<?php
} // end while

?>
  <tr> 
   <td colspan="5">&nbsp;</td>
  </tr>

 </table>
