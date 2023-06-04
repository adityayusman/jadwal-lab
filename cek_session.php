<?php
session_start();
if(@$_SESSION['username']){
}else{
	?>
	<script language="javascript">
	alert("Maaf, Anda tidak berhak mengakses lagi");
	document.location="index.php";
	</script>
	<?php
}
?>