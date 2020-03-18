<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thrubus | Tambah Tipe Box</title>
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
        Tambah Tipe Box
        <small>Okkarent</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Mobil</a></li>
        <li class="active">Tambah Tipe Box</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-navy">
            <form>
              <div class="box-header with-border">
                <h3 class="box-title">Form Tambah Tipe Box</h3>
              </div>
              <div class="box-body">
                <!-- row -->
                <div class="row no-padding">
                  <!-- col-md-6 -->
                  <div class="col-md-6">
                    <!-- Kategori -->
                    <div class="form-group">
                      <label class="form-label">Kategori Mobil : </label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Box</option>
                        <option>Regular</option>
                        <option>Premium</option>
                      </select>
                    </div>
                    <!-- /.Kategori -->
                  </div>
                  <!-- /.col-md-6 -->
                  <!-- col-md-6 -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-field" placeholder="Tipe Box" name="tipe-box" id='tipe-box' required />
                      <span for="tipe-box" class="form-label-icon-right"><i class="fa fa-car"></i></span>
                      <label for="tipe-box" class="form-label-float">Tipe Box</label>
                    </div>
                  </div>
                  <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
                <div class="row no-padding">
                  
                  <!-- col-md-6 -->
                  <div class="col-md-6">
                    <!-- Merk mobil -->
                    <div class="form-group">
                      <label class="form-label">Merk Mobil : </label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Toyota</option>
                        <option>Daihatsu</option>
                        <option>Datsun</option>
                        <option>Big Bus</option>
                      </select>
                    </div>
                    <!-- /.Merk mobil -->
                  </div>
                  <!-- /.col-md-6 -->
                  <!-- col-md-6 -->
                  <div class="col-md-6">
                    <!-- Bahan Bakar -->
                    <div class="form-group">
                      <label class="form-label">Bahan Bakar : </label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Premium</option>
                        <option>Solar</option>
                        <option>Pertamax</option>
                        <option>Pertalite</option>
                      </select>
                    </div>
                    <!-- /.Bahan Bakar -->
                  </div>
                  <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
                
                <!-- row -->
                <div class="row no-padding">
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="number" class="form-field" placeholder="Tonase / Berat Muatan" name="tonase" id='tonase' required />
                      <label for="tonase" class="form-label-float">Tonase / Berat Muatan</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="number" class="form-field" placeholder="Lebar Box" name="lebar-box" id='lebar-box' required />
                      <label for="lebar-box" class="form-label-float">Lebar Box</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="number" class="form-field" placeholder="Tinggi Box" name="tinggi-box" id='tinggi-box' required />
                      <label for="tinggi-box" class="form-label-float">Tinggi Box</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="number" class="form-field" placeholder="Panjang Box" name="panjang-box" id='panjang-box' required />
                      <label for="panjang-box" class="form-label-float">Panjang Box</label>
                    </div>
                  </div>
                </div>
                <!-- /.row -->

                <!-- row -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-field" placeholder="Masa berlaku KIR" name="masa-berlaku-kir" id='masa-berlaku-kir' required />
                      <span for="masa-berlaku-kir" class="form-label-icon-right"><i class="fa fa-calendar"></i></span>
                      <label for="masa-berlaku-kir" class="form-label-float">Masa berlaku KIR</label>
                    </div>
                  </div>
                </div>
                <!-- /.row -->
                <!-- row -->
                <div class="row no-padding">
                  <div class="col-md-12">
                    <!-- Spesifikasi Tambahan -->
                    <div class="form-group">
                      <textarea type="text" class="form-field" placeholder="Spesifikasi Tambahan" name="spesifikasi-tambahan" id='spesifikasi-tambahan' required></textarea>
                      <label for="spesifikasi-tambahan" class="form-label-float">Spesifikasi Tambahan</label>
                    </div>
                    <!-- /.Spesifikasi Tambahan -->
                  </div>
                </div>
                <!-- /.row -->
                <!-- row -->
                <div class="row">
                  <label style="margin-left: 14px;">Foto Kendaraan</label>
                  <div class="form-group">
                    <?php
                    $array = ['depan', 'belakang', 'samping kiri', 'samping kanan', 'dalam'];
                    for ($i=0; $i < 5; $i++) { ?>
                      <div class="col-md-2">
                        <div class="img-attachments">
                          <span class="img-attachment-icon"><i class="fa fa-file-image-o"></i></span>
                          <div class="img-attachment-info">
                            <a href="#" class="img-attachment-name"><i class="fa fa-paperclip"></i> Tampak <?= $array[$i] ?></a>
                                <span class="img-attachment-size">
                                  Maks. 1.5 MB
                                  <a href="#" class="btn waves-effect waves-light btn-default btn-xs pull-right"><i class="fa fa-upload"></i></a>
                                </span>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="clear" class="btn waves-effect waves-light btn-dark-gray"><i class="fa fa-times"></i> Batal</button>
                <button type="submit" class="btn waves-effect waves-light btn-green pull-right"><i class="fa fa-check"></i> Simpan</button>
              </div>
            </div>
          </form>
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
