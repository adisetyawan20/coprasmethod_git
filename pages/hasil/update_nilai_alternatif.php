<!DOCTYPE html>
<?php
include "lib/koneksi.php";
$id_barang = $_GET['id_barang'];
$sql = "SELECT * FROM nilai_alternatif WHERE id_barang = $id_barang";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
?>

            <h4 class="mb"><i class="fa fa-angle-right"></i> Update nilai</h4>
            <div class="form-panel">
              <form class="form-horizontal " method="POST" action="pages/hasil/aksi_update_nilai_alternatif.php?id_barang=<?=$row['id_barang']?>">   
                    <div class="form-group" style="height: 50px; margin: 40px;">
                      <label for="inputEmail4">Nama Alternatif</label>
                      <input type="text" name="nm_barang" value="<?php echo $row['nm_barang'];?>"class="form-control round-form" placeholder="Nama Alternatif" autofocus required>
                    </div>
                    <div class="form-group" style="height: 50px; margin: 40px;">
                      <label for="inputPassword4">Tekstur</label>
                      <select class="form-control round-form" name="tekstur" >
                        <option value="0"><?php echo $row['tekstur'];?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <div class="form-group" style="height: 50px; margin: 40px;">
                      <label for="inputAddress">Kwalitas Warna</label>
                      <select class="form-control round-form" name="warna">
                        <option value="0"><?php echo $row['warna'];?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <div class="form-group" style="height: 50px; margin: 40px;">
                      <label for="inputAddress2">Kwalitas Bahan</label>
                      <select class="form-control round-form" name="bahan">
                        <option value="0"><?php echo $row['bahan'];?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                    <div class="form-group" style="height: 50px; margin: 40px;">
                      <label for="inputAddress2">Harga</label>
                      <input type="text" name="harga" class="form-control round-form"  value="<?php echo $row['nilai_harga'];?>" placeholder="Harga (Rp)" required>
                    </div>
                    <div class="form-group" style="height: 50px; margin: 40px;">
                      <label for="inputAddress2">Jarak Suppliyer</label>
                      <input type="text" name="jarak" class="form-control round-form"  value="<?php echo $row['nilai_jarak'];?>" placeholder="Jarak Suppliyer (Km)" required>
                    </div>
                <div class="form-group">
                  <div class="col-sm-12" style="text-align: center;">
                    <button type="submit" class="btn btn-theme03">Masukan</button>
                    <button type="reset" class="btn btn-theme04">Reset</button>
                  </div>
                </div>
              </form>
            </div>
            </html>