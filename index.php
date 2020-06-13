<?php
session_start();
include "lib/koneksi.php";

if(empty($_SESSION['namauser'])){
    echo "Anda harus login terlebih dahulu');window.location = 'login.html';</script>";
}else{
    echo "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Batik Hatta</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
  <!-- Data table source -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
</head>

<!-- end of header -->

<body>
  <section id="container">
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>BUTIK BATIK <span> HATTA</span></b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>

    <!--Menu Samping-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="index.php?module=home"><img src="img/ui-epan.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Admin</h5>
          <li class="mt">
            <a class="" href="index.php?module=home">
              <i class="fa fa-home"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a class="">
              <i class="fa fa-file"></i>
              <span>Kriteria</span>
              </a>
              <ul class="sub">
              <li><a href="index.php?module=list_kriteria">Table Kriteria</a></li>
              <li><a href="index.php?module=tambah_kriteria">Tambah kriteria</a></li>
              <li><a href="index.php?module=hapus_semua_siswa">Hapus Data Siswa</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Alternatif</span>
              </a>
            <ul class="sub">
              <li><a href="index.php?module=list_siswa">Table Alternatif</a></li>
              <li><a href="index.php?module=tambah_siswa">Tambah Alternatif</a></li>
              <li><a href="index.php?module=hapus_semua_siswa">Hapus Data Siswa</a></li>
            </ul>
          </li>
          <li class="">
            <a class="" href="index.php?module=coba">
              <i class="fa fa-calculator"></i>
              <span>Hitung</span>
              </a>
          </li>
          <li class="">
            <a class="" href="index.php?module=list_hasil">
              <i class="fa fa-list"></i>
              <span>Hasil</span>
              </a>
          </li>
        </ul>
        <?php
        ?>
        <!-- sidebar menu end-->
      </div>
    </aside>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 main-chart" style="padding-left: 50px;padding-right: 50px;">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>BATIK HATTA</h3>
            </div>
            <?php

            if ($_GET['module'] == 'home') {
                include "pages/home/home.php";
                // table kriteria
            } elseif ($_GET['module'] == 'list_kriteria') {
                include "pages/kriteria/list_kriteria.php";
                // tambah kriteria
            } elseif ($_GET['module'] == 'tambah_kriteria') {
                include "pages/kriteria/tambah_kriteria.php";
                // update kriteria
            } elseif ($_GET['module'] == 'update_kriteria') {
                include "pages/kriteria/update_kriteria.php";
                 //hapus kriteria 
            }elseif ($_GET['module'] == 'hapus_kriteria') {
              include "pages/kriteria/aksi_hapus.php";
         //alternatif 
                // list alternatif
            } elseif ($_GET['module'] == 'list_siswa') {
                include "pages/alternatif/list_siswa.php";
                // tambah alternatif
            } elseif ($_GET['module'] == 'tambah_siswa') {
                include "pages/alternatif/tambah_siswa.php";
              // update alternatif
            } elseif ($_GET['module'] == 'update_siswa') {
              include "pages/alternatif/update_siswa.php";
              // hapus alternatif
            }elseif ($_GET['module'] == 'hapus_alternatif') {
              include "pages/alternatif/aksi_hapus.php";  
              // hapus semua alternatif
            }elseif ($_GET['module'] == 'hapus_semua_siswa') {
              include "pages/alternatif/aksi_hapus_semua.php";
              // table hasil
            }elseif ($_GET['module'] == 'list_hasil') {
              include "pages/hasil/list_hasil.php";
              // hitung
            }elseif ($_GET['module'] == 'hitung') {
              include "pages/hasil/hitung.php";
              // normalisasi bobot
            }elseif ($_GET['module'] == 'normalisasi_bobot') {
              include "pages/hasil/normalisasi_bobot.php";
              // benefit cost
            }elseif ($_GET['module'] == 'benefit_cost') {
              include "pages/hasil/benefit_cost.php";
              // 
            }elseif ($_GET['module'] == 'list_detail_siswa') {
              include "pages/hasil/list_siswa.php";
              // 
            }elseif ($_GET['module'] == 'hapus_hasil') {
              include "pages/hasil/aksi_hapus.php";
              // 
            }elseif ($_GET['module'] == 'hapus_hasil_siswa') {
              include "pages/hasil/aksi_hapus_hasil_siswa.php";
              //input nilai 
            }elseif ($_GET['module'] == 'coba') {
              include "pages/hasil/coba.php";
              // simpan input nilai alternatif
            }elseif ($_GET['module'] == 'simpan') {
              include "pages/hasil/simpan.php";
              // hapus nilai alternatif
            }elseif ($_GET['module'] == 'hapus_nilai_alternatif') {
              include "pages/hasil/aksi_hapus_nilai_alternatif.php";
              // update nilai alternatif
            }elseif ($_GET['module'] == 'update_nilai_alternatif') {
              include "pages/hasil/update_nilai_alternatif.php";
              // aksi updet
            }elseif ($_GET['module'] == 'aksi_update_nilai_alternatif') {
              include "pages/hasil/aksi_update_nilai_alternatif.php";
            }


            //default
             else {
                 include "pages/home/home.php";
            }
            ?>
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->


    <!--footer start-->
    <footer class="site-footer" style="margin-top: 40vh;">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Batik Hatta Semarang</strong>.
        </p>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <!-- data table source -->
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
  <script type="text/javascript">
    $(document).ready( function () {
    $('#myDataTables').DataTable();
      } );
  </script>

<!-- css -->
  </script> -->
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
