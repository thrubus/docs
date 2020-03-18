<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thrubus | Pembiayaan Bengkel</title>
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
      <h1>Pembiayaan bengkel</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Order</a></li>
        <li class="active">Pembiayaan bengkel</li>
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
              <h3 class="box-title">Pembiayaan bengkel : </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn waves-effect waves-light btn-box-tool" data-content="Edit" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-pencil"></i></button>
                <button type="button" class="btn waves-effect waves-light btn-box-tool" data-widget="collapse" data-content="Sembunyikan" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <!-- box-body -->
            <div class="box-body table-responsive no-padding">
              <table id="pembiayaan-bengkel" class="table table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Waktu</th>
                    <th>Item</th>
                    <th>Jumlah</th>
                    <th>Nopol</th>
                    <th>Montir</th>
                    <th>Pengajuan dana</th>
                    <th>Status</th>
                    <th>Pemroses</th>
                    <th>Penyelesai</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</th>
                    <td>25-07-2020 - 18:00</td>
                    <td>Oli samping</td>
                    <td>1 Kaleng</td>
                    <td>L 8786 KN</td>
                    <td>Yono</td>
                    <td><b>Rp. 500.000,-</b></td>
                    <td><span class="label bg-red">Menunggu konfirmasi</span></td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                      <a href="detail-pemesanan.php?params=booking" class="btn waves-effect waves-light btn-teal btn-sm" data-content="Lihat" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-eye"></i></a>
                      <a href="detail-pemesanan.php?params=booking" class="btn waves-effect waves-light btn-orange btn-sm" data-content="Konfirmasi" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-arrow-right"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>25-07-2020 - 18:00</td>
                    <td>Ban</td>
                    <td>2 Biji</td>
                    <td>L 8786 KN</td>
                    <td>Yono</td>
                    <td><b>Rp. 200.000,-</b></td>
                    <td><span class="label bg-aqua">Proses pembelian</span></td>
                    <td>Arif</td>
                    <td>-</td>
                    <td>
                      <a href="detail-pemesanan.php?params=booking" class="btn waves-effect waves-light btn-teal btn-sm" data-content="Lihat" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-eye"></i></a>
                      <button type="button" class="btn waves-effect waves-light btn-green btn-sm" data-content="Selesaikan" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-check"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>25-07-2020 - 18:00</td>
                    <td>Baut</td>
                    <td>10 Biji</td>
                    <td>L 8786 KN</td>
                    <td>Yono</td>
                    <td><b>Rp. 200.000,-</b></td>
                    <td><span class="label bg-green">Selesai</span></td>
                    <td>Arif</td>
                    <td>Arif</td>
                    <td>
                      <a href="detail-pemesanan.php?params=booking" class="btn waves-effect waves-light btn-teal btn-sm" data-content="Lihat" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-eye"></i></a>
                      <button type="button" class="btn waves-effect waves-light btn-navy btn-sm" data-content="Print uang muka" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-print"></i></button>
                    </td>
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
    $('#pembiayaan-bengkel').DataTable({
      'paging'      : true,
      "language": {
        "paginate": {
          "next": "Selanjutnya",
          "previous": "Sebelumnya"
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
