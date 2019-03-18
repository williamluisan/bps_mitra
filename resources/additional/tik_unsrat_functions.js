    
    /**
    *   file javascript berisi fungsi-fungsi umum yang diperlukan TIK UNSRAT 
    * 
    *   @author : William Luisan / LumbaLunba
    */


    $(document).ready(function() {
        // auto managing navbar
        var url = window.location.href;

        $('.sidebar-menu li').each(function() {
            if ($(this).children('a').attr('href') == url) {
                $(this).addClass('active');
                $(this).parents('li.treeview').addClass('active');
            }
        });

        // auto managing breadcrumb
        var i = 0;
        var menus = [];
        var links = [];

        $('.sidebar-menu li.active').each(function() {
            menus[i] = $(this).contents().children('span').text();
            links[i] = $(this).children('a').attr('href');
            $('ol.breadcrumb').append('<li><a href="'+links[i]+'">'+menus[i]+'</a></li>');
            i++;
        });

        $('.content-header').append('<h1>'+menus[menus.length-1]+'</h1>');
    });


    /**
    *   mengatur navigasi/menu menjadi 'active' secara manual yang tidak terdeteksi otomatis
    *
    *   @param nav_name       nama navigasi/menu
    *
    */
    function navbar_dynamic(nav_name) {
        // managing navbar
        var url = window.location.href;
        $('.sidebar-menu li').each(function() {
          if ($(this).contents().children('span').text() == nav_name) {
              $(this).addClass('active');
          }
        });
    }


    /**
    *   fungsi untuk membuat style alert
    *
    *   @param status       status error sesuai dengan switch
    *   @param txt          pesan error  
    *
    */
    function alert_js(status, txt) {
        var style = '', icon = '';

        switch(status) {
            case 'berhasil'  :  style = 'alert-info'; icon = 'fa-check'; break;
            case 'mengubah'  :  style = 'alert-warning'; icon = 'fa-check'; break;
            case 'menghapus' :  style = 'alert-danger'; icon = 'fa-trash'; break;
            case 'gagal'     :  style = 'alert-danger'; icon = 'fa-ban'; break;
        }

        $('.alert_js--text').remove();
        $('#alert_js').append("<div class='alert alert-dismissible'><h5><i class='icon fa'></i></h5></div>");
        $('#alert_js .alert').addClass(style);
        $('#alert_js .icon').addClass(icon);
        $('#alert_js h5').append('<span class="alert_js--text">'+txt+'</span>');
        $('.alert').fadeOut(4000);
    }


    /**
    *   fungsi untuk membuat style form error (warna merah)
    *
    *   @param id       id dari element
    *   @param status   status (flag) jika form error atau tidak  
    * 
    *   @return
    */
    function form_error(id, status)
    {
      if (status == true) {
          $('#'+id).parents('.form-group').addClass('has-error');
      } else {            
          $('#'+id).parents('.form-group').removeClass('has-error');
      }
    }


    /**
    *   fungsi untuk konversi input date
    *   ke format mysql
    *
    *   @param input   masukan date dengan format 1 : dd/mm/yyyy  
    * 
    *   @return format date mysql
    */

    // ubah format date dari dd/mm/yyyy to yyyy-mm-dd
    function tik_date(input, delimiter = '-', split = '/') 
    {
        if (input === null) {
            return input;
        } else {
             //-- memecah input menjadi array
        input = input.split(split);
        //-- membuat ke format date mysql
        input = input[2]+delimiter+input[1]+delimiter+input[0];

        return input;
        }
    }


    /**
    *   fungsi untuk menghilangkan karakter selain angka pada input
    *
    *   @param input   string | masukan terdiri dari angka dan selain angka
    * 
    *   @return        string | value dengan isi yang hanya berupa angka
    */
    function tik_alpha_numeric(input) 
    {
        input = input.replace(/[^0-9]/g, '');

        return input;
    }


    /**
    *
    *   (beta)
    *   fungsi ini masih beta, sang programmer kurang waktu untuk memikirkan banyak dalam hal ini 
    *   hanya terbatas pada 1 karakter tambahan saja
    * 
    *   fungsi untuk menambahkan karakter apa saja (1 karakter saja)
    *   pada posisi yang kita inginkan
    *
    *   @param id       string | id element
    *   @param input    string | masukan dari form input
    *   @param position int    | posisi dimana karakter akan ditambahkan
    *   @param char_add char   | karakter yang akan ditambahkan
    * 
    **/
    function tik_add_char(id, input, position, char_add)
    {
        if (char_add.length > 1) {
            console.log("Sorry, this function is still beta and only limited to add one character");
            
            return false;
        }
        
        if (input.length >= position) {

            //-- mendeteksi jika user akan melakukan penghapusan
            if (input[position-1] == char_add) {
                $('#'+id).val('');

                return false;
            }

            //-- memotong karakter dari awal 
            //   sampai pada posisi yang akan diletakkan karakter baru
            slice_front = input.slice(0, position);

            //-- memotong karakter dari posisi yang akan diletakkan karakter baru
            //   sampai pada akhir karakter
            slice_back  = input.slice(position, input.length);

            //-- mengantisipasi penambahan karakter yang ditambah secara berulang-ulang
            if (input[position] != char_add) {
                input = slice_front+char_add+slice_back;
            }
        }
        
        $('#'+id).val(input);
    }
