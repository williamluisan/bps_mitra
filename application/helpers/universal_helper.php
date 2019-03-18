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
