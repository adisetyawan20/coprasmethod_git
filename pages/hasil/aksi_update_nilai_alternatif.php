<?php
// include 'lib/koneksi.php';

$id_barang = uniqid();
$nm_barang = $_POST['nm_barang'];
$tekstur = $_POST['tekstur'];
$warna = $_POST['warna'];
$bahan = $_POST['bahan'];
$harga = $_POST['harga'];
$jarak=$_POST['jarak'];
$awal_1 = 10000;
$akhir_1 = 39000;

$awal_2 = 40000;
$akhir_2 = 69000;

$awal_3 = 70000;
$akhir_3 = 100000;
date_default_timezone_set("Asia/Jakarta");
$created = date("Y-m-d H:i:s");

$sql = "UPDATE nilai_alternatif SET nm_barang='$nm_barang',tekstur='$tekstur',warna='$warna',bahan='$bahan',harga='$harga',jarak='$jarak', WHERE id_barang=$id_barang";

if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('UPDATE berhasil');window.location = '../../index.php?module=coba';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>