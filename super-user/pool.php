<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thrubus | Pool</title>
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" rel="stylesheet"> -->
  <!-- less -->
  <link href="../assets/style/main.less" rel="stylesheet/less" type="text/css" />
  <script src="../assets/style/less.min.js" ></script>
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
        Pool
        <small>Okkarent</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Okkarent</a></li>
        <li><a href="#">Agen</a></li>
        <li class="active">Pool</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-navy">
            <div class="box-header">
              <h3 class="box-title">Pool</h3>
              <div class="box-tools">
                <button type="button" class="btn waves-effect waves-light btn-navy btn-sm" data-toggle="modal" data-target="#modal-tambah-pengaturan-harga">
                  <i class="fa fa-plus"></i> Tambah Pool
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="pool" class="table table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th class="center">Status</th>
                    <th class="center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>Bandar Udara Internasional Jawa Barat, Kertajati, Kabupaten Majalengka, Jawa Barat 45457, Indonesia</td>
                    <td>Kabupaten Majalengka</td>
                    <td class="center">
                      <input type="checkbox" id="toggle-id-1" style="display:none"/>
                      <label for="toggle-id-1" class="toggle svg-check-switch" style="vertical-align:-moz-middle-with-baseline" data-content="Aktifkan" data-toggle="popover" data-trigger="hover" data-placement="top"></label>
                    </td>
                    <td class="center">
                      <span data-toggle="modal" data-target="#modal-detail-pool">
                        <a href="javascript:void(0)" class="btn waves-effect waves-light btn-teal btn-sm" data-content="Lihat" data-toggle="popover" data-trigger="hover" data-placement="top">
                          <i class="fa fa-eye"></i>
                        </a>
                      </span>
                      <span data-toggle="modal" data-target="#modal-edit-pool">
                        <a href="javascript:void(0)" class="btn waves-effect waves-light btn-orange btn-sm" data-content="Edit" data-toggle="popover" data-trigger="hover" data-placement="top">
                          <i class="fa fa-pencil"></i>
                        </a>
                      </span>
                      <span data-toggle="modal" data-target="#modal-hapus-pool">
                        <a href="javascript:void(0)" class="btn waves-effect waves-light btn-red btn-sm" data-content="Hapus" data-toggle="popover" data-trigger="hover" data-placement="top">
                          <i class="fa fa-trash"></i>
                        </a>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Soekarno-Hatta International Airport Terminal 2F, Jl. Husein Sastraneg</td>
                    <td>Kota Tangerang</td>
                    <td class="center">
                      <input type="checkbox" id="toggle-id-2" style="display:none" checked/>
                      <label for="toggle-id-2" class="toggle svg-check-switch" style="vertical-align:-moz-middle-with-baseline" data-content="Non-aktifkan" data-toggle="popover" data-trigger="hover" data-placement="top"></label>
                    </td>
                    <td class="center">
                      <span data-toggle="modal" data-target="#modal-detail-pool">
                        <a href="javascript:void(0)" class="btn waves-effect waves-light btn-teal btn-sm" data-content="Lihat" data-toggle="popover" data-trigger="hover" data-placement="top">
                          <i class="fa fa-eye"></i>
                        </a>
                      </span>
                      <span data-toggle="modal" data-target="#modal-edit-pool">
                        <a href="javascript:void(0)" class="btn waves-effect waves-light btn-orange btn-sm" data-content="Edit" data-toggle="popover" data-trigger="hover" data-placement="top">
                          <i class="fa fa-pencil"></i>
                        </a>
                      </span>
                      <span data-toggle="modal" data-target="#modal-hapus-pool">
                        <a href="javascript:void(0)" class="btn waves-effect waves-light btn-red btn-sm" data-content="Hapus" data-toggle="popover" data-trigger="hover" data-placement="top">
                          <i class="fa fa-trash"></i>
                        </a>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
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
<!-- DataTables -->
<script src="../assets/adminlte-2/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/adminlte-2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
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
<script>
  $(function () {
    $('#pool').DataTable({
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
  })
</script>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
</body>
</html>
