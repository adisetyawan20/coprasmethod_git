<div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Normalisasi bobot</h4>
              <form class="form-horizontal style-form" method="POST" action="pages/hasil/proses_hitung.php">
                
                <tr>

               <?php 
                  $q_kriteria = mysqli_query($koneksi, "SELECT * FROM tbl_kriteria");
                  $q_kriteria2 = mysqli_query($koneksi, "SELECT * FROM tbl_kriteria");
                  $q_alternatif = mysqli_query($koneksi, "SELECT * FROM tbl_alternatif");
                  ?>
                <div class ="container-fluid">
                <div class="row" >
                  <div class="col-lg-8 offset-lg-2">
                    <div class="card bg-light mb-3">
                      <div class="card-header">
                        
                      </div>
                      <div class="card-body tab-content">
                        <form action="?page=hasil_kriteria_akhir" method="post">
                          <table class="table table-bordered table-striped table-sm">
                            <thead class="thead-light">
                              <tr>
                                <!-- bneer -->
                                <th class="text-center">Kriteria <p>Alternatif</p></th> 
                                 <?php while ($kriteria = mysqli_fetch_array($q_kriteria)) { ?>
                                  <!-- kolom nama kriteria -->
                                  <th scope="col"><?php echo $kriteria[1]; ?></th>
                                <?php } ?>
                                  <?php while ($kriteria = mysqli_fetch_array($q_kriteria)) { ?>
                                  <th scope="col"><?php echo $kriteria[2]; ?></th>
                                <?php } ?>


                                <!-- <th scope="col"><?php echo $b1['kriteria1']; ?></th>
                                <th scope="col"><?php echo $b2['kriteria1']; ?></th>
                                <th scope="col"><?php echo $b3['kriteria1']; ?></th>
                                <th scope="col"><?php echo $b4['kriteria1']; ?></th>
                                <th scope="col"><?php echo $b5['kriteria1']; ?></th> -->
                              </tr>
                            </thead>
                            <tbody>
                              <?php while ($alternatif = mysqli_fetch_array($q_alternatif)) { ?>
                                  <!-- <tr>
                                    <td><?php echo $alternatif[1] ?></td>
                                    <?php while ($kriteria2 = mysqli_fetch_array($q_kriteria2)) { ?>
                                      <td><input class="form-control" name="nm_banding1"></td>
                                    <?php } ?>
                                  </tr> -->
                                <?php } ?>
                              <tr>
                                <!-- <th><?php echo $b1['kriteria1']; ?></th>  Baris Umur --> 
                                <th class="text-center">Kriteria <p>Alternatif</p></th>
                                <td><input class="form-control" name="nm_banding1"></input></td>
                                <td><input class="form-control" name="nm_banding1"></input></td>
                                <td><input class="form-control" name="nm_banding1"></input></td>
                                <td><input class="form-control" name="nm_banding1"></input></td>
                                <td><input class="form-control" name="nm_banding1"></input></td>
                              </tr>
                              <?php while ($alternatif = mysqli_fetch_array($q_alternatif)) { ?>
                                  <tr>
                                    <td><?php echo $alternatif[2] ?></td>
                                    <?php while ($kriteria2 = mysqli_fetch_array($q_kriteria2)) { ?>
                                      <td><input class="form-control" name="nm_banding2"></td>
                                    <?php } ?>
                                  </tr>
                                <?php } ?>

                              <tr>
                                <!-- <th><?php echo $b2['kriteria2']; ?></th> Baris IPK  -->
                                <td> <input class="form-control" name="nm_banding2"></input></td>
                                <td> <input class="form-control" name="nm_banding2"></input></td>
                                <td> <input class="form-control" name="nm_banding2"></input></td>
                                <td> <input class="form-control" name="nm_banding2"></input></td>
                                <td> <input class="form-control" name="nm_banding2"></input></td>
                                <td> <input class="form-control" name="nm_banding2"></input></td>
                                
                              </tr>

                              <tr>
                                <!-- <th><?php echo $b3['kriteria1']; ?></th> baris Penghasilan Orangtua  -->
                                <td><input class="form-control" name="nm_banding3"></input></td>
                                <td><input class="form-control" name="nm_banding3"></input></td>
                                <td><input class="form-control" name="nm_banding3"></input></td>
                                <td><input class="form-control" name="nm_banding3"></input></td>
                                <td><input class="form-control" name="nm_banding3"></input></td>
                                <td><input class="form-control" name="nm_banding3"></input></td>
                              </tr>

                              <tr>
                                <!-- <th><?php echo $b4['kriteria1']; ?></th>  baris semester  -->
                                <td> <input class="form-control" name="nm_banding4"></input></td>
                                <td> <input class="form-control" name="nm_banding5"></input></td>
                                <td> <input class="form-control" name="nm_banding6"></input></td>
                                <td> <input class="form-control" name="nm_banding6"></input></td>
                                <td> <input class="form-control" name="nm_banding6"></input></td>
                                <td> <input class="form-control" name="nm_banding6"></input></td>
                              </tr>
                    
                              <tr>
                                <!-- <th><?php echo $b5['kriteria1']; ?></th>  baris semester  -->
                                <td> <input class="form-control" name="nm_banding7"></input></td>
                                <td><input class="form-control" name="nm_banding8"></input></td>
                                <td><input class="form-control" name="nm_banding9"></input></td>
                                <td><input class="form-control" name="nm_banding10"></input></td>
                                <td><input class="form-control" name="nm_banding10"></input></td>
                                 <td><input class="form-control" name="nm_banding10"></input></td>
                              </tr>
                            </tbody>
                          </table>



                <div class="form-group">
                  <div class="col-sm-12" style="text-align: center;">
                    <button type="submit" class="btn btn-theme03">Masukan</button>
                    <button type="reset" class="btn btn-theme04">Reset</button>
                  </div>
              </form>
            </div>