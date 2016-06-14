<?php
if (!defined('WEB_ROOT')) {
	exit;
}


$search = (isset($_GET['search']) && $_GET['search'] > '') ? $_GET['search'] : '';

$sql = "SELECT p_id, p_teacher, p_dateeval, p_timeeval, p_p1, p_p2, p_p3, p_p4, p_p5, p_p6, p_p7, p_p8, p_p9, p_p10, p_p11, p_p12, p_p13, p_p14, p_p15, p_p16, p_p17, p_p18, p_p19, p_p20, p_p21, p_p22, p_p23, p_p24, p_p25, p_p26, p_p27, p_p28, p_p29, p_p30, p_p31, p_p32, p_p33, p_p34, p_p35, p_p36, p_p37, p_p38, p_p39, p_p40, p_p41, p_p42, p_p43, p_p44, p_p45, p_p46, p_p47, p_p48, p_p49, p_p50, p_p51, p_p52, p_p53, p_p54, p_p55, p_p56, p_p57, p_p58, p_p59, p_p60, p_p61, p_p62, p_p63, p_p64, p_p65, p_p66, p_p67, p_p68, p_p69, p_p70, p_p71, p_p72, p_p73, p_p74, p_p75, p_p76, p_p77, p_p78, p_p79, p_p80, p_p81, p_p82, p_total
        FROM tbl_pointvaluation order by p_total desc";
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
        FROM tbl_user where user_name='$p_teacher'");
		$show = mysql_fetch_array($results);	
		$fname= $show['user_fname'];
		$lname= $show['user_lname'];
	
	
?>
  <tr class="<?php echo $class; ?>"> 
   <td><?php echo $num;?>.) <?php echo $fname; ?> <?php echo $lname; ?></b></td>
   
   <td width="120" align="center"><?php echo $p_total;?> points</td>
<?php
} // end while

?>
  <tr> 
   <td colspan="5">&nbsp;</td>
  </tr>

 </table>
