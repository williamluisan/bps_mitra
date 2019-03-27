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
        });
    }

    //--insert modal
    $('.btn_tmbh').click(() => {  
        ref.get_ref_pddk('<?php echo base_url();?>').done((d, t, j) => {
            let elem = $();
            $.each(d, (key, val) => {
                elem = elem.add(`<option value="${val.id}">${val.pddk_nama}</option>`);
            });
            $('#in-sel-pddk').append(elem);
        });

        ref.get_ref_keg_bps('<?php echo base_url();?>').done((d, t, j) => {
            let elem = $();
            $.each(d, (key, val) => {
                elem = elem.add(`<option value="${val.id}">${val.keg_nama}</option>`);
            });
            $('#in-sel-penglmn').append(elem);
        });
    })

    //-- insert request-
    $('.btn_save_tmbh').click(function(){
        var ins_req = request(
            '<?php echo base_url();?>data_mitra/Data_mitra/insert',
            formData('frm-tmbh')
        );

        ins_req.done(function(d, t, j){
            console.log(d);
        });

        ins_req.fail(function(j, t, e){
            alert('Terjadi kesalahan');
            alert(e);
        });
    });

    //-- edit modal

    //-- edit request

    //-- delete request

    //-- detail request
</script>