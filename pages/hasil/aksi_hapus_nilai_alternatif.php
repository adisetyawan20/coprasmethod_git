<?php

include "lib/koneksi.php";

$id_barang=$_GET['id_barang'];
$sql = "DELETE FROM nilai_alternatif WHERE id_barang = '$id_barang'";

if ($koneksi->query($sql) === TRUE) {
   echo "<script>alert('Data telah berhasil dihapus');window.location = 'index.php?module=coba';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>

