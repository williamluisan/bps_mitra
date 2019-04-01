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
        //--mengambil referensi pendidikan
        ref.get_ref_pddk('<?php echo base_url();?>').done((d, t, j) => {
            let elem = $();
            $.each(d, (key, val) => {
                elem = elem.add(`<option value="${val.id}">${val.pddk_nama}</option>`);
            });
            $('#in-sel-pddk').html(elem);
        });

        //-- mengambil referensi kegiatan bps
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
            $('#ed-id').val(d.id);
            $('#ed-nama').val(d.data_nama);
            $('#ed-ktp').val(d.data_no_ktp);
            $('#ed-alamat').val(d.data_alamat);
            $('#ed-sel-pddktrkhr').val(d.data_id_pddk_trkhr);
            $('#ed-no-mitra').val(d.data_no_mitra);
            $('#ed-pasfoto-show').attr('src', '<?php echo $this->config->item('pas_foto')['upload_path']?>/'+d.data_pas_foto);
            $('#ed-nohp').val(d.data_no_hp);
        });

        ed_mdl_req.fail((j, t, e) => {
            alert('Terjadi kesalahan');
            alert(e);
        });
    });
    
    //-- edit request
    $('.btn_save_edit').click(function(){
        var ed_req = request(
            '<?php echo base_url();?>data_mitra/Data_mitra/edit',
            formData('frm-edit')
        );

        ed_req.done((d, t, j) => {
            console.log(d);
            alert_js(d.status, d.deskripsi);
        });

        ed_req.fail((j, t, e) => {
            alert('Terjadi kesalahan');
            alert(e);
        });
    });

    //-- pengalaman modal
    $('.btn_pnglmn').click(function() {
        //-- mengambil referensi kegiatan
        ref.get_ref_keg_bps('<?php echo base_url();?>').done((d, t, j) => {
            let elem = $();
            $.each(d, (key, val) => {
                elem = elem.add(`<option value="${val.id}">${val.keg_nama}</option>`);
            });
            $('#in-sel-keg').html(elem);
        });

        var id = $(this).data('id');
        $('#pnglmn-id').val(id);
    });

    //-- pengalaman request
    $('.btn_tmbh_pnglmn').click(function(){
        var pnglmn_req = request(
            '<?php echo base_url();?>data_mitra/Data_mitra/tambah_pengalaman',
            formData('frm-tmbh-pnglmn')
        );

        pnglmn_req.done((d, t, j) => {
            console.log(d);
            alert_js(d.status, d.deskripsi);
        });

        pnglmn_req.fail((j, t, e) => {
            alert('Terjadi kesalahan');
            alert(e);
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