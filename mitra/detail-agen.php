<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thrubus | Detail Agen</title>
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

  <link rel="stylesheet/less" type="text/css" href="../assets/style/main.less" />
  <script src="../assets/style/less.min.js" ></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <!-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
</head>
<body class="hold-transition skin-black-light sidebar-mini">
<div class="wrapper">

  <?php include 'header.php' ?>
  
  <?php include 'sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Agen
        <small>Okkarent</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Okkarent</a></li>
        <li><a href="#">Agen</a></li>
        <li class="active">Detail Agen</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- col -->
        <div class="col-md-3">
          <!-- box -->
          <div class="box box-navy">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="agen.jpg" alt="User profile picture">

                <h3 class="profile-username text-center">Nella Henny</h3>

                <p class="text-muted text-center">Agen</p>

                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>Status</b> <span class="badge bg-green pull-right">Aktif</span>
                  </li>
                  <li class="list-group-item">
                    <b>Bergabung Mulai</b> <a class="pull-right">10 November 2019</a>
                  </li>
                  <li class="list-group-item">
                    <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>
                    <p class="text-muted">
                      Jl. Raya Gunung Anyar Jaya No. 4-7, Surabaya.
                    </p>
                  </li>
                </ul>
                <strong><i class="fa fa-tablet margin-r-5"></i> No. telepon</strong>
                <p class="text-muted">
                  <a href="#">+62 838 4455 1125</a>
                </p>

                <!-- <a href="#" class="btn waves-effect waves-light btn-navy btn-block"><b>Follow</b></a> -->
              </div>
          </div>
          <!-- /.box -->
          <!-- box -->
          <div class="box box-navy">
            <!-- /.box-header -->
            <div class="box-header with-border">
              <h3 class="box-title">Kinerja Bulanan</h3>
            </div>
            <!-- /.box-header -->
            <!-- /.box-body -->
            <div class="box-body">
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b><i class="fa fa-phone-square text-purple margin-r-5"></i>Telepon Masuk</b>
                  <a class="pull-right"><span class="label bg-purple pull-right">490</span></a>
                </li>
                <li class="list-group-item">
                  <b><i class="fa fa-book text-aqua margin-r-5"></i>Booking</b>
                  <a class="pull-right"><span class="label label-info pull-right">66</span></a>
                </li>
                <li class="list-group-item">
                  <b><i class="fa fa-book text-primary margin-r-5"></i>Terjadwal</b>
                  <a class="pull-right"><span class="label label-primary pull-right">77</span></a>
                </li>
                <li class="list-group-item">
                  <b><i class="fa fa-book text-teal margin-r-5"></i>Proses</b>
                  <a class="pull-right"><span class="label bg-teal pull-right">44</span></a>
                </li>
                <li class="list-group-item">
                  <b><i class="fa fa-flag text-navy margin-r-5"></i>Close</b>
                  <a class="pull-right"><span class="label bg-navy pull-right">33</span></a>
                </li>
                <li class="list-group-item">
                  <b><i class="fa fa-times text-danger margin-r-5"></i>Cancel</b>
                  <a class="pull-right"><span class="label label-danger pull-right">22</span></a>
                </li>
                <li class="list-group-item">
                  <b>Target</b>
                  <p class="pull-right"><span class="label bg-navy pull-right">Rp. 5.000.000</span></p>
                </li>
                <li class="list-group-item">
                  <b>Pencapaian</b>
                  <p class="pull-right"><span class="label label-success pull-right">Rp. 2.000.000</span></p>
                </li>
                <li class="list-group-item">
                  <b>Kurang</b>
                  <p class="pull-right"><span class="label label-danger pull-right">Rp. 3.000.000</span></p>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#order-terbaru" data-toggle="tab" aria-expanded="true">Order Terbaru</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="order-terbaru">
                <!-- order terbaru -->
                <div class="table-responsive">
                  <table class="table no-margin">
                    <thead>
                    <tr>
                      <th>Invoice</th>
                      <th>Plat Nomor</th>
                      <th>Status</th>
                      <th>Harga</th>
                      <th>Waktu</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php for ($i=0; $i < 7; $i++) { ?>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                        <td>L 6565 GG</td>
                        <td><span class="label label-info">Booking</span></td>
                        <td><b>Rp. </b>500.000 ,-</td>
                        <td>9 Januari 2020 | 12:30</td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                        <td>W 6757 HB</td>
                        <td><span class="label bg-teal">Proses</span></td>
                        <td><b>Rp. </b>700.000 ,-</td>
                        <td>10 Januari 2020 | 12:30</td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                        <td>L 6677 BH</td>
                        <td><span class="label label-danger">Cancel</span></td>
                        <td><b>Rp. </b>600.000 ,-</td>
                        <td>11 Januari 2020 | 12:30</td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.order terbaru -->

                
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

  <?php include 'control-sidebar.php' ?>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../assets/adminlte-2/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../assets/adminlte-2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../assets/adminlte-2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../assets/adminlte-2/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/adminlte-2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/adminlte-2/dist/js/demo.js"></script>
<script src="../assets/style/main.js" ></script>
<!-- page script -->
</body>
</html>
