<?php
include_once("config.php");
include_once("fungsi.php");

//tambah kelas
if(isset($_POST['tambah'])) {
    $nama = $_POST['nama_kelas'];
    tambahKelas('nama_kelas',$nama);
  }

//delete data kelas
if(isset($_POST['delete'])) {
    $id_kelas = $_POST['id_kelas'];
    deleteKelas($id_kelas);
  }

$result = mysqli_query($koneksi, "SELECT * FROM kelas ORDER BY id_kelas ASC");

// menjalankan perintah edit
  if(isset($_POST['edit'])) {
    $id_kelas = $_POST['id_kelas'];

    header('Location: edit_kelas.php?jenis=kriteria&id_kelas='.$id_kelas);
    exit();
  }
  
include 'header.php';
?>

  <div class="col-md-10">
    <h3 class="ui header ml-3 mt-4"> DATA KELAS</h3>
    <div class="top-left ml-4 mb-3">
      <a href="tambah_kelas.php?jenis=kriteria">
            <div class="btn btn-primary">
            <i class="plus icon"></i>Tambah
            </div>
          </a>
    </div>
    <table class="ui celled table">
    <thead>
      <tr>
        <th class="collapsing">No</th>
        <th scope="col">Kelas</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>

    <?php
      // Menampilkan list kriteria
      $query = "SELECT * FROM kelas ORDER BY id_kelas";
      $result = mysqli_query($koneksi, $query);

      $i = 0;
      while ($row = mysqli_fetch_array($result)) {
        $i++;
    ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['nama_kelas'] ?></td>
        <td class="right aligned collapsing">
          <form method="post" action="data_kelas.php">
            <input type="hidden" name="id_kelas" value="<?php echo $row['id_kelas'] ?>">
            <button type="submit" name="edit" class="btn btn-success"><i class="right edit icon"></i>EDIT</button>
            <button type="submit" name="delete" class="btn btn-danger"><i class="right remove icon"></i>HAPUS</button>
          </form>
        </td>
      </tr>
    

  <?php } ?>


    </tbody>
  </table> 
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