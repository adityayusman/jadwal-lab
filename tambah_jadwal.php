<?php
include_once("config.php");

include 'header.php';
  
?>

  <div class="col-md-10">
    <h3 class="ui header ml-4 mt-4"> TAMBAH JADWAL</h3>
    <!--form tambah -->
        <?php
//proses
    if(isset($_POST['submit'])) {

    $NIP        = $_POST['NIP'];
    $nama_guru  = $_POST['nama_guru'];
    $nama_kelas = $_POST['nama_kelas'];
    $hari       = $_POST['hari'];
    $range_jam  = $_POST['range_jam'];
    
//script validasi data
 
    $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM jadwal WHERE hari='$hari' AND range_jam='$range_jam'"));
    if ($cek > 0){
      echo "<script>window.alert('Jadwal Bentrok')
      window.location='tambah_jadwal.php'</script>";
      echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
    }else {
      mysqli_query($koneksi,"INSERT INTO jadwal(id_jadwal,NIP,nama_guru, nama_kelas, hari, range_jam)
    VALUES ('','$NIP','$nama_guru','$nama_kelas', '$hari', '$range_jam')");
 
      echo "<script>window.alert('Jadwal Tersimpan')
      window.location='data_jadwal.php'</script>";

          }
    }
    ?>
    
    <form action="tambah_jadwal.php" method="post" class="col-md-10 ml-2 mt-4">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">NAMA GURU</label>
        <div class="col-sm-7">
          <select id="nama_guru" onchange="cek_database()" class="btn btn-default dropdown-toggle col-md-12" name="nama_guru">
             <option value="" selected disabled>-Pilih Pengajar-</option>
            <?php
              include "config.php";
              $guru = mysqli_query($koneksi,"SELECT * FROM guru");
              while ($row = mysqli_fetch_array($guru)) {
                echo "<option value='$row[nama_guru]'>$row[nama_guru]</option>";
              }
            ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">NIP</label>
        <div class="col-sm-7">
           <input type="text" data-field="NIP" id="NIP" name="NIP" class="form-control" required placeholder="                                           NIP" readonly="readonly">
        </div>
      </div>

       <div class="form-group row">
        <label class="col-sm-2 col-form-label">KELAS</label>
        <div class="col-sm-7">
           <select class="btn btn-default dropdown-toggle col-md-12" name="nama_kelas">
             <option value="" selected disabled>-Pilih Kelas-</option>
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
             <option value="" selected disabled >-Pilih Hari-</option>
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
             <option value="" selected disabled>-Pilih Jam-</option>
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
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">&nbsp;</label>
        <div class="col-sm-7">
          <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
        </div>
      </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script type="text/javascript">
          function cek_database(){
              var nama_guru = $("#nama_guru").val();
              $.ajax({
                  url: 'ajax_cek.php',
                  data:"nama_guru="+nama_guru ,
              }).success(function (data) {
                  var json = data,
                  obj = JSON.parse(json);
                  $('#NIP').val(obj.NIP);
      
              });
          }
      </script>
       
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