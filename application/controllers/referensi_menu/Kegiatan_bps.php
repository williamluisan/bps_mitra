<?php

    defined('BASEPATH') or exit('Direct access script is not allowed');
    
    class Kegiatan_bps extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Kegiatan_bps_model');
        }


        public function index()
        {
            $data['list_kegiatan'] = json_decode($this->Kegiatan_bps_model->get_all(), TRUE);

            $data['title'] = 'Kegiatan BPS';
            $data['view_file_path'] = 'referensi/kegiatan_bps.php';
            $this->load->view('defaults/layout', $data);
            $this->load->view('referensi/kegiatan_bps.js.php');
        }


        public function insert()
        {
            $result = $this->Kegiatan_bps_model->insert();

            echo $result;
        }


        public function edit()
        {

        }


        public function delete()
        {
            $result = $this->Kegiatan_bps_model->delete();

            echo $result;
        }
        

        public function get_spesifik()
        {
            $result = $this->Kegiatan_bps_model->get_spesifik();

            echo $result;
        }
    }