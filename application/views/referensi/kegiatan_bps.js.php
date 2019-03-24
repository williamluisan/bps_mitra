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
            }, 1000);
        });
    }

    //-- insert request
    $('.btn_save_tambah').click(function(){
        var ins_req = request(
            '<?php echo base_url();?>referensi/kegiatan_bps/insert',
            formData('frm-tmbh')
        );

        ins_req.done(function(d, t, j){
            alert_js(d.status, d.deskripsi);
        });

        ins_req.fail(function(j, t, e){
            alert('Terjadi kesalahan');
            alert(e);
        });
    });

    //-- edit modal

    //-- edit request

    //-- delete request
    $('.btn_hps').click(function(){
        var id = $(this).data('id');
        var nama = $(this).data('nama');
        var del_req = $.ajax({
            beforeSend: function(){
                if ( ! window.confirm(`Yakin akan menghapus kegiatan ${nama}?`)) {
                    return false;
                }
            },
            url: '<?php echo base_url();?>referensi/Kegiatan_bps/delete',
            method: 'POST',
            data: {id: id, nama: nama},
            dataType: 'JSON'
        }).always(function (){
            setTimeout(function() {
                window.location.reload();
            }, 1000);
        });

        del_req.done(function(d, j, t){
            alert_js(d.status, d.deskripsi);
        });
    });
</script>