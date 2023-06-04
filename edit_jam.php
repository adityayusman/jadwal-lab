<?php
include_once("config.php");
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

include 'header.php';

  
?>

  <div class="col-md-10">
    <h3 class="ui header ml-4 mt-4"> EDIT JAM</h3>
    <!--form edit -->
    <?php
    //jika sudah mendapatkan parameter GET id dari URL
    if(isset($_GET['id_jam'])){
      //membuat variabel $id untuk menyimpan id dari GET id di URL
      $id_jam = $_GET['id_jam'];
      
      //query ke database SELECT tabel mahasiswa berdasarkan id = $id
      $select = mysqli_query($koneksi, "SELECT * FROM jam WHERE id_jam='$id_jam'") or die(mysqli_error($koneksi));
      
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
     
      $range_jam     = $_POST['range_jam'];

      
      $sql = mysqli_query($koneksi, "UPDATE jam SET range_jam='$range_jam' WHERE id_jam='$id_jam'") or die(mysqli_error($koneksi));
      
      if($sql){
        echo '<script>alert("Berhasil menyimpan data."); document.location="data_jam.php?id_jam='.$id_jam.'";</script>';
      }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
      }
    }
    ?>
    
    <form action="edit_jam.php?id_jam=<?php echo $id_jam; ?>" method="POST" class="col-md-10 ml-2 mt-4">
       <div class="form-group row">
        <label class="col-sm-2 col-form-label">JAM</label>
        <div class="col-sm-10">
          <input type="text" name="range_jam" class="form-control" value="<?php echo $data['range_jam']; ?>" required>
        </div>
      </div>
      
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">&nbsp;</label>
        <div class="col-sm-10">
          <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
          <a href="data_jam.php" class="btn btn-warning">KEMBALI</a>
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