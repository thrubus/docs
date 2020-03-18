<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thrubus | Lihat Saldo</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/adminlte-2/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/adminlte-2/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/adminlte-2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
      <h1>Lihat Saldo</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Order</a></li>
        <li class="active">Lihat Saldo</li>
      </ol>
    </section>

    <!-- Main content -->
    <!-- section content -->
    <section class="content">
      <div class="row">
        <!-- column -->
        <section class="col-lg-12 connectedSortable ui-sortable">
          <div class="box box-navy">
            <!-- box-header -->
            <div class="box-header with-border ui-sortable-handle" style="cursor: move;">
              <h3 class="box-title">Total saldo awal : <b>Rp. 60.000.000,-</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn waves-effect waves-light btn-box-tool" data-content="Filter" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-search"></i></button>
                <button type="button" class="btn waves-effect waves-light btn-box-tool" data-widget="collapse" data-content="Sembunyikan" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <!-- box-body -->
            <div class="box-body table-responsive no-padding">
              <table id="lihat-saldo" class="table table-hover table-bordered tdcenter thcenter">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Keterangan</th>
                    <th>Waktu</th>
                    <th>Keluar</th>
                    <th>Masuk</th>
                    <th>Saldo</th>
                    <th>Detail</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>Awal</td>
                    <td>25-07-2020 - 18:00</td>
                    <td>-</td>
                    <td>-</td>
                    <td>Rp. 60.00.000,-</td>
                    <td><button type="button" class="btn waves-effect waves-light btn-teal btn-sm" data-content="Lihat" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-eye"></i></button></td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Dp tunai order invoice <a>Gs6V6t8</a></td>
                    <td>25-07-2020 - 19:00</td>
                    <td>-</td>
                    <td>Rp. 500.000,-</td>
                    <td>Rp. 60.500.000,-</td>
                    <td><button type="button" class="btn waves-effect waves-light btn-teal btn-sm" data-content="Lihat" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-eye"></i></button></td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>Kasbon order invoice <a>Gs6V6t8</a></td>
                    <td>25-07-2020 - 19:10</td>
                    <td>Rp. 200.000,-</td>
                    <td>-</td>
                    <td>Rp. 60.300.000,-</td>
                    <td><button type="button" class="btn waves-effect waves-light btn-teal btn-sm" data-content="Lihat" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-eye"></i></button></td>
                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>Pelunasan order invoice <a>Gs6V6t8</a></td>
                    <td>25-07-2020 - 19:10</td>
                    <td>-</td>
                    <td>Rp. 12.000.000,-</td>
                    <td>Rp. 61.500.000,-</td>
                    <td><button type="button" class="btn waves-effect waves-light btn-teal btn-sm" data-content="Lihat" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-eye"></i></button></td>
                  </tr>
                  <tr>
                    <td>5.</td>
                    <td>Pembelian sparepart ban invoice <a>jhabsv75</a></td>
                    <td>25-07-2020 - 19:50</td>
                    <td>Rp. 800.000,-</td>
                    <td>-</td>
                    <td>Rp. 60.700.000,-</td>
                    <td><button type="button" class="btn waves-effect waves-light btn-teal btn-sm" data-content="Lihat" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-eye"></i></button></td>
                  </tr>
                </tbody>
                </tfoot>
                  <tr>
                    <th>Total</th>
                    <th colspan="2"></th>
                    <th>Rp. 1.000.000,-</td>
                    <th>Rp. 1.700.000,-</td>
                    <th>Rp. 60.700.000,-</td>
                  </tr>
                </tfoot>
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
<!-- DataTables -->
<script src="../assets/adminlte-2/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/adminlte-2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../assets/adminlte-2/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/adminlte-2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/adminlte-2/dist/js/demo.js"></script>
<script src="../assets/style/main.js" ></script>
<script>
  $(document).ready(function(){
    $('#lihat-saldo').DataTable({
      'paging' : true,
      'language': {
        'paginate': {
          'next': 'Selanjutnya',
          'previous': 'Sebelumnya'
        }
      },
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
    $('[data-toggle="popover"]').popover();
  });
</script>
</body>
</html>
