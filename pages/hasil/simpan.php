<?php
include "../../lib/koneksi.php";
$id_barang = uniqid();
$nm_barang = $_POST['nm_barang'];
$tekstur = $_POST['tekstur'];
$warna = $_POST['warna'];
$bahan = $_POST['bahan'];
$harga = $_POST['harga'];
$jarak=$_POST['jarak'];

//deklarasi harga 
$awal_1 = 10000;
$akhir_1 = 39000;

$awal_2 = 40000;
$akhir_2 = 69000;

$awal_3 = 70000;
$akhir_3 = 100000;

// deklarasi jarak
$awal_jarak_1 = 81;
$akhir_jarak_1 = 100;

$awal_jarak_2 = 61;
$akhir_jarak_2 = 80;

$awal_jarak_3 = 41;
$akhir_jarak_3 = 60;

$awal_jarak_4 = 21;
$akhir_jarak_4 = 40;

$awal_jarak_5 = 1;
$akhir_jarak_5 = 20;

date_default_timezone_set("Asia/Jakarta");
$created = date("Y-m-d H:i:s");

// normalisasi harga 
if ($harga >= $awal_1 && $harga <= $akhir_1) {
  $kode_harga = 1;
} elseif ($harga >= $awal_2 && $harga <= $akhir_2) {
  $kode_harga = 2;
} elseif ($harga >= $awal_3 && $harga <= $akhir_3) {
  $kode_harga = 3;
} else {
  $kode_harga ="UNKNOWN";
} 



// normalisasi jarak
if ($jarak >= $awal_jarak_5 && $jarak <= $akhir_jarak_5) {
  $kode_jarak = 5;
} elseif ($jarak >= $awal_jarak_4 && $jarak <= $akhir_jarak_4) {
  $kode_jarak = 4;
} elseif ($jarak >= $awal_jarak_3 && $jarak <= $akhir_jarak_3) {
  $kode_jarak = 3;
} elseif ($jarak >= $awal_jarak_2 && $jarak <= $akhir_jarak_2) {
  $kode_jarak = 2;
} elseif ($jarak >= $awal_jarak_1 && $jarak <= $akhir_jarak_1) {
  $kode_jarak = 1;
} else {
  $kode_jarak ="UNKNOWN";
}


$save = mysqli_query($koneksi,"insert into nilai_alternatif values ('$id_barang','$nm_barang','$tekstur','$warna','$bahan','$harga','$kode_harga','$jarak','$kode_jarak','$created')"); 
if($save){
	echo "<script>window.alert('Sukses');window.location = '../../index.php?module=coba';</script>";
}else{

	echo "<script>window.alert('$id_barang,$nm_barang,$tekstur,$warna,$bahan,$harga,$kode_harga,$jarak,$kode_jarak');window.location = '../../index.php?module=coba';</script>";
}
?>