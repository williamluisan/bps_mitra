<?php

    function pre($p)
    {

        echo "<pre>";
        print_r($p);
        exit();

    }

    /** Alerts */

    function alert($type, $text)
    {

        $string = '';

        switch ($type) {

            case 'berhasil'  : $string = "
                                <div class='alert alert-info alert-dismissible'>
                                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                  <h5><i class='icon fa fa-check'></i> ".$text."</h5>
                                </div>
                               "; break;
            case 'mengubah'  : $string = "
                                <div class='alert alert-warning alert-dismissible'>
                                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                  <h5><i class='icon fa fa-check'></i> ".$text."</h5>
                                </div>
                                "; break;
            case 'menghapus' : $string = "
                                <div class='alert alert-danger alert-dismissible'>
                                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                  <h5><i class='icon fa fa-trash'></i> ".$text."</h5>
                                </div>
                                "; break;
            case 'gagal'     : $string = "
                                <div class='alert alert-danger alert-dismissible'>
                                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                  <h5><i class='icon fa fa-ban'></i> ".$text."</h5>
                                </div>
                                "; break;

        }

        return $string;

    }


    //convert view format tanggal
    function format_tanggal($tanggal){
      $originalDate = $tanggal;
      $format = date("d-m-Y", strtotime($originalDate));
      return $format;
    }


    /**
     * Reverse tanggal dengan input 'month' berada di tengah string
     * contoh: dd-mm-yyyy, yyyy-mm-dd, dd/mm/yyyy, yyyy/mm/dd
     *
     * @param       string  $date          Input date
     * @param       string  $delimiter_in  delimiter pada tanggal inputan
     * @param       string  $delimiter_out delimiter yang diinginkan untuk output
     * @return      string
     */
    function reverse_date($date, $delimiter_in, $delimiter_out)
    {
      $date = explode($delimiter_in, $date);
      $date = "$date[2].$delimiter_out.$date[1].$delimiter_out.$date[0]";

      return $date;
    }
