<?php
include_once("config.php");
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include 'header.php';
?>

  <div class="col-md-10">
    <h3 class="ui header ml-4 mt-4"> TAMBAH JAM</h3>
    <!--form tambah -->
        <?php
    if(isset($_POST['submit'])){
      $range_jam      = $_POST['range_jam'];
      
      $cek = mysqli_query($koneksi, "SELECT * FROM jam WHERE id_jam='$id_jam'") or die(mysqli_error($koneksi));
      
      if(mysqli_num_rows($cek) == 0){
        $sql = mysqli_query($koneksi, "INSERT INTO jam(range_jam) VALUES('$range_jam')") or die(mysqli_error($koneksi));
        
        if($sql){
          echo '<script>alert("Berhasil menambahkan data."); document.location="data_jam.php";</script>';
        }else{
          echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
        }
      }else{
        echo '<div class="alert alert-warning">Gagal, Jam sudah ada.</div>';
      }
    }
    ?>
    
    <form action="tambah_jam.php" method="post" class="col-md-10 ml-2 mt-4">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">JAM</label>
        <div class="col-sm-7">
          <input type="text" name="range_jam" class="form-control" required>
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