<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <ol class="breadcrumb">
        <i class="fa fa-arrows"></i>&nbsp;
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo $page_title;?></h3>
        <div class="box-tools pull-right">
          <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#mdl-tambah-modul"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</button>
        </div>
      </div>
      <div class="box-body">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Nama Panjang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="center">1</td>
                    <td>2</td>
                    <td>3</td>
                    <td align="center">
                        <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#mdl-edit-modul" title="Ubah Modul"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#mdl-hapus-modul" title="Hapus Modul"><i class="fa fa-trash"></i></button>
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
  <div class="modal fade modal-default" id="mdl-tambah-modul">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><i class="fa fa-list"></i>&nbsp;&nbsp;Tambah Modul</h4>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label for="#" class="col-sm-2 control-label">Nama Modul</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="#" placeholder="#">
            </div>
          </div>
          <div class="form-group row">
            <label for="#" class="col-sm-2 control-label">Nama Panjang</label>
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

  <div class="modal fade modal-default" id="mdl-edit-modul">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><i class="fa fa-list"></i>&nbsp;&nbsp;Edit Modul</h4>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label for="#" class="col-sm-2 control-label">Nama Modul</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="#" placeholder="#">
            </div>
          </div>
          <div class="form-group row">
            <label for="#" class="col-sm-2 control-label">Nama Panjang</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="#" placeholder="#">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-warning"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade modal-default" id="mdl-hapus-modul">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><i class="fa fa-list"></i>&nbsp;&nbsp;Hapus Modul</h4>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <div class="col-sm-12">
              Hapus modul <label class="label label-danger">{{nama_modul}}</label> ? 
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;&nbsp;Hapus</button>
        </div>
      </div>
    </div>
  </div>
<!-- // Modals -->
