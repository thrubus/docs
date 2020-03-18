<?php
$arr = [
  'telepon-masuk' => [
    'color' => 'purple',
    'button' => ''
  ],
  'booking' => [
    'color' => 'orange',
    'button' => '<span data-toggle="modal" data-target="#modal-jadikan-terjadwal">
    <button type="button" class="btn waves-effect waves-light btn-blue background-white"><i class="fa fa-calendar"></i> Terjadwal</button>
    </span>
    <span data-toggle="modal" data-target="#modal-jadikan-proses">
      <button type="button" class="btn waves-effect waves-light btn-aqua background-white"><i class="fa fa-tasks"></i> Proses</button>
    </span>
    <span data-toggle="modal" data-target="#modal-jadikan-cancel">
      <button type="button" class="btn waves-effect waves-light btn-red background-white"><i class="fa fa-times"></i> Cancel</button>
    </span>'
  ],
  'terjadwal' => [
    'color' => 'blue',
    'button' => '<span data-toggle="modal" data-target="#modal-jadikan-proses">
      <button type="button" class="btn waves-effect waves-light btn-aqua background-white"><i class="fa fa-tasks"></i> Proses</button>
    </span>
    <span data-toggle="modal" data-target="#modal-jadikan-cancel">
      <button type="button" class="btn waves-effect waves-light btn-red background-white"><i class="fa fa-times"></i> Cancel</button>
    </span>'
  ],
  'proses' => [
    'color' => 'aqua',
    'button' => '<span data-toggle="modal" data-target="#modal-jadikan-close">
      <button type="button" class="btn waves-effect waves-light btn-lime background-white"><i class="fa fa-flag"></i> Close</button>
    </span>
    <span data-toggle="modal" data-target="#modal-jadikan-cancel">
      <button type="button" class="btn waves-effect waves-light btn-red background-white"><i class="fa fa-times"></i> Cancel</button>
    </span>'
  ],
  'close' => [
    'color' => 'lime',
    'button' => ''
  ],
  'cancel' => [
    'color' => 'red',
    'button' => ''
  ],
  'kadaluarsa' => [
    'color' => 'navy',
    'button' => ''
  ]
]
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thrubus | Lihat Jadwal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/adminlte-2/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/adminlte-2/bower_components/font-awesome/css/font-awesome.min.css">
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
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
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
      <h1>Detail Pemesanan : hg78asg</h1>
      <span class="label bg-<?= $arr[$_GET['params']]['color'] ?>"><?= str_replace('-', ' ', $_GET['params']) ?></span>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Order</a></li>
        <li class="active">Detail Pemesanan</li>
      </ol>
    </section>

    <!-- Main content -->
    <!-- section content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12 mb-3">
          <?= $arr[$_GET['params']]['button'] ?>
          <button type="button" class="btn waves-effect waves-light btn-black background-white pull-right"><i class="fa fa-print"></i> Print Invoice</button>
        </div>
      </div>
      <div class="row">
        <!-- column -->
        <section class="col-lg-6 connectedSortable ui-sortable">
          <div class="box box-navy">
            <!-- box-header -->
            <div class="box-header with-border ui-sortable-handle" style="cursor: move;">
              <h3 class="box-title">Customer : </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn waves-effect waves-light btn-box-tool" data-content="Edit" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-pencil"></i></button>
                <button type="button" class="btn waves-effect waves-light btn-box-tool" data-widget="collapse" data-content="Sembunyikan" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <!-- box-body -->
            <div class="box-body table-responsive no-padding">
              <table class="table  table-hover  thmiddle thcenter tdmiddle tdcenter">
                <tbody><tr>
                  <th></th>
                  <th>Nama</th>
                  <th>No. Telepon</th>
                  <th>Alamat</th>
                </tr>
                <tr>
                  <th>Customer</th>
                  <td>Michael Jackson</td>
                  <td>0838-4856-2152</td>
                  <td>Jl. YFAC ajhvsaj JKHVBAJ</td>
                </tr>
                <tr>
                  <th>Tamu</th>
                  <td>Michael Jackson</td>
                  <td>0838-4856-2152</td>
                  <td>Jl. YFAC ajhvsaj JKHVBAJ</td>
                </tr>
                <!-- <tr>
                  <th>Mitra</th>
                  <td>Okkarent</td>
                  <td>0838-4856-2152</td>
                  <td>Jl. YFAC ajhvsaj JKHVBAJ</td>
                </tr> -->
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="box box-navy">
            <!-- box-header -->
            <div class="box-header with-border ui-sortable-handle" style="cursor: move;">
              <h3 class="box-title">Tujuan : </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn waves-effect waves-light btn-box-tool" data-content="Edit" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-pencil"></i></button>
                <button type="button" class="btn waves-effect waves-light btn-box-tool" data-widget="collapse" data-content="Sembunyikan" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <!-- box-body -->
            <div class="box-body table-responsive no-padding">
              <table class="table  table-hover  thmiddle thcenter">
                <tbody>
                  <tr>
                    <th>Dari pool</th>
                    <td>
                      <p><i class="fa fa-clock-o"></i>&nbsp; 12 November 2019 | 12:30.</p>
                      <p><i class="fa fa-map-marker"></i>&nbsp;&nbsp; Jl Gunung Anyar, Surabaya l Gunung Anyar, Surabaya, Surabaya l Gunung Anyar, Surabaya.</p>
                    </td>
                  </tr>
                  <tr>
                    <th>Penjemputan</th>
                    <td>
                      <p><i class="fa fa-clock-o"></i>&nbsp; 12 November 2019 | 12:30.</p>
                      <p><i class="fa fa-map-marker"></i>&nbsp;&nbsp; Jl Gunung Anyar, Surabaya l Gunung Anyar, Surabaya, Surabaya l Gunung Anyar, Surabaya.</p>
                    </td>
                  </tr>
                  <tr>
                    <th>Tujuan #1 </th>
                    <td>
                      <p><i class="fa fa-clock-o"></i>&nbsp; 12 November 2019 | 12:30.</p>
                      <p><i class="fa fa-map-marker"></i>&nbsp;&nbsp; Jl Gunung Anyar, Surabaya l Gunung Anyar, Surabaya, Surabaya l Gunung Anyar, Surabaya.</p>
                    </td>
                  </tr>
                  <tr>
                    <th>Tujuan #2 </th>
                    <td>
                      <p><i class="fa fa-clock-o"></i>&nbsp; 12 November 2019 | 12:30.</p>
                      <p><i class="fa fa-map-marker"></i>&nbsp;&nbsp; Jl Gunung Anyar, Surabaya l Gunung Anyar, Surabaya, Surabaya l Gunung Anyar, Surabaya.</p>
                    </td>
                  </tr>
                  <tr>
                    <th>Tujuan #3 </th>
                    <td>
                      <p><i class="fa fa-clock-o"></i>&nbsp; 12 November 2019 | 12:30.</p>
                      <p><i class="fa fa-map-marker"></i>&nbsp;&nbsp; Jl Gunung Anyar, Surabaya l Gunung Anyar, Surabaya, Surabaya l Gunung Anyar, Surabaya.</p>
                    </td>
                  </tr>
                  <tr>
                    <th>Lokasi turun </th>
                    <td>
                      <p><i class="fa fa-clock-o"></i>&nbsp; 12 November 2019 | 12:30.</p>
                      <p><i class="fa fa-map-marker"></i>&nbsp;&nbsp; Jl Gunung Anyar, Surabaya l Gunung Anyar, Surabaya, Surabaya l Gunung Anyar, Surabaya.</p>
                    </td>
                  </tr>
                  <tr>
                    <th>Sampai pool </th>
                    <td>
                      <p><i class="fa fa-clock-o"></i>&nbsp; 12 November 2019 | 12:30.</p>
                      <p><i class="fa fa-map-marker"></i>&nbsp;&nbsp; Jl Gunung Anyar, Surabaya l Gunung Anyar, Surabaya, Surabaya l Gunung Anyar, Surabaya.</p>
                    </td>
                  </tr>
                <tr>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="box box-navy">
            <!-- box-header -->
            <div class="box-header with-border ui-sortable-handle" style="cursor: move;">
              <h3 class="box-title">Driver : </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn waves-effect waves-light btn-box-tool" data-content="Edit" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-pencil"></i></button>
                <button type="button" class="btn waves-effect waves-light btn-box-tool" data-widget="collapse" data-content="Sembunyikan" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <!-- box-body -->
            <div class="box-body table-responsive no-padding">
              <table class="table  table-hover ">
                <tbody>
                  <tr>
                    <th>Driver</th>
                    <td>Supeno</td>
                  </tr>
                  <tr>
                    <th>No. Telepon</th>
                    <td>0838-4856-2152</td>
                  </tr>
                  <tr>
                    <th>Alamat</th>
                    <td>Jl. Raya Maju Mundur, Mundur, Maju.</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </section>
        <!--/.column -->
        <!-- column -->
        <section class="col-lg-6 connectedSortable ui-sortable">
          <div class="box box-navy">
            <!-- box-header -->
            <div class="box-header with-border ui-sortable-handle" style="cursor: move;">
              <h3 class="box-title">Order : </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn waves-effect waves-light btn-box-tool" data-content="Edit" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-pencil"></i></button>
                <button type="button" class="btn waves-effect waves-light btn-box-tool" data-widget="collapse" data-content="Sembunyikan" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <!-- box-body -->
            <div class="box-body table-responsive no-padding">
              <table class="table  table-hover ">
                <tbody>
                  <tr>
                    <th>Pool</th>
                    <td>Juanda</td>
                  </tr>
                  <tr>
                    <th>Mitra</th>
                    <td>Okkarent</td>
                  </tr>
                  <tr>
                    <th>Harga</th>
                    <td>Rp. 800.000 ,-</td>
                  </tr>
                  <tr>
                    <th>Paket Sewa</th>
                    <td>Layanan</td>
                  </tr>
                  <tr>
                    <th>Paket Layanan</th>
                    <td>Mobil Driver + BBM</td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td>Sopir dan mobil ga boleh bau rokok</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="box box-navy">
            <!-- box-header -->
            <div class="box-header with-border ui-sortable-handle" style="cursor: move;">
              <h3 class="box-title">Pembayaran : </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn waves-effect waves-light btn-box-tool" data-content="Edit" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-pencil"></i></button>
                <button type="button" class="btn waves-effect waves-light btn-box-tool" data-widget="collapse" data-content="Sembunyikan" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <!-- box-body -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover ">
                <tbody>
                  <tr>
                    <th>No.</th>
                    <th>Waktu</th>
                    <th>Metode</th>
                    <th>Agen</th>
                    <th>Nominal</th>
                    <th class="center">Status</th>
                    <th class="center">Aksi</th>
                  </tr>
                  <tr>
                    <td>#1</th>
                    <td>25-07-2020 - 18:00</td>
                    <td>Tunai</td>
                    <td>Novi</td>
                    <td><b>Rp. 500.000,-</b></td>
                    <td class="center"><span class="label bg-green">Telah dikonfirmasi</span></td>
                    <td style="text-align:center;">
                      <span data-toggle="modal" data-target="#modal-detail-uang-muka">
                        <button type="button" class="btn waves-effect waves-light btn-teal btn-sm" data-content="Lihat" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-eye"></i></button>
                      </span>
                      <button type="button" class="btn waves-effect waves-light btn-navy btn-sm" data-content="Print uang muka" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-print"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>#2</td>
                    <td>25-07-2020 - 18:00</td>
                    <td>Transfer</td>
                    <td>Novi</td>
                    <td><b>Rp. 200.00,-</b></td>
                    <td class="center"><span class="label bg-red">Belum dikonfirmasi</span></td>
                    <td class="center">
                      <span data-toggle="modal" data-target="#modal-detail-uang-muka">
                        <button type="button" class="btn waves-effect waves-light btn-teal btn-sm" data-content="Lihat" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-eye"></i></button>
                      </span>
                      <span data-toggle="modal" data-target="#modal-konfirmasi-uang-muka">
                        <button type="button" class="btn waves-effect waves-light btn-green btn-sm" data-content="Konfirmasi uang muka" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-check"></i></button>
                      </span>
                      <button type="button" class="btn waves-effect waves-light btn-navy btn-sm" data-content="Print uang muka" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-print"></i></button>
                    </td>
                  </tr>
                </tbody>
                </tfoot>
                  <tr>
                    <th colspan="4">Total pembayaran</th>
                    <th colspan="3">Rp. 700.000,-</td>
                  </tr>
                  <tr>
                    <th colspan="4">Pelunasan</th>
                    <th colspan="3">Rp. 0,-</td>
                  </tr>
                  <tr>
                    <th colspan="4">Tagihan</th>
                    <th colspan="3">Rp. 100.000,-</td>
                  </tr>
                  <tr>
                    <th colspan="4">Status</th>
                    <th colspan="3"><span class="label bg-red">Belum Lunas</span></td>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="box box-navy">
            <!-- box-header -->
            <div class="box-header with-border ui-sortable-handle" style="cursor: move;">
              <h3 class="box-title">Kendaraan : </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn waves-effect waves-light btn-box-tool" data-content="Edit" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-pencil"></i></button>
                <button type="button" class="btn waves-effect waves-light btn-box-tool" data-widget="collapse" data-content="Sembunyikan" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <!-- box-body -->
            <div class="box-body table-responsive no-padding">
              <table class="table  table-hover ">
                <tbody>
                  <tr>
                    <th>Plat nomor</th>
                    <td>L 9986 JN</td>
                  </tr>
                  <tr>
                    <th>Tipe Mobil</th>
                    <td>Avanza All New</td>
                  </tr>
                  <tr>
                    <th>Merk</th>
                    <td>Daihatsu</td>
                  </tr>
                  <tr>
                    <th>Warna</th>
                    <td><span class="color bg-blue" data-content="Biru" data-toggle="popover" data-trigger="hover" data-placement="top"></span></td>
                  </tr>
                  <tr>
                    <th>Penumpang</th>
                    <td>7 Orang</td>
                  </tr>
                  <tr>
                    <th>Karaoke</th>
                    <td>Tersedia</td>
                  </tr>
                  <tr>
                    <th>TV</th>
                    <td>Tersedia</td>
                  </tr>
                  <tr>
                    <th>Pendingin (AC)</th>
                    <td>Single Blower</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </section>
        <!--/.column -->
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
<script src="../assets/style/main.js" ></script>
<script>
  $(document).ready(function(){
    $('.select2').select2({
      theme: "material",
      allowClear: true
    });
    $('[data-toggle="popover"]').popover();
  });
</script>
</body>
</html>
