<?php
include_once("config.php");
if($_REQUEST['nipguru']) {
	$sql = "SELECT id, NIP, nama_guru FROM guru WHERE id='".$_REQUEST['nipguru']."'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	
	$data = array();
	while( $rows = mysqli_fetch_assoc($resultset) ) {
		$data = $rows;
	}
	echo json_encode($data);
} else {
	echo 0;	
}
?>
