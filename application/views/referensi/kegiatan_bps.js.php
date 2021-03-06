<script>
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
            }, 1500);
        });
    }

    //-- insert request
    $('.btn_save_tambah').click(function(){
        var ins_req = request(
            '<?php echo base_url();?>referensi_menu/kegiatan_bps/insert',
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
        var id = $(this).data('id');

        var ed_mdl_req = $.ajax({
            url: "<?php echo base_url();?>referensi_menu/kegiatan_bps/get_spesifik",
            method: 'POST',
            data: {id: id},
            dataType: 'JSON'
        });

        ed_mdl_req.done((d, t, j) => {
            $('#ed-id').val(d.data.id);
            $('#ed-nama-keg').val(d.data.keg_nama);
            $('#ed-desk').val(d.data.keg_deskripsi);
            $('#ed-tglmlai').val(d.data.keg_tgl_mulai);
            $('#ed-tglakr').val(d.data.keg_tgl_selesai);
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
            '<?php echo base_url();?>referensi_menu/kegiatan_bps/edit',
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

    //-- delete request
    $('.btn_hps').click(function(){
        var id = $(this).data('id');
        var nama = $(this).data('nama');

        if ( ! window.confirm(`Yakin akan menghapus kegiatan ${nama}?`)) {
            return false;
        }

        var del_req = $.ajax({
            url: '<?php echo base_url();?>referensi_menu/Kegiatan_bps/delete',
            method: 'POST',
            data: {id: id, nama: nama},
            dataType: 'JSON'
        }).always(function (){
            setTimeout(function() {
                window.location.reload();
            }, 2000);
        });

        del_req.done(function(d, j, t){
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
</script>