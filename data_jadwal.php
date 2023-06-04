
<?php
include_once("config.php");
include_once("fungsi.php");


//delete data jadwal
if(isset($_POST['delete'])) {
    $id_jadwal = $_POST['id_jadwal'];
    deleteJadwal($id_jadwal);
  }

$result = mysqli_query($koneksi, "SELECT * FROM jadwal ORDER BY id_jadwal ASC");


// menjalankan perintah edit
  if(isset($_POST['edit'])) {
    $id_jadwal = $_POST['id_jadwal'];

    header('Location: edit_jadwal.php?jenis=kriteria&id_jadwal='.$id_jadwal);
    exit();
  }
  //header
  include 'header.php';


?>
  <div class="col-md-10">
    <h3 class="ui header ml-3 mt-4"> DATA JADWAL LAB</h3>
    <div class="top-left ml-4 mb-3">
      <a href="tambah_jadwal.php?jenis=kriteria">
        <div class="btn btn-primary"><i class="plus icon"></i>TAMBAH</div>
      </a>        
    </div>
    
    <table id="myTable" class="ui celled table">
    <thead>
      <tr>
        <th class="collapsing">No</th>
        <th onclick="sortTable(0)" style="cursor: pointer;" scope="col">NIP</th>
        <th onclick="sortTable(1)" style="cursor: pointer;" scope="col">Nama Guru</th>
        <th scope="col">Kelas</th>
        <th scope="col">Hari</th>
        <th scope="col">Jam</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php

      // Menampilkan list jadwal
      $query = "SELECT * FROM jadwal  ORDER BY id_jadwal";
      $result = mysqli_query($koneksi, $query);

      $i = 0;
      while ($row = mysqli_fetch_array($result)) {
        $i++;
    ?>

      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['NIP'] ?></td>
        <td><?php echo $row['nama_guru'] ?></td>
        <td><?php echo $row['nama_kelas'] ?></td>
        <td><?php echo $row['hari'] ?></td>
        <td><?php echo $row['range_jam'] ?></td>
        <td class="right aligned collapsing">
          <form method="post" action="data_jadwal.php">
            <input type="hidden" name="id_jadwal" value="<?php echo $row['id_jadwal'] ?>">
            <button type="submit" name="edit" class="btn btn-success"><i class="right edit icon"></i>EDIT</button>
            <button type="submit" name="delete" class="btn btn-danger"><i class="right remove icon"></i>HAPUS</button>
          </form>
        </td>
      </tr>
  <?php } ?>
    </tbody>
  </table>
    <script>
      function sortTable(n) {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById("myTable");
        switching = true;
        //Set the sorting direction to ascending:
        dir = "asc"; 
        /*Make a loop that will continue until
        no switching has been done:*/
        while (switching) {
          //start by saying: no switching is done:
          switching = false;
          rows = table.rows;
          /*Loop through all table rows (except the
          first, which contains table headers):*/
          for (i = 1; i < (rows.length - 1); i++) {
            //start by saying there should be no switching:
            shouldSwitch = false;
            /*Get the two elements you want to compare,
            one from current row and one from the next:*/
            x = rows[i].getElementsByTagName("TD")[n];
            y = rows[i + 1].getElementsByTagName("TD")[n];
            /*check if the two rows should switch place,
            based on the direction, asc or desc:*/
            if (dir == "asc") {
              if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                //if so, mark as a switch and break the loop:
                shouldSwitch= true;
                break;
              }
            } else if (dir == "desc") {
              if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                //if so, mark as a switch and break the loop:
                shouldSwitch = true;
                break;
              }
            }
          }
          if (shouldSwitch) {
            /*If a switch has been marked, make the switch
            and mark that a switch has been done:*/
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            //Each time a switch is done, increase this count by 1:
            switchcount ++;      
          } else {
            /*If no switching has been done AND the direction is "asc",
            set the direction to "desc" and run the while loop again.*/
            if (switchcount == 0 && dir == "asc") {
              dir = "desc";
              switching = true;
            }
          }
        }
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