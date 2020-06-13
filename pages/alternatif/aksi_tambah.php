<?php
// mengambil data koneksi
include '../../lib/koneksi.php';
// mengambil data dari form sebelumnya
$id_alter = $_POST['id_alter'];
$nm_alter = $_POST['nm_alter'];

// sql
$sql = "INSERT INTO tbl_alternatif (id_alter, nm_alter)
VALUES ('$id_alter', '$nm_alter')";

if ($koneksi->query($sql) === TRUE) {
	//mengambil id siswa terkahir yang baru saja dimasukan
	// $sqlIdakhir = "SELECT id_alternatif FROM tbl_alternatif ORDER BY id_alternatif DESC limit 1";
 //          $resultIdakhir = mysqli_query($koneksi, $sqlIdakhir);
 //              $hasil = mysqli_fetch_assoc($resultIdakhir);
 //              	$id_siswa = $hasil['id_siswa'];
              	
 //              	//insert data to table nilai.
 //              	$sKPS = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
	// 					VALUES ('1', '$id_siswa', '$nKPS')";
	// 			$koneksi->query($sKPS);

	// 			$sKPH = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
	// 					VALUES ('2', '$id_siswa', '$nPKH')";
	// 			$koneksi->query($sKPH);

	// 			$sStatus = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
	// 					VALUES ('3', '$id_siswa', '$nStatus')";
	// 			$koneksi->query($sStatus);

	// 			$sPenghasilan = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
	// 					VALUES ('4', '$id_siswa', '$penghasilan')";
	// 			$koneksi->query($sPenghasilan);

	// 			$sEkonomi = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
	// 					VALUES ('5', '$id_siswa', '$nEkonomi')";
	// 			$koneksi->query($sEkonomi);

				echo "<script>alert('Input berhasil');window.location = '../../index.php?module=list_siswa';</script>";
}

// eksekusi sql

// if ($koneksi->query($sql) === TRUE) {
//     echo "<script>alert('Input berhasil');window.location = '../../index.php?module=list_kriteria';</script>";
// } else {
//     echo "Error: " . $sql . "<br>" . $koneksi->error;
// }

?>