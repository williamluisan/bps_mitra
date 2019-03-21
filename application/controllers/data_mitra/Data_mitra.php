<?php

    defined('BASEPATH') or exit('Direct access script is not allowed');

    class Data_mitra extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Data_mitra_model');
        }


        public function index()
        {
            $kegiatan_nama = 'Sensus Penduduk 2018';

            $data['title']  = 'Data Mitra - <label class="label label-lg label-warning">';
            $data['title'] .= $kegiatan_nama;
            $data['title'] .= '</label>'; 
            $data['view_file_path'] = 'data_mitra/data_mitra_index.php';
            $this->load->view('defaults/layout', $data);
            $this->load->view('data_mitra/data_mitra_index.js.php');
        }

        
        public function insert()
        {
            $result = $this->Data_mitra_model->insert();

            echo $result;
        }

        
        public function edit()
        {
            
        }


        public function delete()
        {
            
        }


        public function detail()
        {

        }
    }