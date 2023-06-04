<?php
include_once("config.php");
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include 'header.php';
?>

  <div class="col-md-10">
    <h3 class="ui header ml-4 mt-4"> TAMBAH KELAS</h3>
    <!--form tambah -->
        <?php
    if(isset($_POST['submit'])){
      $nama_kelas      = $_POST['nama_kelas'];
      
      $cek = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas='@$id_kelas'") or die(mysqli_error($koneksi));
      
      if(mysqli_num_rows($cek) == 0){
        $sql = mysqli_query($koneksi, "INSERT INTO kelas(nama_kelas) VALUES('$nama_kelas')") or die(mysqli_error($koneksi));
        
        if($sql){
          echo '<script>alert("Berhasil menambahkan data."); document.location="data_kelas.php";</script>';
        }else{
          echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
        }
      }else{
        echo '<div class="alert alert-warning">Gagal, kelas sudah ada.</div>';
      }
    }
    ?>
    
    <form action="tambah_kelas.php" method="post" class="col-md-10 ml-2 mt-4">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">KELAS</label>
        <div class="col-sm-7">
          <input type="text" name="nama_kelas" class="form-control" required>
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