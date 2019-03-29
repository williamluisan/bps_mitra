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
            }, 1000);
        });
    }

    //--insert modal
    $('.btn_tmbh').click(() => {  
        ref.get_ref_pddk('<?php echo base_url();?>').done((d, t, j) => {
            let elem = $();
            $.each(d, (key, val) => {
                elem = elem.add(`<option value="${val.id}">${val.pddk_nama}</option>`);
            });
            $('#in-sel-pddk').html(elem);
        });

        ref.get_ref_keg_bps('<?php echo base_url();?>').done((d, t, j) => {
            let elem = $();
            $.each(d, (key, val) => {
                elem = elem.add(`<option value="${val.id}">${val.keg_nama}</option>`);
            });
            $('#in-sel-penglmn').html(elem);
        });
    })

    //-- insert request-
    $('.btn_save_tmbh').click(function(){
        var ins_req = request(
            '<?php echo base_url();?>data_mitra/Data_mitra/insert',
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
    $('.btn_del').click(function() {
        var id = $(this).data('id');
        var nama = $(this).data('nama');

        var del_req = $.ajax({
            url: '<?php echo base_url();?>data_mitra/Data_mitra/delete',
            method: 'POST',
            data: {id: id, nama: nama},
            dataType: 'JSON'            
        }).always(function() {
            $('.modal').hide();
            setTimeout(function() {
                window.location.reload();
            }, 1000);
        });

        del_req.done((d, t, j) => {
            alert_js(d.status, d.deskripsi);
        });

        del_req.fail((j, t, e) => {
            alert('Terjadi kesalahan');
            alert(e);
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
            $('#dtl-lbl-nama').text(d.data_nama);
            $('#dtl-lbl-nomitra').text(d.data_no_mitra);
            $('#dtl-lbl-nohp').text(d.data_no_hp);
            $('#dtl-p-alamat').text(d.data_alamat);
        });

        dtl_req.fail((j, t, e) => {
            alert('Terjadi kesalahan');
            alert(e);
        });
    });
</script>