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
          <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#mdl-tambah-pengguna"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</button>
        </div>
      </div>
      <div class="box-body">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Keterangan</th>
                    <th>Grup</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="center">1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td align="center">
                        <button class="btn btn-default btn-xs" title="Ubah Password" data-toggle="modal" data-target="#mdl-ganti-password-user"><i class="fa fa-key"></i></button>
                        <button class="btn btn-warning btn-xs" title="Edit Pengguna" data-toggle="modal" data-target="#mdl-edit-pengguna"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger btn-xs" title="Hapus Pengguna" data-toggle="modal" data-target="#mdl-hapus-pengguna"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modals -->
  <div class="modal fade modal-default" id="mdl-ganti-password-user">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><i class="fa fa-user"></i>&nbsp;&nbsp;Ganti Password</h4>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label for="#" class="col-sm-3 control-label">Password Baru</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="#" placeholder="#">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-success"><i class="fa fa-save"></i>&nbsp;&nbsp;Ganti</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade modal-default" id="mdl-edit-pengguna">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><i class="fa fa-user"></i>&nbsp;&nbsp;Edit Pengguna</h4>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label for="#" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="#" placeholder="#">
            </div>
          </div>
          <div class="form-group row">
            <label for="#" class="col-sm-2 control-label">Keterangan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="#" placeholder="#">
            </div>
          </div>
          <div class="form-group row">
            <label for="#" class="col-sm-2 control-label">Grup</label>
            <div class="col-sm-10">
              <select class="form-control">
                  <option>{{grup}}</option>
              </select>
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

  <div class="modal fade modal-default" id="mdl-hapus-pengguna">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><i class="fa fa-user"></i>&nbsp;&nbsp;Hapus Pengguna</h4>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <div class="col-sm-12">
              Hapus pengguna <span class="label label-danger label-lg">{{nama_pengguna}}</span> ??
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

  <div class="modal fade modal-default" id="mdl-tambah-pengguna">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><i class="fa fa-user"></i>&nbsp;&nbsp;Tambah Pengguna</h4>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label for="#" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="#" placeholder="#">
            </div>
          </div>
          <div class="form-group row">
            <label for="#" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="#" placeholder="#">
            </div>
          </div>
          <div class="form-group row">
            <label for="#" class="col-sm-2 control-label">Keterangan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="#" placeholder="#">
            </div>
          </div>
          <div class="form-group row">
            <label for="#" class="col-sm-2 control-label">Grup</label>
            <div class="col-sm-10">
                <select class="form-control">
                    <option>{{grup}}</option>
                </select>
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
