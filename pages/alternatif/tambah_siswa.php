<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Tambah Alternatif</a>
    </li>
  </ul>
<form class="form-horizontal style-form" method="POST" action="pages/siswa/aksi_tambah.php">
  <!-- Tab panes -->
  <div class="tab-content" style="background-color: white;padding: 20px;">
    <div id="home" class="tab-pane active">
      <h3>Tambah Alternatif</h3>
        <div class="form-group">
          <!-- id -->
          <label class="col-sm-2 col-sm-2 control-label">Id Alternatif</label>
          <div class="col-sm-10">
            <input type="text" class="form-control round-form" name="nama"readonly="">
          </div>
        </div>
        <!-- Nama -->
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nama Alternatif</label>
          <div class="col-sm-10">
            <input type="text" class="form-control round-form" name="nama" placeholder="Masukan Nama Alternatif">
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