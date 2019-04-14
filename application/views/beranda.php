  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
          <i class="fa fa-arrows-alt"></i>&nbsp;
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $title;?></h3>
          <div class="box-tools pull-right">

          </div>
        </div>
        <div class="box-body" align="center">

          <img alt="BPS" src="<?php echo $this->config->item('resource_url');?>images/BPS.png" style="width: 13em;"/><br/>
          <h3><strong>Selamat Datang di aplikasi manajemen data mitra BPS Manado ! ~</strong></h3>
          <h4>Gunakan menu di samping untuk mengakses aplikasi dan memulai operasi.</h4>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    navbar_dynamic('Beranda');
  </script>
