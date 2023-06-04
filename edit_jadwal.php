<?php
include_once("config.php");
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

include 'header.php';

  
?>


  <div class="col-md-10">
    <h3 class="ui header ml-4 mt-4"> EDIT JADWAL</h3>
    <!--form edit -->
    <?php
    //jika sudah mendapatkan parameter GET id dari URL
    if(isset($_GET['id_jadwal'])){
      //membuat variabel $id untuk menyimpan id dari GET id di URL
      $id_jadwal = $_GET['id_jadwal'];
      
      //query ke database SELECT tabel mahasiswa berdasarkan id = $id
      $select = mysqli_query($koneksi, "SELECT * FROM jadwal WHERE id_jadwal='$id_jadwal'") or die(mysqli_error($koneksi));
      
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
      $nama_kelas  = $_POST['nama_kelas'];
      $hari    = $_POST['hari'];
      $range_jam    = $_POST['range_jam'];
      
      $sql = mysqli_query($koneksi, "UPDATE jadwal SET NIP='$NIP', nama_guru='$nama_guru', nama_kelas='$nama_kelas', hari='$hari', range_jam='$range_jam' WHERE id_jadwal='$id_jadwal'") or die(mysqli_error($koneksi));
      
      if($sql){
        echo '<script>alert("Berhasil menyimpan data."); document.location="data_jadwal.php?id_jadwal='.$id_jadwal.'";</script>';
      }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
      }
    }
    ?>
    
    <form action="edit_jadwal.php?id_jadwal=<?php echo $id_jadwal; ?>" method="POST" class="col-md-10 ml-2 mt-4">
      
       <div class="form-group row">
        <label class="col-sm-2 col-form-label">NIP</label>
        <div class="col-sm-7">
          <select id="NIP" onchange="cek_database()" class="btn btn-default dropdown-toggle col-md-12" name="NIP">
             <option value="<?php echo $data['NIP']; ?>" selected disabled>-Pilih Pengajar-</option>
            <?php
              include "config.php";
              $guru = mysqli_query($koneksi,"SELECT * FROM guru");
              while ($row = mysqli_fetch_array($guru)) {
                echo "<option value='$row[NIP]'>$row[NIP]</option>";
              }
            ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">NAMA GURU</label>
        <div class="col-sm-7">
           <input value="<?php echo $data['nama_guru']; ?>" type="text" data-field="nama_guru" id="nama_guru" name="nama_guru" class="form-control" required placeholder="                                           NAMA GURU" readonly="readonly">
        </div>
      </div>

       <div class="form-group row">
        <label class="col-sm-2 col-form-label">KELAS</label>
        <div class="col-sm-7">
           <select class="btn btn-default dropdown-toggle col-md-12" name="nama_kelas">
             <option value="<?php echo $data['nama_kelas']; ?>" selected disabled>-Pilih Kelas-</option>
          <?php
            mysql_connect("localhost", "root", "");
            mysql_select_db("labfisika");
            $sql = mysql_query("SELECT * FROM Kelas ORDER BY id_kelas ASC");
            if(mysql_num_rows($sql) != 0){
              while($row = mysql_fetch_assoc($sql)){
                echo '<option>'.$row['nama_kelas'].'</option>';
              }
            }
            ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">HARI</label>
        <div class="col-sm-7">
           <select class="btn btn-default dropdown-toggle col-md-12" name="hari">
             <option value="<?php echo $data['hari']; ?>" selected disabled >-Pilih Hari-</option>
          <?php
            mysql_connect("localhost", "root", "");
            mysql_select_db("labfisika");
            $sql = mysql_query("SELECT * FROM hari ORDER BY id_hari ASC");
            if(mysql_num_rows($sql) != 0){
              while($row = mysql_fetch_assoc($sql)){
                echo '<option>'.$row['hari'].'</option>';
              }
            }
            ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">JAM</label>
        <div class="col-sm-7">
          <select class="btn btn-default dropdown-toggle col-md-12" name="range_jam">
             <option value="<?php echo $data['range_jam']; ?>" selected disabled>-Pilih Jam-</option>
          <?php
            mysql_connect("localhost", "root", "");
            mysql_select_db("labfisika");
            $sql = mysql_query("SELECT * FROM jam ORDER BY id_jam ASC");
            if(mysql_num_rows($sql) != 0){
              while($row = mysql_fetch_assoc($sql)){
                echo '<option>'.$row['range_jam'].'</option>';
              }
            }
            ?>
          </select>
        </div>
      </div>

    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script type="text/javascript">
          function cek_database(){
              var NIP = $("#NIP").val();
              $.ajax({
                  url: 'ajax_cek.php',
                  data:"NIP="+NIP ,
              }).success(function (data) {
                  var json = data,
                  obj = JSON.parse(json);
                  $('#nama_guru').val(obj.nama_guru);
      
              });
          }
      </script>
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