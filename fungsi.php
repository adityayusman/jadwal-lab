<?php



// fungsi tambah data guru

function tambahGuru($tabel,$nama_guru) {
	include('config.php');

	$query 	= "INSERT INTO $tabel (nama_guru) VALUES ('$nama_guru')";
	$tambah	= mysqli_query($koneksi, $query);

	if (!$tambah) {
		echo "Gagal mmenambah data".$tabel;
		exit();
	}
}

// fungsi delete data guru
function deleteGuru($id_guru) {
	include('config.php');

	// hapus record dari tabel kriteria
	$query 	= "DELETE FROM guru WHERE id_guru=$id_guru";
	mysqli_query($koneksi, $query);

}

// fungsi tambah data kelas

function tambahKelas($tabel,$nama_kelas) {
	include('config.php');

	$query 	= "INSERT INTO $tabel (nama_kelas) VALUES ('$nama_kelas')";
	$tambah	= mysqli_query($koneksi, $query);

	if (!$tambah) {
		echo "Gagal mmenambah data".$tabel;
		exit();
	}
}

// fungsi delete kelas
function deleteKelas($id_kelas) {
	include('config.php');

	// hapus record dari tabel kriteria
	$query 	= "DELETE FROM kelas WHERE id_kelas=$id_kelas";
	mysqli_query($koneksi, $query);

}

// fungsi tambah data jam

function tambahJam($tabel,$range_jam) {
	include('config.php');

	$query 	= "INSERT INTO $tabel (range_jam) VALUES ('$range_jam')";
	$tambah	= mysqli_query($koneksi, $query);

	if (!$tambah) {
		echo "Gagal mmenambah data".$tabel;
		exit();
	}
}

// fungsi delete jam
function deleteJam($id_jam) {
	include('config.php');

	// hapus record dari tabel kriteria
	$query 	= "DELETE FROM jam WHERE id_jam=$id_jam";
	mysqli_query($koneksi, $query);

}

// fungsi delete jadwal
function deleteJadwal($id_jadwal) {
	include('config.php');

	// hapus record dari tabel kriteria
	$query 	= "DELETE FROM jadwal WHERE id_jadwal=$id_jadwal";
	mysqli_query($koneksi, $query);

}

// mencari nama hari
function getHari($id_hari) {
	include('config.php');
	$query  = "SELECT hari FROM hari ORDER BY id_hari";
	$result = mysqli_query($koneksi, $query);

	while ($row = mysqli_fetch_array($result)) {
		$hari[] = $row['hari'];
	}

	return $hari[($id_hari)];
}

// mencari range jam
function getJam($id_jam) {
	include('config.php');
	$query  = "SELECT range_jam FROM jam ORDER BY id_jam";
	$result = mysqli_query($koneksi, $query);

	while ($row = mysqli_fetch_array($result)) {
		$range_jam[] = $row['range_jam'];
	}

	return $range_jam[($id_jam)];
}



?>