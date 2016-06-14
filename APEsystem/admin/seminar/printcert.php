<?php
if (!defined('WEB_ROOT')) {
	exit;
}


$search = (isset($_GET['search']) && $_GET['search'] > '') ? $_GET['search'] : 0;

$sql = "SELECT a_id, a_cert FROM tbl_sematt where a_id=$search";
$result = dbQuery($sql);

	extract(dbFetchAssoc($result));
	
?>

<img width="100%" height="50%" src='<?php echo WEB_ROOT;?>profileImages/<?php echo $a_cert;?>' />



<script>

window.print();
</script>