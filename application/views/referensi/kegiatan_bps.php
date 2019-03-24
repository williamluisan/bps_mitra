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
          <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Tgl. Mulai</th>
                    <th>Tgl. Selesai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach($list_kegiatan['data'] as $r):?>
                <tr>
                    <td align="center"><?php echo $no++;?></td>
                    <td><?php echo $r['keg_nama'];?></td>
                    <td><?php echo $r['keg_deskripsi'];?></td>
                    <td align="center"><?php echo format_tanggal($r['keg_tgl_mulai']);?></td>
                    <td align="center"><?php echo format_tanggal($r['keg_tgl_selesai']);?></td>
                    <td align="center">
                        <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#mdl-edit"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger btn-xs btn_hps" data-id="<?php echo $r['id'];?>" data-nama="<?php echo $r['keg_nama'];?>"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                <?php endforeach;?>
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
            <h4 class="modal-title"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Kegiatan</h4>
          </div>
          <form id="frm-tmbh">
          <div class="modal-body">
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Nama Kegiatan</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="in-nama-keg" name="in_nama_keg" placeholder="#">
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Deskripsi</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="in-desk" name="in_desk"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Tgl. Mulai</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="ed-tgl-mlai" name="ed_tgl_mlai" placeholder="#" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Tgl. Berakhir</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="ed-tgl-akr" name="ed_tgl_akr" placeholder="#" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-success btn_save_tambah"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
          </div>
          </form>
        </div>
      </div>
    </div>


    <div class="modal fade modal-default" id="mdl-edit">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit Kegiatan</h4>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Nama Kegiatan</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="ed-nama-keg" name="ed_nama_keg" placeholder="#">
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Deskripsi</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="ed-desk" name="ed_desk"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Tgl. Mulai</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="ed-tgl-mlai" name="ed_tgl_mlai" placeholder="#" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 control-label">Tgl. Berakhir</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="ed-tgl-akr" name="ed_tgl_akr" placeholder="#" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
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
  <!-- // Modals -->
