<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo "{$this->config->item('website_title1')} {$this->config->item('website_title2')}";?></title>
    <link rel="icon" href="<?php echo $this->config->item('favicon_path');?>"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo $this->config->item('resource_url'); ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->config->item('resource_url'); ?>plugins/font-awesome/fonts/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $this->config->item('resource_url'); ?>dist/css/AdminLTE.min.css">
  </head>
  <body class="hold-transition">
    <div class="login-box">
      <div class="login-logo" style="margin-bottom: 0px;">
        <img type="image/jpg" alt="UNSRAT" src="<?php echo $this->config->item('resource_url');?>images/BPS.png" style="width: 3em;"/><br/>
        <h2><strong>BPS KOTA MANADO</strong></h2>  
        <h4>Aplikasi Manajemen Data Mitra</h4>
      </div>
      <div class="login-box-body">
        <p style="text-align: center;">
          <?php if(!empty($this->session->flashdata('error'))){ ?>
              <div class="row">
                <div class="col12-md-12 col-sm-12 col-xs-12" style="text-align:center">
                  <div id="lbl-notif" class="alert alert-danger" role="alert"><?php echo $this->session->flashdata('error'); ?></div>
                </div>
              </div>
          <?php } ?>
        </p>
        <form action="<?php echo base_url(). 'Login/login'; ?>" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" name="username" required="required">
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
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
<script src="<?php echo $this->config->item('resource_url'); ?>plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script src="<?php echo $this->config->item('resource_url'); ?>bootstrap/js/bootstrap.min.js"></script>
<script>
    $('#lbl-notif').fadeOut(3000);
</script>