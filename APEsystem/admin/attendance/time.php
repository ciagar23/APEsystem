<?php
if (!defined('WEB_ROOT')) {
	exit;
}


$search = (isset($_GET['search']) && $_GET['search'] > '') ? $_GET['search'] : '';

$sql = "SELECT user_id, user_name, user_regdate, user_last_login, user_fname, user_lname, user_position
        FROM tbl_user where user_name like '%$search%' and user_position ='TEACHER'
		ORDER BY user_name";
$result = dbQuery($sql);

?> 
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
           
                                
<form action="processUser.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">

        <thead>
    	<tr>
            <th scope="col" class="rounded" colspan="2">Class Time</th>
        </tr>
    </thead>
  <tr class="<?php echo $class; ?>"> 
   <td><a href="index.php?view=teacher&search=7:30 AM">7:30 AM</b></td>
    <td><a href="index.php?view=teacher&search=3:00 PM">3:00 PM</b></td><tr>
   <td><a href="index.php?view=teacher&search=8:00 AM">8:00 AM</b></td>
    <td><a href="index.php?view=teacher&search=3:30 PM">3:30 PM</b></td><tr>
   <td><a href="index.php?view=teacher&search=8:30 AM">8:30 AM</b></td>
    <td><a href="index.php?view=teacher&search=4:00 PM">4:00 PM</b></td><tr>
   <td><a href="index.php?view=teacher&search=9:00 AM">9:00 AM</b></td>
    <td><a href="index.php?view=teacher&search=4:30 PM">4:30 PM</b></td><tr>
   <td><a href="index.php?view=teacher&search=9:30 AM">9:30 AM</b></td>
    <td><a href="index.php?view=teacher&search=5:00 PM">5:00 PM</b></td><tr>
   <td><a href="index.php?view=teacher&search=10:00 AM">10:00 AM</b></td>
    <td><a href="index.php?view=teacher&search=5:30 PM">5:30 PM</b></td><tr>
   <td><a href="index.php?view=teacher&search=10:30 AM">10:30 AM</b></td>
    <td><a href="index.php?view=teacher&search=6:00 PM">6:00 PM</b></td><tr>
   <td><a href="index.php?view=teacher&search=11:00 AM">11:00 AM</b></td>
    <td><a href="index.php?view=teacher&search=6:30 PM">6:30 PM</b></td><tr>
   <td><a href="index.php?view=teacher&search=11:30 AM">11:30 AM</b></td>
    <td><a href="index.php?view=teacher&search=7:00 PM">7:00 PM</b></td><tr>
   <td><a href="index.php?view=teacher&search=12:00 PM">12:00 PM</b></td>
    <td><a href="index.php?view=teacher&search=7:30 PM">7:30 PM</b></td><tr>
   <td><a href="index.php?view=teacher&search=12:30 PM">12:30 PM</b></td>
    <td><a href="index.php?view=teacher&search=8:00 PM">8:00 PM</b></td><tr>
   <td><a href="index.php?view=teacher&search=1:00 PM">1:00 PM</b></td>
    <td><a href="index.php?view=teacher&search=8:30 PM">8:30 PM</b></td><tr>
   <td><a href="index.php?view=teacher&search=1:30 PM">1:30 PM</b></td>
    <td><a href="index.php?view=teacher&search=9:00 PM">9:00 PM</b></td><tr>
   <td><a href="index.php?view=teacher&search=2:00 PM">2:00 PM</b></td>
    <td><a href="index.php?view=teacher&search=9:30 PM">9:30 PM</b></td><tr>
   <td><a href="index.php?view=teacher&search=2:30 PM">2:30 PM</b></td>
    <td>&nbsp;</td><tr>
   


 </table>
