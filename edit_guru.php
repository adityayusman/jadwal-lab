<?php
include_once("config.php");
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

include 'header.php';

  
?>


  <div class="col-md-10">
    <h3 class="ui header ml-4 mt-4"> EDIT GURU</h3>
    <!--form edit -->
    <?php
    //jika sudah mendapatkan parameter GET id dari URL
    if(isset($_GET['id_guru'])){
      //membuat variabel $id untuk menyimpan id dari GET id di URL
      $id_guru = $_GET['id_guru'];
      
      //query ke database SELECT tabel mahasiswa berdasarkan id = $id
      $select = mysqli_query($koneksi, "SELECT * FROM guru WHERE id_guru='$id_guru'") or die(mysqli_error($koneksi));
      
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
     
      $NIP     = $_POST['NIP'];
      $nama_guru     = $_POST['nama_guru'];
      $jenkel  = $_POST['jenkel'];
      $alamat    = $_POST['alamat'];
      $telp    = $_POST['telp'];
      
      $sql = mysqli_query($koneksi, "UPDATE guru SET NIP='$NIP', nama_guru='$nama_guru', jenkel='$jenkel', alamat='$alamat', telp='$telp' WHERE id_guru='$id_guru'") or die(mysqli_error($koneksi));
      
      if($sql){
        echo '<script>alert("Berhasil menyimpan data."); document.location="data_guru.php?id_guru='.$id_guru.'";</script>';
      }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
      }
    }
    ?>
    
    <form action="edit_guru.php?id_guru=<?php echo $id_guru; ?>" method="POST" class="col-md-10 ml-2 mt-4">
       <div class="form-group row">
        <label class="col-sm-2 col-form-label">NIP</label>
        <div class="col-sm-10">
          <input type="text" name="NIP" class="form-control" value="<?php echo $data['NIP']; ?>" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">NAMA GURU</label>
        <div class="col-sm-10">
          <input type="text" name="nama_guru" class="form-control" value="<?php echo $data['nama_guru']; ?>" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">JENIS KELAMIN</label>
        <div class="col-sm-10">
          <div class="form-check">
            <input type="radio" class="form-check-input" name="jenkel" value="LAKI-LAKI" <?php if($data['jenkel'] == 'LAKI-LAKI'){ echo 'checked'; } ?> required>
            <label class="form-check-label">LAKI-LAKI</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" name="jenkel" value="PEREMPUAN" <?php if($data['jenkel'] == 'PEREMPUAN'){ echo 'checked'; } ?> required>
            <label class="form-check-label">PEREMPUAN</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">ALAMAT</label>
        <div class="col-sm-10">
          <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">TELEPON</label>
        <div class="col-sm-10">
          <input type="text" name="telp" class="form-control" value="<?php echo $data['telp']; ?>" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">&nbsp;</label>
        <div class="col-sm-10">
          <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
          <a href="data_guru.php" class="btn btn-warning">KEMBALI</a>
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