<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thrubus | Pengaturan Harga</title>
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
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
  <link rel="stylesheet/less" type="text/css" href="../assets/style/main.less" />
  <script src="../assets/style/less.min.js" ></script>

  <style>
  .users-list-name:hover{
    border: 1px gray dotted;
    margin: 0px;
  }
  .users-list-name{
    margin: 0px;
  }
  img{
    width: 40%;
  }
</style>

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
        Pengaturan Harga
        <small>Okkarent</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Order</a></li>
        <li class="active">Pengaturan Harga</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <section class="col-lg-12 connectedSortable ui-sortable">
          <div class="box box-navy">
            <div class="box-header with-border">
              <h3 class="box-title">Atur Harga</h3>
              <div class="box-tools">
                <button type="button" class="btn waves-effect waves-light btn-navy btn-sm" data-toggle="modal" data-target="#modal-tambah-pengaturan-harga">
                  <i class="fa fa-plus"></i> Pengaturan Harga
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Pool</th>
                    <th>Kategori</th>
                    <th>Tipe</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th class="text-center">Presentasi</th>
                    <th class="text-center">Detail</th>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>Bandara Juanda</td>
                    <td>-</td>
                    <td>-</td>
                    <td>10 November 2019 | 12:30</td>
                    <td>20 November 2019 | 12:30</td>
                    <td class="text-center">10%</td>
                    <td class="text-center">
                      <button type="button" class="btn waves-effect waves-light btn-teal btn-sm" data-toggle="modal" data-target="#modal">
                        <i class="fa fa-eye"></i>
                      </button>
                      <button type="button" class="btn waves-effect waves-light btn-orange btn-sm" data-toggle="modal" data-target="#modal">
                        <i class="fa fa-pencil"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Bandara Juanda</td>
                    <td>Regular</td>
                    <td>-</td>
                    <td>11 November 2019 | 12:30</td>
                    <td>21 November 2019 | 12:30</td>
                    <td class="text-center">11%</td>
                    <td class="text-center">
                      <button type="button" class="btn waves-effect waves-light btn-teal btn-sm" data-toggle="modal" data-target="#modal">
                        <i class="fa fa-eye"></i>
                      </button>
                      <button type="button" class="btn waves-effect waves-light btn-orange btn-sm" data-toggle="modal" data-target="#modal">
                        <i class="fa fa-pencil"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>Bandara Juanda</td>
                    <td>-</td>
                    <td>Avanza All New</td>
                    <td>12 November 2019 | 12:30</td>
                    <td>22 November 2019 | 12:30</td>
                    <td class="text-center">12%</td>
                    <td class="text-center">
                      <button type="button" class="btn waves-effect waves-light btn-teal btn-sm" data-toggle="modal" data-target="#modal">
                        <i class="fa fa-eye"></i>
                      </button>
                      <button type="button" class="btn waves-effect waves-light btn-orange btn-sm" data-toggle="modal" data-target="#modal">
                        <i class="fa fa-pencil"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>-</td>
                    <td>Regular</td>
                    <td>Avanza All New</td>
                    <td>13 November 2019 | 12:30</td>
                    <td>23 November 2019 | 12:30</td>
                    <td class="text-center">13%</td>
                    <td class="text-center">
                      <button type="button" class="btn waves-effect waves-light btn-teal btn-sm" data-toggle="modal" data-target="#modal">
                        <i class="fa fa-eye"></i>
                      </button>
                      <button type="button" class="btn waves-effect waves-light btn-orange btn-sm" data-toggle="modal" data-target="#modal">
                        <i class="fa fa-pencil"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </section>
        <!--/.left column -->
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

  <!-- Control Sidebar -->

  <?php include 'control-sidebar.php' ?>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php include 'tambah-pengaturan-harga.php' ?>

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
<script src="../assets/adminlte-2/plugins/seiyria-bootstrap-slider/bootstrap-slider.min.js"></script>
<script>
  $(function () {
    $('.select2').select2({
      theme: "material",
      allowClear: true
    });
    $('.slider').slider();
  });
</script>
</body>
</html>