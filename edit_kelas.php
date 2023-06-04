<?php
include_once("config.php");
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

include 'header.php';


  
?>

  <div class="col-md-10">
    <h3 class="ui header ml-4 mt-4"> EDIT KELAS</h3>
    <!--form edit -->
    <?php
    //jika sudah mendapatkan parameter GET id dari URL
    if(isset($_GET['id_kelas'])){
      //membuat variabel $id untuk menyimpan id dari GET id di URL
      $id_kelas = $_GET['id_kelas'];
      
      //query ke database SELECT tabel mahasiswa berdasarkan id = $id
      $select = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas='$id_kelas'") or die(mysqli_error($koneksi));
      
      //jika hasil query = 0 maka muncul pesan error
      if(mysqli_num_rows($select) == 0){
        echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
        exit();
      //jika hasil query > 0
      }else{
        //membuat variabel $data dan menyimpan data row dari query
        $data = mysqli_fetch_assoc($select);
      }
    }
    ?>
    
    <?php
    //jika tombol simpan di tekan/klik

    if(isset($_POST['submit'])){
     
      $nama_kelas     = $_POST['nama_kelas'];
      
      $sql = mysqli_query($koneksi, "UPDATE kelas SET nama_kelas='$nama_kelas' WHERE id_kelas='$id_kelas'") or die(mysqli_error($koneksi));
      
      if($sql){
        echo '<script>alert("Berhasil menyimpan data."); document.location="data_kelas.php?id_kelas='.$id_kelas.'";</script>';
      }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
      }
    }
    ?>
    
    <form action="edit_kelas.php?id_kelas=<?php echo $id_kelas; ?>" method="POST" class="col-md-10 ml-2 mt-4">
    
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">KELAS</label>
        <div class="col-sm-10">
          <input type="text" name="nama_kelas" class="form-control" value="<?php echo $data['nama_kelas']; ?>" required>
        </div>
      </div>
      
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">&nbsp;</label>
        <div class="col-sm-10">
          <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
          <a href="data_kelas.php" class="btn btn-warning">KEMBALI</a>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- Footer -->

<!-- Footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>