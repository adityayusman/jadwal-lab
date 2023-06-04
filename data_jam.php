<?php
include_once("config.php");
include_once("fungsi.php");

//tambah guru
if(isset($_POST['tambah'])) {
    $range_jam = $_POST['range_jam'];
    tambahJam('range_jam',$nama);
  }

//delete data guru
if(isset($_POST['delete'])) {
    $id_jam = $_POST['id_jam'];
    deleteJam($id_jam);
  }

$result = mysqli_query($koneksi, "SELECT * FROM guru ORDER BY id_jam ASC");

// menjalankan perintah edit
  if(isset($_POST['edit'])) {
    $id_jam = $_POST['id_jam'];

    header('Location: edit_jam.php?jenis=kriteria&id_jam='.$id_jam);
    exit();
  }
  //header
  include 'header.php';

?>

  <div class="col-md-10">
    <h3 class="ui header ml-3 mt-4"> DATA JAM</h3>
    <div class="top-left ml-4 mb-3">
      <a href="tambah_jam.php?jenis=kriteria">
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
        <th scope="col">Range Jam</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>

    <?php
      // Menampilkan list kriteria
      $query = "SELECT * FROM jam ORDER BY id_jam";
      $result = mysqli_query($koneksi, $query);

      $i = 0;
      while ($row = mysqli_fetch_array($result)) {
        $i++;
    ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['range_jam'] ?></td>
        <td class="right aligned collapsing">
          <form method="post" action="data_jam.php">
            <input type="hidden" name="id_jam" value="<?php echo $row['id_jam'] ?>">
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