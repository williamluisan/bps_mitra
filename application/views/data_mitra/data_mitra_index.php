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
            <button class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</button>
          </div>
        </div>
        <div class="box-body">

          <div class="box-tools pull-right">
            Tombol aksi : 
            <label class="label label-info label-xs"><i class="fa fa-eye"></i>&nbsp;Detail</label>
            <label class="label label-warning label-xs"><i class="fa fa-edit"></i>&nbsp;Edit</label>
            <label class="label label-danger label-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</label>
          </div><br/><br/>

          <table class="table table-striped table-hover table-bordered">
            <thead>
              <tr>
                <th>No.</th>
                <th>No. Mitra</th>
                <th>Nama</th>
                <th>No. KTP</th>
                <th>Pend. Terakhir</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td align="center">1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td align="center">5</td>
                <td align="center">
                  <button class="btn btn-info btn-xs"><i class="fa fa-eye"></i></button>
                  <button class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></button>
                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Modals -->
    <div class="modal fade modal-default" id="aa">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-group"></i>&nbsp;&nbsp;Your title</h4>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Label</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="#" placeholder="#">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-success"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
          </div>
        </div>
      </div>
    </div>
  <!-- // Modals -->

  <script>
    navbar_dynamic('Data Mitra');
  </script>