<script type="module">
    import * as ref from "./resources/additional/bps_mitra_ref_function.js";

    $('.table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true
    });

    var formData = function(id) {
        var form = document.getElementById(id);
        return new FormData(form);
    }

    var request = function(url, data, method = 'POST') {
        return $.ajax({
            method: method,
            url: url,
            data: data,
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false
        }).always(function (){
            $('.modal').modal('hide');
            setTimeout(function() {
                window.location.reload();
            }, 2000);
        });
    }

    //--insert modal
    $('.btn_tmbh').click(() => {  
        //--mengambil referensi pendidikan
        ref.get_ref_pddk('<?php echo base_url();?>').done((d, t, j) => {
            let elem = $();
            $.each(d, (key, val) => {
                elem = elem.add(`<option value="${val.id}">${val.pddk_nama}</option>`);
            });
            $('#in-sel-pddk').html(elem);
        });
    })

    //-- insert request
    $('.btn_save_tmbh').click(function(){
        var ins_req = request(
            '<?php echo base_url();?>data_mitra/Data_mitra/insert',
            formData('frm-tmbh')
        );

        ins_req.done(function(d, t, j){
            alert_js(d.status, d.deskripsi);
        });

        ins_req.fail(function(j, t, e){
            $.dialog({
                title: 'Error',
                content: `Terjadi kesalahan: ${e}`,
                type: 'red',
            });
        });
    });

    //-- edit modal
    $('.btn_edit').click(function(){
        //-- mengambil referensi pendidikan
        ref.get_ref_pddk('<?php echo base_url();?>').done((d, t, j) => {
            let elem = $();
            $.each(d, (key, val) => {
                elem = elem.add(`<option value="${val.id}">${val.pddk_nama}</option>`);
            });
            $('#ed-sel-pddktrkhr').html(elem);
        });

        var id = $(this).data('id');
        var ed_mdl_req = $.ajax({
            url: '<?php echo base_url();?>data_mitra/Data_mitra/detail',
            method: 'POST',
            data: {id: id},
            dataType: 'JSON'
        });

        ed_mdl_req.done((d, t, j) => {
            console.log(d);
            $('#ed-id').val(d[0].id);
            $('#ed-nama').val(d[0].data_nama);
            $('#ed-ktp').val(d[0].data_no_ktp);
            $('#ed-alamat').val(d[0].data_alamat);
            $('#ed-sel-pddktrkhr').val(d[0].data_id_pddk_trkhr);
            $('#ed-no-mitra').val(d[0].data_no_mitra);
            $('#ed-pasfoto-show').attr('src', '<?php echo $this->config->item('pas_foto')['upload_path']?>/'+d[0].data_pas_foto);
            $('#ed-nohp').val(d[0].data_no_hp);
        });

        ed_mdl_req.fail((j, t, e) => {
            $.dialog({
                title: 'Error',
                content: `Terjadi kesalahan: ${e}`,
                type: 'red',
            });
        });
    });
    
    //-- edit request
    $('.btn_save_edit').click(function(){
        var ed_req = request(
            '<?php echo base_url();?>data_mitra/Data_mitra/edit',
            formData('frm-edit')
        );

        ed_req.done((d, t, j) => {
            alert_js(d.status, d.deskripsi);
        });

        ed_req.fail((j, t, e) => {
            $.dialog({
                title: 'Error',
                content: `Terjadi kesalahan: ${e}`,
                type: 'red',
            });
        });
    });

    //-- pengalaman modal
    $('.btn_pnglmn').click(function() {
        var id = $(this).data('id');
        var nama = $(this).data('nama');

        //-- mengambil referensi kegiatan
        ref.get_ref_keg_bps('<?php echo base_url();?>', id).done((d, t, j) => {
            let elem = $();

            //-- jika result kosong
            if (d.length == 0) {
                elem = elem.add(`<option hidden="hidden" readonly="readonly">Tidak ada pilihan, semua kegiatan telah diikuti</option>`);
                $('.btn_tmbh_pnglmn').hide();
            } else {
                $.each(d, (key, val) => {
                    elem = elem.add(`<option value="${val.id}">${val.keg_nama}</option>`);
                });
                $('.btn_tmbh_pnglmn').show();
            }
            $('#in-sel-keg').html(elem);
        });

        //-- mengambil list pengalaman mitra
        var list_pnglmn_req = $.ajax({
            url: '<?php echo base_url();?>data_mitra/Data_mitra/get_pengalaman',
            method: 'POST',
            data: {mitra_id: id},
            dataType: 'json'
        }).done((d, t, j) => {
            let elem = $();

            //-- jika result kosong
            if (d.length == 0) {
                elem = elem.add(`<tr><td colspan="3" align="center">-- Belum pernah mengikuti kegiatan BPS --</td></tr>`);
            } else {
                $.each(d, (key, val) => {
                    elem = elem.add(`
                        <tr>
                            <td align="center">${key+1}</td>
                            <td>${val.keg_nama}</td>
                            <td align="center">
                                <button 
                                    data-hpsid="${val.id}" 
                                    data-hpsmitranama="${nama}"
                                    data-hpspnglmnnama="${val.keg_nama}" class="btn_hps_pnglmn btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    `);
                });
            }
            $('#tbl-pengalaman tbody').html(elem);
        }).fail((j, t, e) => {
            $.dialog({
                title: 'Error',
                content: `Terjadi kesalahan: ${e}`,
                type: 'red',
            });
        });

        $('#no-mitra').val(id);
        $('#nama-mitra').val(nama);
        $('#lbl-pnglmn-nama').text(nama);
        $('#lbl-pnglmn-nomor').text(id);
    });

    //-- pengalaman request
    $('.btn_tmbh_pnglmn').click(function(){
        var pnglmn_req = request(
            '<?php echo base_url();?>data_mitra/Data_mitra/tambah_pengalaman',
            formData('frm-tmbh-pnglmn')
        );

        pnglmn_req.done((d, t, j) => {
            alert_js(d.status, d.deskripsi);
        });

        pnglmn_req.fail((j, t, e) => {
            $.dialog({
                title: 'Error',
                content: `Terjadi kesalahan: ${e}`,
                type: 'red',
            });
        });
    });

    //-- delete pengalaman request
    $(document).on('click', '.btn_hps_pnglmn', function(){
        var id = $(this).data('hpsid');
        var pnglmn_nama = $(this).data('hpspnglmnnama');
        var nama = $(this).data('hpsmitranama');
        
        if ( ! window.confirm(`Yakin akan menghapus pengalaman mitra ${pnglmn_nama}?`)) {
            return false;
        }

        var hps_pnglmn_req = $.ajax({
            url: '<?php echo base_url();?>data_mitra/Data_mitra/hapus_pengalaman',
            method: 'POST',
            data: {hpsid: id, hpsmitranama: nama},
            dataType: 'json'
        }).done((d, t, j) => {
            alert_js(d.status, d.deskripsi);
        }).fail((j, t, e) => {
            $.dialog({
                title: 'Error',
                content: `Terjadi kesalahan: ${e}`,
                type: 'red',
            });
        }).always(function(){
            $('.modal').modal('hide');
            setTimeout(function() {
                window.location.reload();
            }, 2000); 
        });
    });

    //-- delete request
    $('.btn_del').click(function() {        
        var id = $(this).data('id');
        var nama = $(this).data('nama');

        if ( ! window.confirm(`Yakin akan menghapus kegiatan ${nama}?`)) {
            return false;
        }

        var del_req = $.ajax({
            url: '<?php echo base_url();?>data_mitra/Data_mitra/delete',
            method: 'POST',
            data: {id: id, nama: nama},
            dataType: 'JSON'            
        }).always(function() {
            $('.modal').hide();
            setTimeout(function() {
                window.location.reload();
            }, 2000);
        });

        del_req.done((d, t, j) => {
            alert_js(d.status, d.deskripsi);
        });

        del_req.fail((j, t, e) => {
            $.dialog({
                title: 'Error',
                content: `Terjadi kesalahan: ${e}`,
                type: 'red',
            });
        });
    });

    //-- detail request
    $('.btn_dtl').click(function() {
        var id = $(this).data('id');

        var dtl_req = $.ajax({
            url: "<?php echo base_url();?>data_mitra/Data_mitra/detail",
            method: 'POST',
            data: {id: id},
            dataType: 'JSON'
        });

        dtl_req.done((d, t, j) => {
            $('#dtl-lbl-nama').text(d[0].data_nama);
            $('#dtl-lbl-nomitra').text(d[0].data_no_mitra);
            $('#dtl-lbl-nohp').text(d[0].data_no_hp);
            $('#dtl-p-alamat').text(d[0].data_alamat);

            let elem = $();
            if (d[0].keg_nama == null) {
                elem = elem.add(`<li>-- Belum pernah mengikuti kegiatan BPS --</li>`);
            } else {
                $.each(d, function(key, val){
                    elem = elem.add(`<li>${val.keg_nama}</li>`);
                });
            }
            $('#dtl-list-pnglmn').html(elem);
        });

        dtl_req.fail((j, t, e) => {
            $.dialog({
                title: 'Error',
                content: `Terjadi kesalahan: ${e}`,
                type: 'red',
            });
        });
    });
</script>