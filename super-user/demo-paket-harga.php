<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thrubus | Demo Paket Harga</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/adminlte-2/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/adminlte-2/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/adminlte-2/plugins/seiyria-bootstrap-slider/css/bootstrap-slider.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/adminlte-2/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/adminlte-2/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="../assets/adminlte-2/bower_components/select2/dist/css/select2.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet/less" type="text/css" href="../assets/style/main.less" />
  <script src="../assets/style/less.min.js" ></script>

</head>
<body class="hold-transition skin-black-light sidebar-mini">
<div class="wrapper">

  <?php include 'header.php'; ?>

  <!-- Left side column. contains the logo and sidebar -->
  
  <?php include 'sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Order
        <small>Okkarent</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Order</a></li>
        <li class="active">Tambah Order</li>
      </ol>
    </section>

    <!-- Main content -->
    <!-- section content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <section class="col-lg-6 connectedSortable ui-sortable">
          <div class="box box-navy">
            <!-- box-header -->
            <div class="box-header with-border ui-sortable-handle" style="cursor: move;">
              <h3 class="box-title">Form Order</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn waves-effect waves-light btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <!-- box-body -->
            <div class="box-body">
              <form role="form">
                <!-- row -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Paket Sewa :</label>
                      <select class="form-control select2" data-placeholder="Pilih Paket Sewa ..." style="width: 100%;" tabindex="-1" aria-hidden="true">
                        <option selected="selected"></option>
                        <option>Drop Off</option>
                        <option>Layanan Plus BBM</option>
                        <option>Layanan Non BBM</option>
                        <option disabled>Per Jam (segera tersedia)</option>
                        <option disabled>Per Bulan (segera tersedia)</option>
                        <option disabled>Lepas Kunci (segera tersedia)</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Tipe Mobil :</label>
                      <select class="form-control select2" data-placeholder="Pilih Tipe Mobil ..." style="width: 100%;" tabindex="-1" aria-hidden="true">
                        <option selected="selected"></option>
                        <option>Innova Reborn</option>
                        <option>Hiace</option>
                        <option>Xenia All New</option>
                        <option>Avanza Grand New</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- /.row -->
                <!-- row -->
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="text" class="form-field" placeholder="Tanggal mulai" name="tanggal-mulai" id='tanggal-mulai' required />
                      <span for="tanggal-mulai" class="form-label-icon-right"><i class="fa fa-calendar"></i></span>
                      <label for="tanggal-mulai" class="form-label-float">Tanggal mulai</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="text" class="form-field" placeholder="Jam mulai" name="jam-mulai" id='jam-mulai' required />
                      <span for="jam-mulai" class="form-label-icon-right"><i class="fa fa-clock-o"></i></span>
                      <label for="jam-mulai" class="form-label-float">Jam mulai</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-field" placeholder="Lokasi penjemputan" name="lokasi-penjemputan" id='lokasi-penjemputan' required />
                      <span for="lokasi-penjemputan" class="form-label-icon-right"><i class="fa fa-map-marker"></i></span>
                      <label for="lokasi-penjemputan" class="form-label-float">Lokasi penjemputan</label>
                    </div>
                  </div>
                </div>
                <br>
                <!-- /.row -->
                <!-- row -->
                <div class="row">
                  <div class="col-md-12">
                    <label>Tujuan: </label>
                      <ul class="timeline">
                        <li>
                          <i class="timeline-icon fa fa-circle-o"></i>
                          <div class="form-group">
                            <input type="text" class="form-field" placeholder="Kota / tempat wisata wajib diisi" name="alamat" id='alamat' required />
                            <span for="alamat" class="form-label-icon-right"><i class="fa fa-times"></i></span>
                          </div>
                        </li>
                        <li>
                          <i class="timeline-icon fa fa-circle-o"></i>
                          <div class="form-group">
                            <input type="text" class="form-field" placeholder="Kota / tempat wisata wajib diisi" name="alamat" id='alamat' required />
                            <span for="alamat" class="form-label-icon-right"><i class="fa fa-times"></i></span>
                          </div>
                        </li>
                        <li>
                          <i class="timeline-icon fa fa-map-marker"></i>
                          <div class="form-group">
                            <input type="text" class="form-field" placeholder="Kota / tempat wisata wajib diisi" name="alamat" id='alamat' required />
                            <span for="alamat" class="form-label-icon-right"><i class="fa fa-times"></i></span>
                          </div>
                        </li>
                      </ul>
                  </div>
                </div>
                <!-- row -->
                <!-- row -->
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="text" class="form-field" placeholder="Tanggal selesai" name="tanggal-selesai" id='tanggal-selesai' required />
                      <span for="tanggal-selesai" class="form-label-icon-right"><i class="fa fa-calendar"></i></span>
                      <label for="tanggal-selesai" class="form-label-float">Tanggal selesai</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="text" class="form-field" placeholder="Jam selesai" name="jam-selesai" id='jam-selesai' required />
                      <span for="jam-selesai" class="form-label-icon-right"><i class="fa fa-clock-o"></i></span>
                      <label for="jam-selesai" class="form-label-float">Jam selesai</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-field" placeholder="Lokasi turun" name="lokasi-turun" id='lokasi-turun' required />
                      <span for="lokasi-turun" class="form-label-icon-right"><i class="fa fa-map-marker"></i></span>
                      <label for="lokasi-turun" class="form-label-float">Lokasi turun</label>
                    </div>
                  </div>
                </div>
                <!-- /.row -->
                <!-- row -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-field" placeholder="Harga penawaran" name="harga-penawaran" id='harga-penawaran' required />
                      <label for="harga-penawaran" class="form-label-float">Harga penawaran</label>
                    </div>
                  </div>
                </div>
                <!-- /.row -->
                <!-- row -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea type="text" class="form-field" placeholder="Keterangan" name="keterangan" id='keterangan' required></textarea>
                      <label for="keterangan" class="form-label-float">Keterangan</label>
                    </div>
                  </div>
                </div>
                <!-- /.row -->
              </form>
            </div>
            <!-- /.box-body -->
              
            <!-- box-footer -->
            <div class="box-footer">
              <button type="submit" class="btn waves-effect waves-light btn-dark-gray"><i class="fa fa-times"></i> kembali</button>
              <button type="submit" class="btn waves-effect waves-light btn-green pull-right"><i class="fa fa-search"></i> Cek</button>
            </div>
            <!-- /.box-footer -->
          </div>
        </section>
        <!--/.left column -->
        <!-- right column -->
        <section class="col-lg-6 connectedSortable ui-sortable">
          <!-- ketersediaan mobil -->
          <div class="box box-navy">
            <div class="box-header">
              <h3 class="box-title">Ketersediaan Mobil</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="daftarkasir" class="table  ">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Pool</th>
                  <th>Tipe</th>
                  <th>Harga</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1.</td>
                  <td>Juanda</td>
                  <td><a href="javascript:void(0)">Avanza All New</a></td>
                  <td><a href="javascript:void(0)">Rp. 800.000</a></td>
                  <td style="text-align: center;">
                      <a href="detail-mobil.php" target="_blank" class="btn waves-effect waves-light btn-teal btn-sm" data-content="Lihat" data-toggle="popover" data-trigger="hover" data-placement="top">
                        <i class="fa fa-eye"></i>
                      </a>
                  </td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Gunung Anyar</td>
                  <td><a href="javascript:void(0)">Innova Reborn</a></td>
                  <td><a href="javascript:void(0)">Rp. 800.000</a></td>
                  <td style="text-align: center;">
                      <a href="detail-mobil.php" target="_blank" class="btn waves-effect waves-light btn-teal btn-sm" data-content="Lihat" data-toggle="popover" data-trigger="hover" data-placement="top">
                        <i class="fa fa-eye"></i>
                      </a>
                  </td>
                </tr>
                </tfoot>
              </table>
              <a class="btn waves-effect waves-light btn-navy waves-effect waves-lightmt-4 mb-4 pull-right">Tampilkan mitra lain<i class="fa fa-angle-down pull-right"></i></a>
              <table id="daftarkasir" class="table  ">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Pool</th>
                  <th>Mitra</th>
                  <th>Tipe</th>
                  <th>Harga</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1.</td>
                  <td>Juanda</td>
                  <td>Surabaya Trans</td>
                  <td>Avanza All New</td>
                  <td><a href="javascript:void(0)">Rp. 800.000</a></td>
                  <td style="text-align: center;">
                      <a href="detail-mobil.php" target="_blank" class="btn waves-effect waves-light btn-teal btn-sm" data-content="Lihat" data-toggle="popover" data-trigger="hover" data-placement="top">
                        <i class="fa fa-eye"></i>
                      </a>
                  </td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Juanda</td>
                  <td>Surabaya Trans</td>
                  <td>Avanza All New</td>
                  <td><a href="javascript:void(0)">Rp. 800.000</a></td>
                  <td style="text-align: center;">
                      <a href="detail-mobil.php" target="_blank" class="btn waves-effect waves-light btn-teal btn-sm" data-content="Lihat" data-toggle="popover" data-trigger="hover" data-placement="top">
                        <i class="fa fa-eye"></i>
                      </a>
                  </td>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.ketersediaan mobil -->
          <!-- box -->
          <div class="box box-navy">
            <div class="box-header">
              <h3 class="box-title">Riwayat Demo</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="daftarkasir" class="table  ">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Waktu</th>
                  <th>Tipe</th>
                  <th>Harga</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1.</td>
                  <td>22 November 2020 | 11:20</td>
                  <td>Avanza All New</td>
                  <td><a href="javascript:void(0)">Rp. 800.000</a></td>
                  <td style="text-align: center;">
                    <span data-toggle="modal" data-target="#modal-detail"><a href="javascript:void(0)" class="btn waves-effect waves-light btn-teal btn-sm" data-content="Lihat" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-eye"></i></a><span>
                  </td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>22 November 2020 | 11:20</td>
                  <td>Avanza All New</td>
                  <td><a href="javascript:void(0)">Rp. 800.000</a></td>
                  <td style="text-align: center;">
                    <span data-toggle="modal" data-target="#modal-detail"><a href="javascript:void(0)" class="btn waves-effect waves-light btn-teal btn-sm" data-content="Lihat" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-eye"></i></a><span>
                  </td>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </section>
        <!-- /.right column -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.section content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->

  <?php include 'control-sidebar.php' ?>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../assets/adminlte-2/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../assets/adminlte-2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/adminlte-2/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- FastClick -->
<script src="../assets/adminlte-2/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/adminlte-2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/adminlte-2/dist/js/demo.js"></script>
<script src="../assets/adminlte-2/plugins/seiyria-bootstrap-slider/bootstrap-slider.min.js"></script>
<script src="../assets/style/main.js" ></script>
<script>
  $(document).ready(function(){
    $('.select2').select2({
      theme: "material",
      allowClear: true
    });
    $('.slider').slider();
    $('[data-toggle="popover"]').popover();
  });
</script>
</body>
</html>
