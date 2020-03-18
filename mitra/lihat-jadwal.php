<?php

function generateRandomString($length = 10) {
  $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}
function generateRandomNumber($length = 10) {
  $characters = '0123456789';
  $charactersLength = strlen($characters);
  $randomNumber = '';
  for ($i = 0; $i < $length; $i++) {
      $randomNumber .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomNumber;
}

$arr = [
  'telepon-masuk' => [
    'button' => ''
  ],
  'booking' => [
    'button' => ''
  ],
  'terjadwal' => [
    'button' => ''
  ],
  'proses' => [
    'button' => ''
  ],
  'close' => [
    'button' => ''
  ],
  'cancel' => [
    'button' => ''
  ],
  'kadaluarsa' => [
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
  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/adminlte-2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/adminlte-2/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/adminlte-2/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../assets/adminlte-2/bower_components/select2/dist/css/select2.min.css">
  
  <!-- Google Font -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->

  <link rel="stylesheet/less" type="text/css" href="../assets/style/main.less" />
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
        Orders
        <small>13 new orders</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Orders</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-2">
          <a href="tambah-order.php" class="btn waves-effect waves-light btn-navy btn-block margin-bottom"><i class="fa fa-phone-square"></i> Tambah Order</a>

          <div class="box box-navy">
            <div class="box-header with-border">
              <h3 class="box-title">Orders</h3>

              <div class="box-tools">
                <button type="button" class="btn waves-effect waves-light btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li class="<?= $retVal = ($_GET['params'] == 'semua') ? 'bg-danger' : '' ; ?>"><a href="http://demo.okkarent.id/mitra/lihat-jadwal.php?params=semua"><i class="fa fa-phone-square"></i> Semua
                  <span class="label label-default pull-right">1.902</span></a></li>
                <li class="<?= $retVal = ($_GET['params'] == 'telepon-masuk') ? 'bg-danger' : '' ; ?>"><a href="lihat-jadwal.php?params=telepon-masuk"><i class="fa fa-phone-square text-purple"></i> Telp. masuk
                  <span class="label bg-purple pull-right">490</span></a></li>
                <li class="<?= $retVal = ($_GET['params'] == 'booking') ? 'bg-danger' : '' ; ?>"><a href="lihat-jadwal.php?params=booking"><i class="fa fa-book text-orange"></i> Booking
                  <span class="label label-warning pull-right">54</span></a></li>
                <li class="<?= $retVal = ($_GET['params'] == 'terjadwal') ? 'bg-danger' : '' ; ?>"><a href="lihat-jadwal.php?params=terjadwal"><i class="fa fa-calendar text-primary"></i> Terjadwal
                  <span class="label label-primary pull-right">32</span></a></li>
                <li class="<?= $retVal = ($_GET['params'] == 'proses') ? 'bg-danger' : '' ; ?>"><a href="lihat-jadwal.php?params=proses"><i class="fa fa-tasks text-aqua"></i> Proses
                  <span class="label bg-aqua pull-right">32</span></a></li>
                <li class="<?= $retVal = ($_GET['params'] == 'close') ? 'bg-danger' : '' ; ?>"><a href="lihat-jadwal.php?params=close"><i class="fa fa-flag text-lime"></i> Close
                  <span class="label bg-lime pull-right">765</span></a></li>
                <li class="<?= $retVal = ($_GET['params'] == 'cancel') ? 'bg-danger' : '' ; ?>"><a href="lihat-jadwal.php?params=cancel"><i class="fa fa-times text-red"></i> Cancel
                  <span class="label label-danger pull-right">34</span></a></li>
                <li class="<?= $retVal = ($_GET['params'] == 'kadaluarsa') ? 'bg-danger' : '' ; ?>"><a href="lihat-jadwal.php?params=kadaluarsa"><i class="fa fa-times text-navy"></i> Expired
                  <span class="label bg-navy pull-right">34</span></a></li>
                <li class="<?= $retVal = ($_GET['params'] == 'ready') ? 'bg-danger' : '' ; ?>"><a href="lihat-jadwal.php?params=ready"><i class="fa fa-toggle-on text-green"></i> Ready
                  <span class="label label-success pull-right">490</span></a></li>
                <li class="<?= $retVal = ($_GET['params'] == 'off') ? 'bg-danger' : '' ; ?>"><a href="lihat-jadwal.php?params=off"><i class="fa  fa-toggle-off"></i> Off
                  <span class="label label-default pull-right">54</span></a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-10">
          <div class="box box-navy">
            <div class="box-header with-border">
              <h3 class="box-title"><?= str_replace('-', ' ', $_GET['params']) ?> : </h3>
              <div class="box-tools">
                <button type="button" class="btn waves-effect waves-light btn-navy btn-sm" data-toggle="modal" data-target="#modal-filter-lihat-order"><i class="fa fa-sort-alpha-desc"></i> Filter</button>
              <a href="button" class="btn waves-effect waves-light btn-navy btn-sm"><i class="fa fa-shopping-cart"></i> Lihat Order</a>
              <a href="s/dhtmlx/samples/06_timeline/13_full_month_scale.html" class="btn waves-effect waves-light btn-navy btn-sm"><i class="fa fa-table"></i> Lihat Jadwal</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="lihat-jadwal" class="table table-hover">
                  <thead>
                  <tr>
                    <?php
                      if( isset($_GET['params']) ){
                        if( $_GET['params'] == 'telepon-masuk' ){
                          echo '';
                        }else{
                          echo '<th>Invoice</th>';
                        }
                      }else{
                        echo '';
                      }
                    ?>
                    <th>Agen</th>
                    <th>Mulai</th>
                    <th>Selesai</th>
                    <th>Customer</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <?php for ($i=0; $i < 30; $i++) : ?>
                    <?php
                      if( isset($_GET['params']) ){
                        if( $_GET['params'] == 'telepon-masuk' ){
                          echo '';
                        }else{
                          echo '<td><a href="read-mail.html">' . generateRandomString() . '</a></td>';
                        }
                      }else{
                        echo '';
                      }
                    ?>
                    <td>Novi</td>
                    <td>20 November 2020 - 12:30</td>
                    <td>21 November 2020 - 18:30</td>
                    <td><b>Zeno</b> +628<?= generateRandomNumber(10) ?></td>
                    <td><b>Rp. </b> 2.<?= generateRandomNumber(3) ?>.<?= generateRandomNumber(3) ?></td>
                    <td>
                      <a href="detail-pemesanan.php?params=<?= $_GET['params'] ?>" class="btn waves-effect waves-light btn-teal btn-sm" data-content="Lihat" data-toggle="popover" data-trigger="hover" data-placement="top"><i class="fa fa-eye"></i></a>
                      <?= $arr[$_GET['params']]['button'] ?>
                    </td>
                  </tr>
                  <?php endfor ?>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.responsif -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
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
  <?php include 'filter-lihat-order.php' ?>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../assets/adminlte-2/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../assets/adminlte-2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/adminlte-2/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- DataTables -->
<script src="../assets/adminlte-2/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/adminlte-2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="../assets/adminlte-2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../assets/adminlte-2/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/adminlte-2/dist/js/adminlte.min.js"></script>
<!-- Page Script -->

<!-- AdminLTE for demo purposes -->
<script src="../assets/adminlte-2/dist/js/demo.js"></script>
<script src="../assets/style/main.js" ></script>
<script>
$(document).ready(function(){
    $('#lihat-jadwal').DataTable({
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
    $('.select2').select2({
      theme: "material",
      allowClear: true
    });
    $('[data-toggle="popover"]').popover();   
});
</script>
</body>
</html>
