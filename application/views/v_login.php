
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pro-Cashflow Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url().'asset' ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'asset' ?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'asset' ?>/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'asset' ?>/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url().'asset' ?>/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page" style="background-color: #FDC651">
<div class="login-box">
  <div class="login-logo">
    <img src="<?php echo base_url().'asset/' ?>dist/img/procar.png" alt="AdminLTE Logo" class="brand-image img-rounded elevation-3" style="opacity: .7" width="100px"> <br>

    <a href="<?php echo base_url().'asset' ?>/index2.html"><b>Pro-</b>CashFlow</a>
  </div>
  <!-- /.login-logo -->
  <?php echo $this->session->flashdata('pesan_gagal'); ?>
  <div class="login-box-body">
    <p class="login-box-msg">Login Untuk Masuk Pro-CashFlow</p>

    <form action="<?php echo base_url().'login/proses' ?>" method="post">

      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password" id="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <label class="checkbox-wrap checkbox-primary mb-0">
          <input type="checkbox" id="show_password">
          <span class="checkmark"></span> Show Password
        </label>
      </div>

      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary  btn-flat"><i class="fa fa-unlock"></i> Log-In</button>
          <button type="reset" class="btn btn-danger  btn-flat"><i class="fa fa-refresh"></i> Batal</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url().'asset' ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url().'asset' ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<!-- <script src="<?php echo base_url().'asset' ?>/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script> -->

<!-- Script Show Password -->
<script>
  $(document).ready(function(){

    $('#show_password').click(function(){
      if($(this).is(':checked')){
        $('#password').attr('type','text');
      }else{
        $('#password').attr('type', 'password');
      }
    });

  });
</script>
</body>
</html>
