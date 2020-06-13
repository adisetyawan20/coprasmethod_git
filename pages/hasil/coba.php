<!DOCTYPE html>
<html lang="en">
    <h3><i class="fa fa-plus"></i> Input Nilai Alternatif</h3>
     <div class="row mb">
    <body>
            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">Input Nilai</a><hr>

              
<!-- <table class="table table-bordered" style="background-color: #fff"> -->
   <div class="content-panel">
     <div class="adv-table" style="padding: 15px;">
       <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="myDataTables">
        <div class="dataTables_length" id="myDataTables_length">
          <label>Show <select name="myDataTables_length" aria-controls="myDataTables" class="">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
          </select> entries</label>
        </div>
        <!-- search -->
        <!-- <div id="myDataTables_filter" class="dataTables_filter" style="">
          <label>Search:<input type="search" class="" placeholder="" aria-controls="myDataTables"></label>
        </div>
 -->
  <thead>
    <tr>
      <!-- kalo bisa diubah jadi ambil db -->
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col" class="text-center">Tekstur</th>
                    <th scope="col" class="text-center">Kualitas Warna</th>
                    <th scope="col" class="text-center">Kualitas Bahan</th>
                    <th scope="col" class="text-center">Harga</th>
                    <th scope="col" class="text-center">Jarak Suppliyer</th>
                    <!-- <th scope="col" class="text-center">Total Nilai Kriteria</th> -->
                    <th scope="col" class="text-center">Aksi</th>

    </tr>
  </thead>
  <tbody>
    <!-- Jumlah kriteria -->
            <?php
            $no=0;

          $tampil_alternatif = mysqli_query($koneksi,"SELECT * FROM nilai_alternatif ORDER BY  created_time ASC");
          while($fetch_alternatif = mysqli_fetch_array($tampil_alternatif)) {
            $id_barang = $fetch_alternatif['id_barang'];
            $tekstur_alternatif = $fetch_alternatif['tekstur'];
            $warna_alternatif = $fetch_alternatif['warna'];
            $bahan_alternatif = $fetch_alternatif['bahan'];
            $nilai_harga_alternatif = $fetch_alternatif['nilai_harga'];
            $nilai_jarak_alternatif = $fetch_alternatif['nilai_jarak'];

          // include "../../lib/koneksi.php";
          // ujmlah tektur 
          $sql_jumlah_tekstur = mysqli_query($koneksi, "select sum(tekstur) as jumlah_tekstur from nilai_alternatif;");
          $jumlah_tekstur = mysqli_fetch_array($sql_jumlah_tekstur);
          $result_jumlah_tekstur = $jumlah_tekstur['jumlah_tekstur'];
          // kualitas warna
          $sql_jumlah_warna = mysqli_query($koneksi, "select sum(warna) as jumlah_kualitas_warna from nilai_alternatif;");
          $jumlah_warna = mysqli_fetch_array($sql_jumlah_warna);
          $result_jumlah_warna = $jumlah_warna['jumlah_kualitas_warna'];
          //  bahan 
          $sql_jumlah_bahan = mysqli_query($koneksi, "select sum(bahan) as jumlah_kualitas_bahan from nilai_alternatif;");
          $jumlah_bahan = mysqli_fetch_array($sql_jumlah_bahan);
          $result_jumlah_bahan = $jumlah_bahan['jumlah_kualitas_bahan'];
          //  harga 
          $sql_jumlah_harga = mysqli_query($koneksi, "select sum(nilai_harga) as jumlah_harga from nilai_alternatif;");
          $jumlah_harga = mysqli_fetch_array($sql_jumlah_harga);
          $result_jumlah_harga = $jumlah_harga['jumlah_harga'];
          //  jarak
          $sql_jumlah_jarak = mysqli_query($koneksi, "select sum(nilai_jarak) as jumlah_jarak from nilai_alternatif;");
          $jumlah_jarak = mysqli_fetch_array($sql_jumlah_jarak);
          $result_jumlah_jarak = $jumlah_jarak['jumlah_jarak'];

          $no++;
          ?>

              <tr>
                <th ><?=$no;?></th>
                <td><?=$fetch_alternatif['nm_barang'];?></td>
                <td class="text-center"><?=$tekstur_alternatif;?></td>
                <td class="text-center"><?=$warna_alternatif;?></td>
                <td class="text-center"><?=$bahan_alternatif;?></td>
                <td class="text-center"><?=$nilai_harga_alternatif;?></td>
                <td class="text-center"><?=$nilai_jarak_alternatif;?></td>
                <td class="hidden-phone" align="center" >

                  <!-- belum bisa  -->
                   <a href="#"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalNormalisaisi<?=$id_barang;?>"><i class="fa fa-save"></i> Counting <?=$fetch_alternatif['nm_barang'];?> </button></a>
                  <a href="index.php?module=update_nilai_alternatif&id_barang=<?=$fetch_alternatif['id_barang']?>"><button type="button" class="btn btn-warning"><i class="fa fa-cog"></i>Edit</button></a>
                 <a href="index.php?module=hapus_nilai_alternatif&id_barang=<?=$fetch_alternatif['id_barang']?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button></a>
                </td>

              </tr>
        <!-- Modal Normalisasi -->
              <div class="modal fade" id="ModalNormalisaisi<?=$id_barang;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Hasil Normalisasi <?=$fetch_alternatif['nm_barang'];?></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home<?=$id_barang;?>">Tekstur</a></li>
                      <li><a data-toggle="tab" href="#menu1<?=$id_barang;?>">Kualitas Warna</a></li>
                      <li><a data-toggle="tab" href="#menu2<?=$id_barang;?>">Kualitas Bahan</a></li>
                      <li><a data-toggle="tab" href="#menu3<?=$id_barang;?>">Harga</a></li>
                      <li><a data-toggle="tab" href="#menu4<?=$id_barang;?>">Jarak Supliyer</a></li>
                    </ul>
                     <div  class="tab-content">

            <!-- tekstur -->
                     <div id="home<?=$id_barang;?>" class="tab-pane fade in active">
                       <?php
                      //manggil data kriteria tekstur
                       $tampil_kriteria_tekstur = mysqli_query($koneksi,"SELECT * FROM tbl_kriteria where id_kriteria = '1'");
                       $fetch_kriteria_tekstur = mysqli_fetch_array($tampil_kriteria_tekstur);
                       $bobot_tekstur = $fetch_kriteria_tekstur['bobot'];
                      ?>
                      <!--proses normalisasi bobot tekstur-->
                       <h3><strong>Tekstur :</strong> 
                        </h3> <?php echo"Hitungan : $tekstur_alternatif / $result_jumlah_tekstur * $bobot_tekstur = ";
                        $tekstur_echo = ($tekstur_alternatif/$result_jumlah_tekstur)*$bobot_tekstur;
                       echo $tekstur_echo ;?>
                    </div>

           <!-- kualitas warna -->
                    <div id="menu1<?=$id_barang;?>" class="tab-pane fade">
                      <?php 
                       // manggil data kriteria kualitas warna
                       $tampil_kriteria_warna = mysqli_query($koneksi,"SELECT * FROM tbl_kriteria where id_kriteria = '2'");
                       $fetch_kriteria_warna = mysqli_fetch_array($tampil_kriteria_warna);
                       $bobot_warna = $fetch_kriteria_warna['bobot'];
                      ?> 
                      <!--proses normalisasi bobot kualitas warna-->
                      <h3><strong>Kualitas warna :</strong> 
                       </h3> <?php echo"Hitungan : $warna_alternatif / $result_jumlah_warna * $bobot_warna = ";
                       $warna_echo = ($warna_alternatif/$result_jumlah_warna)*$bobot_warna; 
                       echo $warna_echo ;?>
                    </div>

           <!-- kualitas bahan -->
                     <div id="menu2<?=$id_barang;?>" class="tab-pane fade">
                       <?php
                      //manggil data kriteria kualitas bahan
                       $tampil_kriteria_bahan = mysqli_query($koneksi,"SELECT * FROM tbl_kriteria where id_kriteria = '3'");
                       $fetch_kriteria_bahan = mysqli_fetch_array($tampil_kriteria_bahan);
                       $bobot_bahan = $fetch_kriteria_bahan['bobot'];
                      ?>
                      <!--proses normalisasi bobot bahan-->
                       <h3><strong>Kualitas Bahan :</strong> 
                        </h3> <?php echo"Hitungan : $bahan_alternatif / $result_jumlah_bahan * $bobot_bahan = ";
                       $bahan_echo = ($bahan_alternatif/$result_jumlah_bahan)*$bobot_bahan;
                       echo $bahan_echo ;?>
                    </div>
          <!-- harga -->
                     <div id="menu3<?=$id_barang;?>" class="tab-pane fade">
                       <?php
                      //manggil data kriteria harga
                       $tampil_kriteria_harga = mysqli_query($koneksi,"SELECT * FROM tbl_kriteria where id_kriteria = '6'");
                       $fetch_kriteria_harga = mysqli_fetch_array($tampil_kriteria_harga);
                       $bobot_harga = $fetch_kriteria_harga['bobot'];
                      ?>
                      <!--proses normalisasi bobot harga-->
                       <h3><strong>Harga :</strong> 
                        </h3> <?php echo"Hitungan : $nilai_harga_alternatif / $result_jumlah_harga * $bobot_harga = ";
                       $harga_echo = ($nilai_harga_alternatif/$result_jumlah_harga)*$bobot_harga; 
                       echo $harga_echo ;?>
                    </div>
          <!-- jarak -->
                     <div id="menu4<?=$id_barang;?>" class="tab-pane fade">
                       <?php
                      //manggil data kriteria jarak
                       $tampil_kriteria_jarak = mysqli_query($koneksi,"SELECT * FROM tbl_kriteria where id_kriteria = '7'");
                       $fetch_kriteria_jarak = mysqli_fetch_array($tampil_kriteria_jarak);
                       $bobot_jarak = $fetch_kriteria_jarak['bobot'];
                      ?>
                      <!--proses normalisasi bobot jarak-->
                       <h3><strong>Jarak Suppliyer :</strong> 
                        </h3> <?php echo"Hitungan : $nilai_jarak_alternatif / $result_jumlah_jarak * $bobot_jarak = ";
                       $jarak_echo = ($nilai_jarak_alternatif/$result_jumlah_jarak)*$bobot_jarak;
                       echo $jarak_echo ;?>
                    </div>
                  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="hasil<?=$id_barang;?>()">Hasil</button>
      </div>
    </div>
  </div>
</div>
<?php
$hasil_s= $tekstur_echo+$warna_echo+$bahan_echo ;
$hasil_m= $harga_echo + $jarak_echo;
?>
<script>
function hasil<?=$id_barang;?>(){
window.alert('<?php 
  echo "Hasil S = $hasil_s ";
  echo "dan ";
  echo "Hasil M = $hasil_m";
  ?>');

}
</script>
             
              <?php
          }
          // echo"<pre>";
          // echo var_dump($jumlah_tekstur);
          // echo "</pre>";
          // while $total_tekstur = mysqli_fetch_assoc($jumlah);
          

          ?>

          <tr>
            <th colspan="2"><center>Total</center></th>
            <td class="text-center"><?=$jumlah_tekstur['jumlah_tekstur'];?></td>
            <td class="text-center"><?=$jumlah_warna['jumlah_kualitas_warna'];?></td>
            <td class="text-center"><?=$jumlah_bahan['jumlah_kualitas_bahan'];?></td>
            <td class="text-center"><?=$jumlah_harga['jumlah_harga'];?></td>
            <td class="text-center"><?=$jumlah_jarak['jumlah_jarak'];?></td>
          </tr>
  </tbody>
</table>
     
    </div>
 
 <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Input</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
       <form action="pages/hasil/simpan.php" method="post">
        <div class="form-group">
          <label for="inputEmail4">Nama Alternatif</label>
          <input type="text" name="nm_barang" class="form-control" placeholder="Nama Alternatif" autofocus required>
        </div>
        <div class="form-group">
          <label for="inputPassword4">Tekstur</label>
          <select class="form-control" name="tekstur" >
            <option value="0">--Pilih Level Tekstur--</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="inputAddress">Kwalitas Warna</label>
          <select class="form-control" name="warna">
            <option value="0">--Pilih Level Warna--</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Kwalitas Bahan</label>
          <select class="form-control" name="bahan">
            <option value="0">--Pilih Level Bahan--</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Harga</label>
          <input type="text" name="harga" class="form-control" placeholder="Harga (Rp)" required>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Jarak Suppliyer</label>
          <input type="text" name="jarak" class="form-control" placeholder="Jarak Suppliyer (Km)" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>


