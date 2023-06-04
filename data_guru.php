<?php
include_once("config.php");
include_once("fungsi.php");

//tambah guru
if(isset($_POST['tambah'])) {
    $nama = $_POST['nama_guru'];
    tambahGuru('nama_guru',$nama);
  }

//delete data guru
if(isset($_POST['delete'])) {
    $id_guru = $_POST['id_guru'];
    deleteGuru($id_guru);
  }

$result = mysqli_query($koneksi, "SELECT * FROM guru ORDER BY id_guru ASC");

// menjalankan perintah edit
  if(isset($_POST['edit'])) {
    $id_guru = $_POST['id_guru'];

    header('Location: edit_guru.php?jenis=kriteria&id_guru='.$id_guru);
    exit();
  }
  //header
  include 'header.php';
?>

  <div class="col-md-10">
    <h3 class="ui header ml-3 mt-4"> DATA GURU</h3>
    <div class="top-left ml-4 mb-3">
      <a href="tambah_guru.php?jenis=kriteria">
            <div class="btn btn-primary">
            <i class="plus icon"></i>TAMBAH
            </div>
          </a>
    </div>
    <!--table-->
    <table class="ui celled table">
    <thead>
      <tr>
        <th class="collapsing">No</th>
        <th scope="col">NIP</th>
        <th scope="col">Nama Guru</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Alamat</th>
        <th scope="col">Telepon</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>

    <?php
      // Menampilkan list kriteria
      $query = "SELECT * FROM guru ORDER BY id_guru";
      $result = mysqli_query($koneksi, $query);

      $i = 0;
      while ($row = mysqli_fetch_array($result)) {
        $i++;
    ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['NIP'] ?></td>
        <td><?php echo $row['nama_guru'] ?></td>
        <td><?php echo $row['jenkel'] ?></td>
        <td><?php echo $row['alamat'] ?></td>
        <td><?php echo $row['telp'] ?></td>
        <td class="right aligned collapsing">
          <form method="post" action="data_guru.php">
            <input type="hidden" name="id_guru" value="<?php echo $row['id_guru'] ?>">
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