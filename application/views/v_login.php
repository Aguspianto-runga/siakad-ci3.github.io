
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
    <div class="login-box mb-2" style="width: 45%;">
    <div class="login-logo">
        <ul>
            <a href="" class="mr-5"><b><img style="width: 20%;" src="<?php echo base_url()?>assets/img/logo.png" alt="logo"></b></a>
        </ul>
        <ul>
        <a href="" class="mr-5"><b>UKIT</b></a>
        </ul>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
        <h4 class="login-box-msg">Login Page</h4>

        <?= $this->session->flashdata('message'); ?>

        <form method="post" action="<?= base_url('auth'); ?>">
            <div class="input-group mb-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
            <div class="input-group-append">
                <div class="input-group-text">
                    <?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
                    <span class="fas fa-envelope ml-1"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <?= form_error('password', '<small class="text-danger pl-1">', '</small>'); ?>
                    <span class="fas fa-lock ml-1"></span>
                </div>
            </div>
            </div>
            <div class="text-center mb-3">
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
        </form>

        
        <hr>
        <p class="mb-1">
            <a href="forgot-password.html">I forgot my password</a>
        </p>
        <p class="mb-0">
            <a href="<?php echo base_url('auth/registration'); ?>" class="text-center">Register a new membership</a>
        </p>
        </div>
        <!-- /.login-card-body -->
    </div>
    </div>
    <!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>

</body>
</html>
