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
            $data['data_mitra'] = $this->Data_mitra_model->get_all();
            
            $data['title'] = 'Data Mitra'; 
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
            $result = $this->Data_mitra_model->edit();

            echo $result;
        }


        public function delete()
        {
            $result = $this->Data_mitra_model->delete();

            echo $result;
        }


        public function detail()
        {
            $result = $this->Data_mitra_model->detail();

            echo $result;
        }
    }