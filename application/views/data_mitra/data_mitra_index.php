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
            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#mdl-tmbh"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</button>
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
                <th>Pas Foto</th>
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
                <td align="center">6</td>
                <td align="center">
                  <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#mdl-detail"><i class="fa fa-eye"></i></button>
                  <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#mdl-edit"><i class="fa fa-edit"></i></button>
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
    <div class="modal fade modal-default" id="mdl-tmbh">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Mitra</h4>
          </div>
          <form id="frm-tmbh">
          <div class="modal-body">
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="in-nama" name="in_nama" placeholder="#">
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">No. KTP</label>
              <div class="col-sm-10">
                <input type="text" class="form-control tik_num" id="in-ktp" name="in_ktp" placeholder="#">
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-10">
                <textarea type="text" class="form-control" id="in-alamat" name="in_alamat" placeholder="#"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Pendidikan Terakhir</label>
              <div class="col-sm-10">
                <select class="form-control" id="in-sel-pddk" name="in_sel_pddk">
                  <option value="1">1</option>
                </select>
              </div>
            </div>
            <hr/>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">No. Mitra</label>
              <div class="col-sm-10">
                <input type="text" class="form-control tik_num" id="in-no-mitra" name="in_no_mitra" placeholder="#">
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Pas Foto</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" id="in-pasfoto" name="in_pasfoto" placeholder="#">
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Pengalaman Mitra</label>
              <div class="col-sm-10">
                <select class="form-control" id="in-sel-penglmn" name="in_sel_penglmn">
                  <option value="1">1</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">No. HP</label>
              <div class="col-sm-10">
                <input type="text" class="form-control tik_num" id="in-nohp" name="in_nohp" placeholder="#">
              </div>
            </div>
          </div>
          </form>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-success btn_save_tmbh"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
          </div>
        </div>
      </div>
    </div>

    
    <div class="modal fade modal-default" id="mdl-edit">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit Mitra</h4>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="in-nama" name="in_nama" placeholder="#">
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">No. KTP</label>
              <div class="col-sm-10">
                <input type="text" class="form-control tik_num" id="in-ktp" name="in_ktp" placeholder="#">
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-10">
                <textarea type="text" class="form-control" id="in-alamat" name="in_alamat" placeholder="#"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Pendidikan Terakhir</label>
              <div class="col-sm-10">
                <select class="form-control">
                  <option></option>
                </select>
              </div>
            </div>
            <hr/>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">No. Mitra</label>
              <div class="col-sm-10">
                <input type="text" class="form-control tik_num" id="in-no-mitra" name="in_no_mitra" placeholder="#">
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Pas Foto</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" id="in-pasfoto" name="in_pasfoto" placeholder="#">
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Pengalaman Mitra</label>
              <div class="col-sm-10">
                <select class="form-control">
                  <option>1</option>
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


    <div class="modal fade modal-default" id="mdl-detail">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-eye"></i>&nbsp;&nbsp;Detail Mitra</h4>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-10">
                <label class="label label-lg bg-navy tik_label--lg">{{ nama mitra }}</label>
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">No. Mitra</label>
              <div class="col-sm-10">
                <label class="label label-lg bg-orange tik_label--lg">{{ nomor mitra }}</label>
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">No. HP</label>
              <div class="col-sm-10">
                <label class="label label-lg label-info tik_label--lg">{{ no HP }}</label>
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-10">
                {{ alamat }}
              </div>
            </div>
            <hr/>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Pengalaman Mitra :</label>
              <div class="col-sm-10">
                <ul>
                  <li>Pengalaman</li>
                  <li>Pengalaman</li>
                </ul>
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