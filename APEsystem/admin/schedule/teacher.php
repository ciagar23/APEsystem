<?php
if (!defined('WEB_ROOT')) {
	exit;
}


$search = (isset($_GET['search']) && $_GET['search'] > '') ? $_GET['search'] : '';

$sql = "SELECT user_id, user_name, user_regdate, user_last_login, user_fname, user_lname, user_position, user_thumbnail
        FROM tbl_user where user_name like '%$search%' and user_position ='TEACHER'
		ORDER BY user_name";
$result = dbQuery($sql);

?> 
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
           
                                
<form action="processUser.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">

        <thead>
    	<tr>
            <th scope="col" class="rounded">Image</th>
            <th scope="col" class="rounded">Teaher's Name</th>
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
		if ($user_thumbnail) {
			$user_thumbnail = $user_thumbnail;
		} else {
			$user_thumbnail = 'nopic.jpg';
		}	
		
	
	$i += 1;
?>
  <tr class="<?php echo $class; ?>"> 
   <td width="75"><img src="<?php echo WEB_ROOT;?>profileImages/<?php echo $user_thumbnail;?>">
   
   <td><a href="index.php?view=adminview&id=<?php echo $user_name;?>"><?php echo $user_fname; ?> <?php echo $user_lname; ?></a></td>
   
  </tr>
<?php
} // end while

?>
  <tr> 
   <td colspan="5">&nbsp;</td>
  </tr>

 </table>
