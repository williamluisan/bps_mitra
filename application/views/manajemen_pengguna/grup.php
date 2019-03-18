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
            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#mdl-tambah-grup"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</button>
        </div>
      </div>
      <div class="box-body">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Grup</th>
                    <th>Modul</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="center">1</td>
                    <td>2</td>
                    <td>3</td>
                    <td align="center">
                        <button class="btn btn-xs btn-default" data-toggle="modal" data-target="#mdl-atur-modul-grup" title="Atur Modul"><i class="fa fa-plus"></i></button>
                        <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#mdl-edit-grup" title="Edit Grup"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#mdl-hapus-grup" title="Hapus Grup"><i class="fa fa-trash"></i></button>
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
  <div class="modal fade modal-default" id="mdl-tambah-grup">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><i class="fa fa-group"></i>&nbsp;&nbsp;Tambah Grup</h4>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label for="#" class="col-sm-2 control-label">Nama Grup</label>
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

  <div class="modal fade modal-default" id="mdl-atur-modul-grup">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><i class="fa fa-group"></i>&nbsp;&nbsp;Atur Modul</h4>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label for="#" class="col-sm-2 control-label">Nama Grup</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="#" placeholder="#" readonly="readonly" value="{{nama_grup}}">
            </div>
          </div>
          <hr/>
          <div class="form-group row">
            <label for="#" class="col-sm-12 control-label">Modul Aktif</label>
            <div class="col-sm-12">
              <input type="checkbox" id="#" placeholder="#" value="{{nama_grup}}"> {{modul_1}}
            </div>
            <div class="col-sm-12">
              <input type="checkbox" id="#" placeholder="#" value="{{nama_grup}}"> {{modul_2}}
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

  <div class="modal fade modal-default" id="mdl-edit-grup">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><i class="fa fa-group"></i>&nbsp;&nbsp;Edit Grup</h4>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label for="#" class="col-sm-2 control-label">Nama Grup</label>
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

  <div class="modal fade modal-default" id="mdl-hapus-grup">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><i class="fa fa-group"></i>&nbsp;&nbsp;Hapus Grup</h4>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <div class="col-sm-12">
              Hapus grup <label class="label label-danger">{{nama_grup}}</label> ?
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
