<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $this->config->item('website_title1');?>&nbsp;<?php echo $this->config->item('website_title2');?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" type="image/png" href="<?php echo $this->config->item('favicon_path');?>"/>
  <link rel="stylesheet" href="<?php echo $this->config->item('resource_url');?>bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $this->config->item('resource_url');?>plugins/font-awesome/fonts/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="<?php echo $this->config->item('resource_url');?>plugins/font-awesome-5.7.2/css/all.min.css"/>
  <link rel="stylesheet" href="<?php echo $this->config->item('resource_url');?>plugins/iCheck/all.css"/>
  <link rel="stylesheet" href="<?php echo $this->config->item('resource_url');?>dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo $this->config->item('resource_url');?>dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo $this->config->item('resource_url');?>plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo $this->config->item('resource_url');?>plugins/select2/select2.min.css"/>
  <link rel="stylesheet" href="<?php echo $this->config->item('resource_url');?>additional/tik_unsrat.css"/>
  <link rel="stylesheet" href="<?php echo $this->config->item('resource_url');?>plugins/jquery-confirm/dist/jquery-confirm.min.css"/>
  <script src="<?php echo $this->config->item('resource_url');?>plugins/jQuery/jQuery-2.2.0.min.js"></script>
  <script src="<?php echo $this->config->item('resource_url');?>additional/tik_unsrat_functions.js"></script>
</head>
<body class="hold-transition <?php echo $this->config->item('default_skin');?> sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><?php echo $this->config->item('website_abbrv');?></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><?php echo $this->config->item('website_title1');?></b>&nbsp;<?php echo $this->config->item('website_title2');?></span>
    </a>
    <!-- bottom alert | alert_js -->
    <div id="alert_js"></div>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="<?php echo base_url();?>login/logout" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-sign-out-alt"></i>
              <span class="hidden-xs">Keluar</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header" style="height: 5em;">
                <p>
                  Yakin untuk keluar ?
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('Login/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo $this->config->item('resource_url');?>images/user.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $this->session->userdata('nama');?></p>
            <a href="#">Administrator</a>
          </div>
        </div>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MENU</li>
          <li class="treeview">
            <a href="<?php echo base_url();?>beranda">
              <i class="fa fa-home"></i> <span>Beranda</span>
            </a>
          </li>
          <li class="treeview">
            <a href="<?php echo base_url();?>mitra">
              <i class="fa fa-list-ul"></i> <span>Data Mitra</span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-book"></i> <span>Referensi</span> <i class="fa fa-angle-left pull-right"></i>
              <ul class="treeview-menu">
                  <a href="#"></a> <!-- setiap tree view, musti tambah satu <a> sama deng di sei ini, nntau qyp, susah depe JS mo stel -->
                  <li><a href="<?php echo base_url();?>kegiatan"><i class="far fa-circle"></i>&nbsp;&nbsp;<span>Kegiatan BPS</span></a></li>
              </ul>
            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <?php $this->load->view($view_file_path);?>

      <footer class="main-footer">
        <strong>Copyright &copy; <?php echo $this->config->item('website_copyright_year');?> </strong><?php echo $this->config->item('website_copyright');?>.
        <!-- Below are the template maker link, thank you ! -->
        <!--<strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
        reserved.-->
      </footer>
    </div>
    <!-- ./wrapper -->

    <script src="<?php echo $this->config->item('resource_url');?>additional/tik_unsrat_class.js"></script>
    <script src="<?php echo $this->config->item('resource_url');?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo $this->config->item('resource_url');?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo $this->config->item('resource_url');?>plugins/select2/select2.min.js"></script>
    <script src="<?php echo $this->config->item('resource_url');?>plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo $this->config->item('resource_url');?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- import iCheck di masing2 view yang membutuhkan -->
    <script src="<?php echo $this->config->item('resource_url');?>plugins/iCheck/icheck.min.js"></script>
    <script src="<?php echo $this->config->item('resource_url');?>dist/js/app.min.js"></script>
    <script src="<?php echo $this->config->item('resource_url');?>plugins/input-mask/jquery.inputmask.js"></script>
    <script src="<?php echo $this->config->item('resource_url');?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="<?php echo $this->config->item('resource_url');?>plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <script src="<?php echo $this->config->item('resource_url');?>plugins/jquery-confirm/dist/jquery-confirm.min.js"></script>
    <script>

        $(document).ready(function() {

            //-- inisialisasi select2
            $('.select2').select2();

            //-- global setting dari datatable
            // $('.table').DataTable({
            //     "paging": true,
            //     "lengthChange": true,
            //     "searching": true,
            //     "ordering": true,
            //     "info": true,
            //     "autoWidth": true
            // });
            
            $("[data-mask]").inputmask();

            //-- inisialisasi time picker
            // $(".timepicker").timepicker({
            //   showInputs: false
            // });
              
            //-- import dan inisialisasi iCheck di masing2 view yang membutuhkan, inisialisasi iCheck for checkbox and radio inputs
            // $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            //   checkboxClass: 'icheckbox_minimal-blue',
            //   radioClass   : 'iradio_minimal-blue'
            // });
            // //Red color scheme for iCheck
            // $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            //   checkboxClass: 'icheckbox_minimal-red',
            //   radioClass   : 'iradio_minimal-red'
            // });
            // //Flat red color scheme for iCheck
            // $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            //   checkboxClass: 'icheckbox_flat-green',
            //   radioClass   : 'iradio_flat-green'
            // });
        });

    </script>

</body>
</html>
