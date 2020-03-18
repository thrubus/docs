<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thrubus | Detail Driver</title>
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
        Detail Driver
        <small>Okkarent</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Okkarent</a></li>
        <li><a href="#">Driver</a></li>
        <li class="active">Detail Driver</li>
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
                <img class="profile-user-img img-responsive img-circle" src="../assets/adminlte-2/dist/img/user1-128x128.jpg" alt="User profile picture">

                <h3 class="profile-username text-center">John Pettruci</h3>

                <p class="text-muted text-center">Driver</p>

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
                  <b>Total trip</b>
                  <p class="pull-right"><span class="label label-success pull-right">7x</span></p>
                </li>
                <li class="list-group-item">
                  <b>Pendapatan</b>
                  <p class="pull-right"><b>Rp. </b>760.000</p>
                </li>
                <li class="list-group-item">
                  <p class="text-center">
                    <b>Rating</b><br>
                    <span class="fa fa-star text-yellow"></span>
                    <span class="fa fa-star text-yellow"></span>
                    <span class="fa fa-star text-yellow"></span>
                    <span class="fa fa-star text-yellow"></span>
                    <span class="fa fa-star-half-o text-yellow"></span><br>
                    <span class="label label-warning">4.5</span>
                  </p>
                  <p class="text-center"><span>254 Ulasan</span></p>
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
              <li class="active"><a href="#jadwal" data-toggle="tab" aria-expanded="true">Jadwal</a></li>
              <li><a href="#riwayat" data-toggle="tab">Riwayat</a></li>
            </ul>
            <div class="tab-content">
              <!-- /.tab-pane -->
              <div class="tab-pane active" id="jadwal">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-navy">
                          Hari ini
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-thumb-tack bg-navy"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><b>Ibu Dewi Customer</b>
                        <a href="#" class="text-success text-sm"><i class="fa fa-whatsapp"></i> +62 838 4412 2236</a>
                      </h3>

                      <div class="timeline-body">
                        <strong><i class="fa fa-map-pin margin-r-5"></i> Penjemputan</strong>
                        <p class="text-muted">
                          <a href="#">Jl. Raya Gunung Anyar Jaya no. 4-7, Surabaya.</a>
                        </p>
                        <strong><i class="fa fa-map-marker margin-r-5"></i> Tujuan #1</strong>
                        <p class="text-muted">
                          <a href="#">Jl. Raya Gunung Anyar Jaya no. 4-7, Malang.</a>
                        </p>
                        <strong><i class="fa fa-map-marker margin-r-5"></i> Tujuan #2</strong>
                        <p class="text-muted">
                          <a href="#">Jl. Raya Gunung Anyar Jaya no. 4-7, Bromo.</a>
                        </p>
                        <strong><i class="fa fa-map-pin margin-r-5"></i> Lokasi Turun</strong>
                        <p class="text-muted">
                          <a href="#">Jl. Raya Gunung Anyar Jaya no. 4-7, Bromo.</a>
                        </p>
                        <strong><i class="fa fa fa-wheelchair margin-r-5"></i> Driver</strong>
                        <p class="text-muted">
                          <a href="#">Suyatno.</a>
                        </p>
                      </div>
                      <div class="timeline-footer">
                        <a class="btn waves-effect waves-light btn-blue btn-xs">Lihat Detail</a>
                        <a class="btn waves-effect waves-light btn-red btn-xs">Complain</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-navy">
                          19 Feb. 2020
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-thumb-tack bg-navy"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 Hari lagi</span>

                      <h3 class="timeline-header"><b>Ibu Eka Customer</b>
                        <a href="#" class="text-success text-sm"><i class="fa fa-whatsapp"></i> +62 812 6666 2236</a>
                      </h3>

                      <div class="timeline-body">
                        <strong><i class="fa fa-map-pin margin-r-5"></i> Penjemputan</strong>
                        <p class="text-muted">
                          <a href="#">Jl. Raya Gunung Anyar Jaya no. 4-7, Surabaya.</a>
                        </p>
                        <strong><i class="fa fa-map-marker margin-r-5"></i> Tujuan #1</strong>
                        <p class="text-muted">
                          <a href="#">Jl. Raya Gunung Anyar Jaya no. 4-7, Malang.</a>
                        </p>
                        <strong><i class="fa fa-map-marker margin-r-5"></i> Tujuan #2</strong>
                        <p class="text-muted">
                          <a href="#">Jl. Raya Gunung Anyar Jaya no. 4-7, Bromo.</a>
                        </p>
                        <strong><i class="fa fa-map-pin margin-r-5"></i> Lokasi Turun</strong>
                        <p class="text-muted">
                          <a href="#">Jl. Raya Gunung Anyar Jaya no. 4-7, Bromo.</a>
                        </p>
                        <strong><i class="fa fa fa-wheelchair margin-r-5"></i> Driver</strong>
                        <p class="text-muted">
                          <a href="#">Suyatno.</a>
                        </p>
                      </div>
                      <div class="timeline-footer">
                        <a class="btn waves-effect waves-light btn-blue btn-xs">Lihat Detail</a>
                        <a class="btn waves-effect waves-light btn-red btn-xs">Complain</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-navy">
                          21 Feb. 2020
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                    <div class="timeline-item" style="background: transparent; border: transparent; margin-top: 4px;">
                      <a class="btn waves-effect waves-light btn-navy btn-xs">Tampilkan Lebih Banyak <i class="fa fa-angle-left"></i></a>
                    </div>
                  </li>
                  <!-- END timeline item -->
                </ul>
              </div>
              <!-- /.tab-pane -->
              <!-- tab pane -->
              <div class="tab-pane" id="riwayat">
                <!-- riwayat -->
                <div class="table-responsive">
                  <table class="table no-margin">
                    <thead>
                    <tr>
                      <th>Invoice</th>
                      <th>Tamu</th>
                      <th>Tanggal Mulai</th>
                      <th>Tanggal Selesai</th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                        <td>Ibu Jessica</td>
                        <td>28 Januari 2020 | 12:30</td>
                        <td>30 Januari 2020 | 12:30</td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                        <td>Bapak Tamrin</td>
                        <td>22 Januari 2020 | 12:30</td>
                        <td>25 Januari 2020 | 12:30</td>
                      </tr>
                      <tr>
                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                        <td>Nona Rike</td>
                        <td>11 Januari 2020 | 12:30</td>
                        <td>16 Januari 2020 | 12:30</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.riwayat -->
              </div>
              <!-- /.tab pane -->
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
