<?php

include "lib/koneksi.php";

$id_kriteria=$_GET['id_kriteria'];
$sql = "DELETE FROM tbl_kriteria WHERE id_kriteria = $id_kriteria";

if ($koneksi->query($sql) === TRUE) {
   echo "<script>alert('Data telah berhasil dihapus');window.location = 'index.php?module=list_kriteria';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>

