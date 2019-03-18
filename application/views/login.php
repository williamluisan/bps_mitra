<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TEMPLATE UNSRAT</title>
  <link rel="icon" href="<?php echo $this->config->item('favicon_path');?>"/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo $this->config->item('resource_url'); ?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $this->config->item('resource_url'); ?>plugins/font-awesome/fonts/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo $this->config->item('resource_url'); ?>plugins/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $this->config->item('resource_url'); ?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo $this->config->item('resource_url'); ?>plugins/iCheck/square/blue.css">

  <!-- Google Font -->
  <link rel="stylesheet" href=#onts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition">
<div class="login-box">
  <div class="login-logo">
    <img width="80" type="image/jpg" alt="UNSRAT" src="<?php echo $this->config->item('resource_url');?>images/unsrat.png"/><br/>
      <b>NAMA</b> APLIKASI
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p style="text-align: center;">
        <?php if ( ! empty($this->session->flashdata('notifikasi'))) : ?>
            <label class="label label-lg label-danger" id="lbl-notif">
                <?php echo $this->session->flashdata('notifikasi'); ?>
            </label>
        <?php endif ?>
    </p>
      <div class="form-group has-feedback">
        <input type="user" class="form-control" placeholder="Username" name="username" required="required">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required="required">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-block btn-flat <?php echo $this->config->item('login_button_color');?>" value="#">LOGIN</button>
        </div>
        <!-- /.col -->
      </div>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo $this->config->item('resource_url'); ?>plugins/jquery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo $this->config->item('resource_url'); ?>bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<script>

    $('#lbl-notif').fadeOut(3000);

</script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-39277790-25', 'auto');
    ga('require', 'displayfeatures');
    ga('require', 'linkid', 'linkid.js');
    ga('send', 'pageview');
</script>