<?php
$data = [
  'Bus' => ['AC / Air conditioner', 'Berlaku KIR', 'Berlaku STNK', 'Berlaku KPS', 'Berlaku pajak', 'Karaoke', 'Tv', 'Toilet', 'Smooking area', 'WIFI', 'Kisaran penumpang', 'Spesifikasi tambahan', 'Foto kendaraan'],
  'Mobil' => ['AC / Air conditioner', 'Berlaku STNK', 'Berlaku pajak', 'Karaoke', 'Tv', 'WIFI', 'Kisaran penumpang', 'Spesifikasi tambahan', 'Foto kendaraan'],
  'Truk' => ['Berlaku STNK', 'Berlaku pajak', 'Panjang box', 'Lebar box', 'Tinggi box', 'Karaoke', 'Tv', 'WIFI', 'Kisaran penumpang', 'Spesifikasi tambahan', 'Foto kendaraan'],
  'Box' => ['Berlaku STNK', 'Berlaku pajak', 'Panjang Box', 'Lebar Box', 'Tinggi Box', 'Karaoke', 'Tv', 'WIFI', 'Kisaran penumpang', 'Spesifikasi tambahan', 'Foto kendaraan'],
]
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thrubus | Jenis Kendaraan: <?= $_GET['q'] ?></title>
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
  <link rel="stylesheet" type="text/css" href="../assets/style/file-upload.css" />
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
        Jenis Kendaraan: <?= $_GET["q"] ?>
        <small>Okkarent</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Mobil</a></li>
        <li class="active">Jenis Kendaraan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-navy">
              <div class="box-header with-border">
                <h3 class="box-title">Check list spesifikasi:</h3>
              </div>
              <div class="box-body">
                <!-- row -->
                <div class="row no-padding">
                  <?php for ($i=0; $i < count($data[$_GET['q']]); $i++) { ?>
                    <div class="col-md-2">
                      <div class="checkbox">
                        <input type="checkbox" id="<?= strtolower( str_replace(' ', '-', $data[$_GET['q']][$i] ) ) ?>" style="display: none;">
                        <label for="<?= strtolower( str_replace(' ', '-', $data[$_GET['q']][$i] ) ) ?>" class="check">
                          <div class="svg-checkbox"><?= $data[$_GET['q']][$i] ?></div>
                        </label>
                      </div>
                    </div>
                  <?php } ?>
                  <form>
                    <div class="col-md-12 p-0">
                      <div class="col-md-4">
                        <div class="form-group">
                          <button type="submit" class="btn waves-effect btn-sm waves-light btn-green pull-right form-label-btn"><i class="fa fa-plus"></i></button>
                          <input type="text" class="form-field" placeholder="Tambah item" name="tambah-item" id='tambah-item' required />
                          <label for="tambah-item" class="form-label-float">Tambah item</label>
                        </div>
                      </div>
                    </div>
                  </form>
                    <!-- <label>Feeling: <input name=f type="text" oninput="check(this)" oninvalid="setCustomValidity('Plz enter on Alphabets ')" onchange="try{setCustomValidity('')}catch(e){}" required></label> -->
                    <!-- <label>Feeling: <input id="isText" name="isText" type="text" pattern="[a-zA-Z]+" oninvalid="setCustomValidity(this.alt)" alt="Silahkan masukkan teks tanpa angka" required></label> -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.box-body -->
            </div>
        </div>
        <!--/.col (right) -->
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
