<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thrubus | Lupa Password</title>
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
    <div class="box box-danger" style="padding: 16px">
      <div class="box-body">
        <div class="login-logo">
          <i style="font-size: 56px" class="fa fa-lock text-red" aria-hidden="true"></i>
        </div>
        <h3 class="text-center">Reset Password.</h3>

        <p>
          Silahkan masukkan email yang sudah terdaftar dan kami akan mengirim tautan link ke email anda untuk reset password.
        </p>

        <form class="search-form">
          <div class="input-group">
            <!-- <label class="control-label has-error" for="inputErxror"><i class="fa fa-times-circle-o"></i> Input with error</label><br> -->
          <!-- <div class="input-group has-success"> -->
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="email" class="form-control" placeholder="Alamat Email">

            <div class="input-group-btn">
              <a href="http://demo.okkarent.id/auth/reset-password-email.php" name="submit" class="btn waves-effect waves-light btn-success btn-flat">Reset Password</a>
            </div>
          </div>
          <span class="help-block">Email tidak terdaftar</span>
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
