<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thrubus | Tambah Tipe Mobil</title>
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
        Tambah Tipe Mobil
        <small>Okkarent</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Mobil</a></li>
        <li class="active">Tambah Tipe Mobil</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-navy">
              <div class="box-header with-border">
                <h3 class="box-title">Form Tambah Tipe Mobil</h3>
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
                        <option selected="selected">Mobil</option>
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
                      <input type="text" class="form-field" placeholder="Tipe Mobil" name="tipe-mobil" id='tipe-mobil' required />
                      <span for="tipe-mobil" class="form-label-icon-right"><i class="fa fa-car"></i></span>
                      <label for="tipe-mobil" class="form-label-float">Tipe Mobil</label>
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
                  <div class="col-md-2">
                    <label>Tipe AC (Air Conditioner) :</label>
                    <div class="checkbox">
                      <input type="checkbox" id="double-blower" style="display: none;">
                      <label for="double-blower" class="check">
                        <div class="svg-checkbox">Double Blower</div>
                      </label>
                      <br><br>
                      <input type="checkbox" id="ducting" style="display: none;">
                      <label for="ducting" class="check">
                        <div class="svg-checkbox">Ducting</div>
                      </label>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>Karaoke :</label>
                    <div class="radio">
                      <label for="karaoke-tersedia" class="btn-radio">
                        <input type="radio" id="karaoke-tersedia" name="karaoke">
                        <div class="svg-radio"></div>
                        <span>Tersedia</span>
                      </label>
                      <br><br>
                      <label for="karaoke-tidak-tersedia" class="btn-radio">
                        <input type="radio" id="karaoke-tidak-tersedia" name="karaoke">
                        <div class="svg-radio"></div>
                        <span>Tidak Tersedia</span>
                      </label>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>Tv :</label>
                    <div class="radio">
                      <label for="tv-tersedia" class="btn-radio">
                        <input type="radio" id="tv-tersedia" name="tv">
                        <div class="svg-radio"></div>
                        <span>Tersedia</span>
                      </label>
                      <br><br>
                      <label for="tv-tidak-tersedia" class="btn-radio">
                        <input type="radio" id="tv-tidak-tersedia" name="tv">
                        <div class="svg-radio"></div>
                        <span>Tidak Tersedia</span>
                      </label>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>Toilet :</label>
                    <div class="radio">
                      <label for="toilet-tersedia" class="btn-radio">
                        <input type="radio" id="toilet-tersedia" name="toilet">
                        <div class="svg-radio"></div>
                        <span>Tersedia</span>
                      </label>
                      <br><br>
                      <label for="toilet-tidak-tersedia" class="btn-radio">
                        <input type="radio" id="toilet-tidak-tersedia" name="toilet">
                        <div class="svg-radio"></div>
                        <span>Tidak Tersedia</span>
                      </label>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>Smooking Area :</label>
                    <div class="radio">
                      <label for="smooking-area-tersedia" class="btn-radio">
                        <input type="radio" id="smooking-area-tersedia" name="smooking-area">
                        <div class="svg-radio"></div>
                        <span>Tersedia</span>
                      </label>
                      <br><br>
                      <label for="smooking-area-tidak-tersedia" class="btn-radio">
                        <input type="radio" id="smooking-area-tidak-tersedia" name="smooking-area">
                        <div class="svg-radio"></div>
                        <span>Tidak Tersedia</span>
                      </label>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>WIFI :</label>
                    <div class="radio">
                      <label for="wifi-tersedia" class="btn-radio">
                        <input type="radio" id="wifi-tersedia" name="wifi">
                        <div class="svg-radio"></div>
                        <span>Tersedia</span>
                      </label>
                      <br><br>
                      <label for="wifi-tidak-tersedia" class="btn-radio">
                        <input type="radio" id="wifi-tidak-tersedia" name="wifi">
                        <div class="svg-radio"></div>
                        <span>Tidak Tersedia</span>
                      </label>
                    </div>
                  </div>
                </div>
                <!-- /.row -->

                <!-- row -->
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" class="form-field" placeholder="Masa berlaku KIR" name="masa-berlaku-kir" id='masa-berlaku-kir' required />
                      <span for="masa-berlaku-kir" class="form-label-icon-right"><i class="fa fa-calendar"></i></span>
                      <label for="masa-berlaku-kir" class="form-label-float">Masa berlaku KIR</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <!-- warna -->
                    <div class="form-group">
                      <input type="text" class="form-field" placeholder="Warna" name="warna" id='warna' required />
                      <span for="warna" class="form-label-icon-right"><i class="fa fa-tint text-aqua"></i></span>
                      <label for="warna" class="form-label-float">Warna</label>
                    </div>
                    <!-- /.warna -->
                  </div>
                  <div class="col-md-4">
                    <!-- Range Penumpang -->
                    <div class="form-group">
                      <label class="form-label">Range Penumpang :</label>
                      <div class="input-group">
                        <input type="text" value="" class="slider form-control" data-slider-min="4" data-slider-max="60" data-slider-step="1" data-slider-value="[30,50]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="red">
                      </div>
                    </div>
                    <!-- /.Range Penumpang -->
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
                <button type="submit" class="btn waves-effect waves-light btn-dark-gray"><i class="fa fa-times"></i> Batal</button>
                <button type="submit" class="btn waves-effect waves-light btn-green pull-right"><i class="fa fa-check"></i> Simpan</button>
              </div>
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
