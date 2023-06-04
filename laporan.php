<?php
include 'fungsi.php';
include 'config.php';
?>
<!doctype html>
<html lang="en">
  <head>
  	<link rel="stylesheet" type="text/css" href="cetak.css">

    <title>Sistem Penjadwalan</title>
  </head>
  <body>

    <center>

		<h4>JADWAL LABORATORIUM FISIKA</h4>
		<h4>SMA NEGERI 1 NALUMSARI</h4>

	</center>
		<table border="1" align="center">
		  <thead>
		    <tr>
		      <th scope="col">Jam</th>
		      <th width="10" scope="col">Ke</th>

		      <?php
				for ($row = 0; $row < 5; $row ++) { 
					echo "<th>".getHari($row)."</th>";
				}

			  ?>
		    </tr>
		  </thead>
		  <tbody>
		  	<tr>
		      <th scope="row">07.00-07.45</th>
		      <td width="10">1</td>
		      <td width="10"><?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='SENIN' AND range_jam='07.00-07.45'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
					</td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='SELASA' AND range_jam='07.00-07.45'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='RABU' AND range_jam='07.00-07.45'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='KAMIS' AND range_jam='07.00-07.45'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='JUMAT' AND range_jam='07.00-07.45'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		    </tr>
		    <tr>
		      <th scope="row">07.45-08.30</th>
		      <td width="10">2</td>
		      <td><?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='SENIN' AND range_jam='07.45-08.30'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>	
					</td>
		      <td><?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='SELASA' AND range_jam='07.45-08.30'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>	</td>
		      <td><?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='RABU' AND range_jam='07.45-08.30'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>	</td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='KAMIS' AND range_jam='07.45-08.30'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>	
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='JUMAT' AND range_jam='07.45-08.30'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>	
		      </td>
		    </tr>
		    <tr>
		      <th scope="row">08.30-09.15</th>
		      <td width="10">3</td>
		      <td><?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='SENIN' AND range_jam='08.30-09.15'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>	
				</td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='SELASA' AND range_jam='08.30-09.15'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>	
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='RABU' AND range_jam='08.30-09.15'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>	
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='KAMIS' AND range_jam='08.30-09.15'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>	
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='JUMAT' AND range_jam='08.30-09.15'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>	
		      </td>
		    </tr>
		    <tr>
		      <th scope="row" bgcolor="yellow">09.15-09.30</th>
		      <td bgcolor="yellow"></td>
		      <td colspan="5" bgcolor="yellow"><b>ISTIRAHAT 1<b></td>
		    </tr>

		    <tr>
		      <th scope="row">09.30-10.15</th>
		      <td width="10">4</td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='SENIN' AND range_jam='09.30-10.15'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>	
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='SELASA' AND range_jam='09.30-10.15'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='RABU' AND range_jam='09.30-10.15'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='KAMIS' AND range_jam='09.30-10.15'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='JUMAT' AND range_jam='09.30-10.15'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		    </tr>
		    <tr>
		      <th scope="row">10.15-11.00</th>
		      <td width="10">5</td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='SENIN' AND range_jam='10.15-11.00'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='SELASA' AND range_jam='10.15-11.00'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='RABU' AND range_jam='10.15-11.00'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='KAMIS' AND range_jam='10.15-11.00'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='JUMAT' AND range_jam='10.15-11.00'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		    </tr>
		    <tr>
		      <th scope="row">11.00-11.45</th>
		      <td width="10">6</td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='SENIN' AND range_jam='11.00-11.45'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='SELASA' AND range_jam='11.00-11.45'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='RABU' AND range_jam='11.00-11.45'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='KAMIS' AND range_jam='11.00-11.45'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='JUMAT' AND range_jam='11.00-11.45'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		    </tr>
		    <tr>
		      <th scope="row" bgcolor="yellow">11.45-12.15</th>
		      <td bgcolor="yellow"></td>
		      <td colspan="5" bgcolor="yellow"><b>ISTIRAHAT 2<b></td>
		    </tr>
		    <tr>
		      <th scope="row">12.15-13.00</th>
		      <td width="10">7</td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='SENIN' AND range_jam='12.15-13.00'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='SELASA' AND range_jam='12.15-13.00'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='RABU' AND range_jam='12.15-13.00'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='KAMIS' AND range_jam='12.15-13.00'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='JUMAT' AND range_jam='12.15-13.00'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		    </tr>
		    <tr>
		      <th scope="row">13.00-13.45</th>
		      <td width="10">8</td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='SENIN' AND range_jam='13.00-13.45'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='SELASA' AND range_jam='13.00-13.45'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='RABU' AND range_jam='13.00-13.45'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='KAMIS' AND range_jam='13.00-13.45'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='JUMAT' AND range_jam='13.00-13.45'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		    </tr>
		    <tr>
		      <th scope="row" bgcolor="yellow">13.45-14.00</th>
		      <td bgcolor="yellow"></td>
		      <td colspan="5" bgcolor="yellow"><b>ISTIRAHAT 3<b></td>
		    </tr>
		    <tr>
		      <th scope="row">14.00-14.45</th>
		      <td width="10">9</td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='SENIN' AND range_jam='14.00-14.45'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='SELASA' AND range_jam='14.00-14.45'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='RABU' AND range_jam='14.00-14.45'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='KAMIS' AND range_jam='14.00-14.45'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='JUMAT' AND range_jam='14.00-14.45'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		    </tr>
		    <tr>
		      <th scope="row">14.45-15.30</th>
		      <td width="10">10</td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='SENIN' AND range_jam='14.45-15.30'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='SELASA' AND range_jam='14.45-15.30'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='RABU' AND range_jam='14.45-15.30'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='KAMIS' AND range_jam='14.45-15.30'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		      <td>
		      	<?php
		      	$jadwal = mysqli_query($koneksi,"SELECT nama_guru, nama_kelas FROM jadwal WHERE hari='JUMAT' AND range_jam='14.45-15.30'");
				$rows = mysqli_fetch_assoc($jadwal);
		  			echo $rows['nama_guru'].'</br>'.$rows['nama_kelas'];
					?>
		      </td>
		    </tr>			
		  </tbody>
		</table>

	<script>
		window.print();
	</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

