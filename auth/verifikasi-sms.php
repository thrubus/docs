<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thrubus | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/adminlte-2/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/adminlte-2/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/adminlte-2/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../assets/adminlte-2/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
</head>
<body class="hold-transition login-page">
<div class="login-logo" style="margin-top: 200px">
  <a href="../assets/adminlte-2/index2.html"><b>Thru</b>bus</a>
</div>
<!-- /.login-logo -->
<div class="">
  <!-- <p class="login-box-msg">Daftar / masuk untuk sewa mobil, bus, box, dan angkutan darat lainya.</p> -->
  <div class="error-page" style="width: 500px">
    <div class="box box-warning" style="padding: 16px">
      <div class="box-body">
        <h3><i class="fa fa-clock-o text-yellow"></i> Akun belum di verifikasi.</h3>

        <p>
          Untuk melanjutkan, silahkan verifikasi no. telepon Anda yang telah terdaftar pada mitra Anda.
        </p>

        <form class="search-form">
          <div class="input-group">
            <input type="text" name="verifikasi-sms" class="form-control" placeholder="Masukkan no. telepon Anda yang telah terdaftar">

            <div class="input-group-btn">
              <a href="http://demo.okkarent.id/auth/konfirmasi-sms.php" name="submit" class="btn waves-effect waves-light btn-warning btn-flat"><i class="fa fa-send-o"></i> Kirim Verifikasi</a>
            </div>
          </div>
          <!-- /.input-group -->
        </form>
      </div>
    </div>
  </div>
  <!-- /.error-page -->
</div>
<!-- /.login-box-body -->
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../assets/adminlte-2/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../assets/adminlte-2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../assets/adminlte-2/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
