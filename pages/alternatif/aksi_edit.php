<?php
// mengambil data koneksi
include '../../lib/koneksi.php';
// mengambil data dari form sebelumnya
$id_alter = $_POST['id_alter'];
$nm_alter = $_POST['nm_alter'];


 // echo $nKPS."<br>";
 // echo $nPKH."<br>";
 // echo $nStatus."<br>";
 // echo $nEkonomi."<br>";
 // echo $penghasilan."<br>";


	//mengambil id siswa terkahir yang baru saja dimasukan
              	
              	// insert data to table nilai.
              	$sAlter ="UPDATE tbl_alternatif SET nm_alter = '$nm_alter' WHERE id_alter = '$id_alter'; ";
				$koneksi->query($sAlter);

                $sqlSiswa = "UPDATE tbl_alternatif SET id_alter= '$id_alter', nm_alter='$nm_alter'WHERE id_alter = '$id_alter' ";
                $koneksi->query($sqlSiswa);

				echo "<script>alert('Input berhasil');window.location = '../../index.php?module=list_siswa';</script>";


// eksekusi sql

// if ($koneksi->query($sql) === TRUE) {
//     echo "<script>alert('Input berhasil');window.location = '../../index.php?module=list_kriteria';</script>";
// } else {
//     echo "Error: " . $sql . "<br>" . $koneksi->error;
// }

?>