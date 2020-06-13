<?php

include "lib/koneksi.php";

$id_alter = $_GET['id_alter'];
$sql = "DELETE FROM tbl_alternatif WHERE id_alter = $id_alter";

if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('Data telah berhasil dihapus');window.location = 'index.php?module=list_siswa';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>	