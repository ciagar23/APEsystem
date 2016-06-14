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
            <th scope="col" class="rounded">Seminar Name</th>
            <th scope="col" class="rounded">Venue</th>
            <th scope="col" class="rounded">Exclusive Date</th>
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
   <td><a href="index.php?view=myattendance&search=<?php echo $sem_id; ?>"><?php echo $sem_name; ?></a></td>
   
   <td><?php echo $sem_location; ?></td>
   
   <td><?php echo $sem_date.' ('.$sem_time.')'; ?></td>
   
 
<?php
} // end while

?>
  <tr> 
   <td colspan="5">&nbsp;</td>
  </tr>

 </table>
