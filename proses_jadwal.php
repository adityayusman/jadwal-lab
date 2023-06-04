<?php

$NIP 		= $_POST['NIP'];
$nama_guru	= $_POST['nama_guru'];
$kelas		= $_POST['nama_kelas'];
$hari		= $_POST['hari'];
$jam		= $_POST['range_jam'];


    if(mysqli_num_rows($cek) == 0){
        $sql = mysqli_query($koneksi, "INSERT INTO jadwal(id_jadwal, id_guru, id_guru, id_kelas, id_hari, id_jam) VALUES ('', '$NIP', '$nama_guru', '$kelas', '$hari', '$range_jam')");
        
        if($sql){
          echo '<script>alert("Berhasil menambahkan data."); document.location="data_jadwal.php";</script>';
        }else{
          echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
        }
      }else{
        echo '<div class="alert alert-warning">Gagal, Jadwal sudah terdaftar.</div>';
      }

?>