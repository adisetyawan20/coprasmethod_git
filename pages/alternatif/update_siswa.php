<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Update Alternatif</a>
    </li>
  </ul>

<?php
$id_alter = $_GET['id_alter'];
$sql = "SELECT * FROM tbl_alternatif WHERE id_alter = '$id_alter'";
$result = mysqli_query($koneksi, $sql);
while($row = mysqli_fetch_array($result)){
?>

<form class="form-horizontal style-form" method="POST" action="pages/alternatif/aksi_edit.php?id_alter=<?=$id_alter?>">
  <!-- Tab panes -->
   <div class="tab-content" style="background-color: white;padding: 20px;">
    <div id="home" class="tab-pane active">
      <h3>Tambah Alternatif</h3>
        <div class="form-group">
          <!-- id -->
          <label class="col-sm-2 col-sm-2 control-label">Id Alternatif</label>
          <div class="col-sm-10">
            <input type="text" class="form-control round-form" name="id_alter" value="<?=$row['id_alter'];?>" readonly="">
          </div>
        </div>
        <!-- Nama -->
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nama Alternatif</label>
          <div class="col-sm-10">
            <input type="text" class="form-control round-form" value ="<?=$row['nm_alter'];?>" name="nm_alter">
          </div>
        </div>
    </div>
        <div class="form-group">
          <div class="col-sm-12" style="text-align: center;">
            <button type="submit" class="btn btn-theme03">Masukan</button>
            <button type="reset" class="btn btn-theme04">Reset</button>
          </div>
        </div>
      
   
  </form>
  <?php
}?>