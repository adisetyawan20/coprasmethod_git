        <h3><i class="fa fa-angle-right"></i> Table Alternatif </h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table" style="padding: 15px;">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="myDataTables">
                <thead>
                  <tr>
                    <th>Id Alternatif</th>
                    <th>Nama Alternatif</th>
                    <!-- <?php
                    $sqlNamakriteria = "SELECT * FROM tbl_alternatif ORDER BY id_alter ASC";
                    $resultNamaKriteria = mysqli_query($koneksi, $sqlNamakriteria);
                        while ($hasilNamaKriteria = mysqli_fetch_assoc($resultNamaKriteria)) {
                    ?>
                              <th><?=$hasilNamaKriteria['kriteria']?></th>
                    <?php
                    }
                    ?>
 -->                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
          <?php
          $sql = "SELECT * FROM tbl_alternatif";
          $result = mysqli_query($koneksi, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
          ?>
                  <tr class="gradeX">
                    <td><?=$row['id_alter']?></td>
                    <td><?=$row['nm_alter']?></td>
                    <td class="hidden-phone">
                        <a href="index.php?module=update_siswa&id_alter=<?=$row['id_alter']?>"><button type="button" class="btn btn-warning"><i class="fa fa-cog"></i> Edit</button></a>
                        <a href="index.php?module=hapus_alternatif&id_alter=<?=$row['id_alter']?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button></a>
                    </td>
                  </tr>
          <?php
              }
          ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->