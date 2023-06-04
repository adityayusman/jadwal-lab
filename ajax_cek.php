<?php
include "config.php";
$guru = mysqli_fetch_array(mysqli_query($koneksi, "select * from guru where nama_guru='$_GET[nama_guru]'"));
$data_guru = array('NIP'   	=>  $guru['NIP'],);
 echo json_encode($data_guru);