
    /**
    *   file javascript berisi kelas-kelas javascript yang diperlukan TIK UNSRAT 
    * 
    *   @author : William Luisan / LumbaLunba
    */


    /**
    *   hapus kelas ini ketika anda membaca ini kembali
    *   dan kelas ini sudah tidak menghasilkan error jika
    *   akan dihapus
    *
    */
    // $('.btn_mdl_reset').click(function(){
    //     $('.modal').on('hidden.bs.modal', function(){
    //         $(this).find('form')[0].reset();
    //     });
    // });


    /**
    *   tambahkan kelas ini "form_prev_refresh" pada setiap form
    * 
    *   berfungsi untuk melakukan reset modal setelah submit
    *   dan mencegah page ter-reload setelah submit
    *
    */
    $('.form_prev_refresh').on('submit', function(event){
        $('.modal').modal('hide');
        $('.modal').on('hidden.bs.modal', function(){
            $(this).find('form')[0].reset();
        });

        //-- return false untuk mencegah reload setelah submit <button type="submit">
        return false;
    });


    /**
    *   kelas untuk mengatur input hanya angka
    *
    */
    $('.tik_num').on('input', function(){
        var id = $(this).attr('id');

        // jika ada input yang bukan angka
        if ($(this).val().match(/^\d+$/) == null) {
            $(this).val('');
            alert_js('gagal', 'Input hanya terdiri dari angka');
            form_error(id, true);
        } else {
            form_error(id, false);
        }
    });   


    /**
     *   fungsi untuk mengecek format email
     * 
     */
    $('.tik_email').on('change', function(){
        var id          = $(this).attr('id');
        var email_regex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;

        if (email_regex.test($(this).val()) == false) {
            alert_js('gagal', 'Bukan format email');
            form_error(id, true);
            $(this).val('');
        } else {
            form_error(id, false);
        }
    });


    /**
    *   kelas untuk mengatur rupiah pada input
    *
    */
    $('.tik_rupiah').keyup(function(){
        var val    = $(this).val();

        // mengatur agar inputan hanya bisa angka dan string "Rp"
        if(val.indexOf("Rp.") == -1) {
            $(this).val('');
            alert_js('gagal', 'Masukan hanya berupa angka');
        }

        var split  = val.replace(/[^A-za-z0-9]/g, '').split('').reverse().join('');
        var match  = split.match(/\d{1,3}/g);
        var rupiah = match.join(",").split('').reverse().join('');
        $(this).val('Rp. '+rupiah);
    });