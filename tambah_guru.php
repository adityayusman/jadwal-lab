<?php
include_once("config.php");

include 'header.php';
  
?>

  <div class="col-md-10">
    <h3 class="ui header ml-4 mt-4"> TAMBAH GURU</h3>
    <!--form tambah -->
        <?php
    if(isset($_POST['submit'])){
      
      $nip        = $_POST['nip'];
      $nama_guru  = $_POST['nama_guru'];
      $jenkel     = $_POST['jenkel'];
      $alamat     = $_POST['alamat'];
      $telp       = $_POST['telp'];
      
      $cek = mysqli_query($koneksi, "SELECT * FROM guru WHERE nip='$nip'") or die(mysqli_error($koneksi));
      
      if(mysqli_num_rows($cek) == 0){
        $sql = mysqli_query($koneksi, "INSERT INTO guru(nip, nama_guru, jenkel, alamat, telp) VALUES('$nip', '$nama_guru', '$jenkel', '$alamat', '$telp')") or die(mysqli_error($koneksi));
        
        if($sql){
          echo '<script>alert("Berhasil menambahkan data."); document.location="data_guru.php";</script>';
        }else{
          echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
        }
      }else{
        echo '<div class="alert alert-warning">Gagal, nip sudah terdaftar.</div>';
      }
    }
    ?>
    
    <form action="tambah_guru.php" method="post" class="col-md-10 ml-2 mt-4">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">NIP</label>
        <div class="col-sm-7">
          <input type="text" name="nip" class="form-control" size="20" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">NAMA GURU</label>
        <div class="col-sm-7">
          <input type="text" name="nama_guru" class="form-control" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">JENIS KELAMIN</label>
        <div class="col-sm-10">
          <div class="form-check">
            <input type="radio" class="form-check-input" name="jenkel" value="LAKI-LAKI" required>
            <label class="form-check-label">LAKI-LAKI</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" name="jenkel" value="PEREMPUAN" required>
            <label class="form-check-label">PEREMPUAN</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">ALAMAT</label>
        <div class="col-sm-7">
          <input type="text" name="alamat" class="form-control" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">TELEPON</label>
        <div class="col-sm-7">
          <input type="text" name="telp" class="form-control" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">&nbsp;</label>
        <div class="col-sm-7">
          <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
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