<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thrubus | Tambah Mobil</title>
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
        Tambah Mobil
        <small>Okkarent</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Mobil</a></li>
        <li class="active">Tambah Kendaraan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- box -->
            <div class="box box-navy">
              <div class="box-header with-border">
                <h3 class="box-title">Form Tambah Kendaraan</h3>
              </div>
              <div class="box-body">
                <!-- row -->
                <div class="row no-padding">
                  <!-- col-md-6 -->
                  <div class="col-md-6">
                    <!-- tipe mobil -->
                    <div class="form-group">
                      <label class="form-label">Tipe Mobil : </label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Xenia All New</option>
                        <option>Avanza Grand New</option>
                        <option>Innova Reborn</option>
                        <option>Big Bus</option>
                      </select>
                    </div>
                    <!-- /.tipe mobil -->
                  </div>
                  <!-- /.col-md-6 -->

                  <!-- col-md-6 -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Nopol : </label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-car"></i></span>
                        <input type="text" class="form-control" placeholder="Plat Nomor">
                      </div>
                    </div>
                  </div>
                  <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
                <!-- row -->
                <div class="row no-padding">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="col-md-12">
                        <label> Masa Berlaku Kir : </label>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label> Awal </label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-car"></i>
                            </div>
                            <input type="text" class="form-control" placeholder="Awal...">
                          </div>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <div class="col-md-6" style="padding-right: 0;">
                        <div class="form-group">
                          <label> Akhir </label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-car"></i>
                            </div>
                            <input type="text" class="form-control" placeholder="Akhir...">
                          </div>
                        </div>
                        <!-- /.input group -->
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="col-md-12 no-padding">
                        <label> Masa Berlaku STNK : </label>
                      </div>
                      <div class="col-md-6" style="padding-left: 0 !important">
                        <div class="form-group">
                          <label> Awal </label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-car"></i>
                            </div>
                            <input type="text" class="form-control" placeholder="Awal ...">
                          </div>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label> Akhir </label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-car"></i>
                            </div>
                            <input type="text" class="form-control" placeholder="Akhir...">
                          </div>
                        </div>
                        <!-- /.input group -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.row -->
                <div class="row no-padding">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="col-md-12">
                        <label> Masa Berlaku KPS :</label>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label> Awal </label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-car"></i>
                            </div>
                            <input type="text" class="form-control" placeholder="Awal...">
                          </div>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <div class="col-md-6" style="padding-right: 0;">
                        <div class="form-group">
                          <label> Akhir </label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-car"></i>
                            </div>
                            <input type="text" class="form-control" placeholder="Akhir...">
                          </div>
                        </div>
                        <!-- /.input group -->
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="col-md-12 no-padding">
                        <label> Masa Pajak STNK : </label>
                      </div>
                      <div class="col-md-6" style="padding-left: 0 !important">
                        <div class="form-group">
                          <label> Awal </label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-car"></i>
                            </div>
                            <input type="text" class="form-control" placeholder="Awal ...">
                          </div>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label> Akhir </label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-car"></i>
                            </div>
                            <input type="text" class="form-control" placeholder="Akhir...">
                          </div>
                        </div>
                        <!-- /.input group -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.row -->
                <!-- row -->
                <div class="row no-padding">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Jumlah Pintu : </label>
                      <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Pintu">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label class="form-label"> Panjang Bak/Box : </label>
                      <input type="number" class="form-control" id="exampleInputEmail1" placeholder=" ... Cm">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label class="form-label"> Lebar Bak/Box : </label>
                      <input type="number" class="form-control" id="exampleInputEmail1" placeholder=" ... Cm">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label class="form-label"> Tinggi Bak/Box : </label>
                      <input type="number" class="form-control" id="exampleInputEmail1" placeholder=" ... Cm">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Tonase / Berat Muatan : </label>
                      <input type="number" class="form-control" id="exampleInputEmail1" placeholder=" ... Kg">
                    </div>
                  </div>
                </div>
                <!-- /.row -->
                <!-- row -->
                <div class="row no-padding">
                  <div class="col-md-2">
                    <label>Tipe AC (Air Conditioner) :</label>
                    <div class="checkbox"><label><input type="checkbox"> Singel Blower </label></div>
                    <div class="checkbox"><label><input type="checkbox"> Double Blower </label></div>
                    <div class="checkbox"><label><input type="checkbox"> Ducting </label></div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-2">
                      <label>Karaoke :</label>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Tersedia
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Belum Tersedia
                        </label>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <label>Tv :</label>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Tersedia
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Belum Tersedia
                        </label>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <label>Toilet :</label>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Tersedia
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Belum Tersedia
                        </label>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <label>Smoking Area :</label>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Tersedia
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Belum Tersedia
                        </label>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <label>WIFI :</label>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Tersedia
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Belum Tersedia
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.row -->
                <!-- row -->
                <div class="row no-padding">
                  <div class="col-md-6">
                    <!-- warna -->
                    <div class="form-group">
                      <label class="form-label">Warna :</label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-car"></i></span>
                        <input type="text" class="form-control" placeholder="Warna">
                        <div class="input-group-addon">
                          <i style="background-color: rgb(153, 62, 62);"></i>
                        </div>
                      </div>
                    </div>
                    <!-- /.warna -->
                  </div>
                  <div class="col-md-6">
                    <!-- Range Penumpang -->
                    <div class="form-group">
                      <label class="form-label">Range Penumpang :</label>
                      <div class="input-group">
                        <input type="text" value="" class="slider form-control" data-slider-min="4" data-slider-max="60" data-slider-step="1" data-slider-value="[5,15]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="red">
                      </div>
                    </div>
                    <!-- /.Range Penumpang -->
                  </div>
                </div>
                <!-- /.row -->
                <!-- row -->
                <div class="row no-padding">
                  <div class="col-md-12">
                    <!-- warna -->
                    <div class="form-group">
                      <label class="form-label">Keterangan :</label>
                      <textarea type="text" class="form-control" placeholder="Masukkan keterangan tambahan ..."></textarea>
                    </div>
                    <!-- /.warna -->
                  </div>
                </div>
                <!-- /.row -->
                <!-- row -->
                <div class="row">
                  <label style="margin-left: 14px;">Foto Mobil</label>
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
                <!-- row -->
                <div class="row no-padding">
                  <!-- KIR -->
                  <div class="col-md-6 no-padding">
                    <label style="margin-left: 14px;">Foto KIR</label>
                    <div class="form-group">
                      <?php
                      $array = ['depan', 'belakang'];
                      for ($i=0; $i < 2; $i++) { ?>
                        <div class="col-md-4">
                          <div class="img-attachments">
                            <span class="img-attachment-icon has-img"><img src="../assets/adminlte-2/dist/img/user2-160x160.jpg" ></span>
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
                  <!-- /.KIR -->
                  <!-- /.STNK -->
                  <div class="col-md-6 no-padding">
                    <label style="margin-left: 14px;">Foto STNK</label>
                    <div class="form-group">
                      <?php
                      $array = ['depan', 'belakang'];
                      for ($i=0; $i < 2; $i++) { ?>
                        <div class="col-md-4">
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
                  <!-- /.STNK -->
                </div>
                <!-- /.row -->
                <div class="row no-padding">
                  <!-- KPS -->
                  <div class="col-md-6 no-padding">
                    <label style="margin-left: 14px;">Foto KPS</label>
                    <div class="form-group">
                      <?php
                      $array = ['depan', 'belakang'];
                      for ($i=0; $i < 2; $i++) { ?>
                        <div class="col-md-4">
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
                  <!-- /.KPS -->
                  <!-- /.PAJAK -->
                  <div class="col-md-6 no-padding">
                    <label style="margin-left: 14px;">Foto PAJAK</label>
                    <div class="form-group">
                      <?php
                      $array = ['depan', 'belakang'];
                      for ($i=0; $i < 2; $i++) { ?>
                        <div class="col-md-4">
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
                  <!-- /.PAJAK -->
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
