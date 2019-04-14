<?php

    defined('BASEPATH') or exit('Direct access path is not allowed');

    class Referensi extends MY_Controller 
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Referensi_model');
        }

        public function get_pddk()
        {
            $result = $this->Referensi_model->get_pddk_terakhir();

            echo json_encode($result);
        }

        public function get_keg_bps()
        {
            $result = $this->Referensi_model->get_keg_bps();

            echo json_encode($result);
        }
    }