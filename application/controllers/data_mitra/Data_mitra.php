<?php

    defined('BASEPATH') or exit('Direct access script is not allowed');

    class Data_mitra extends MY_Controller 
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
            $this->form_validation->set_rules($this->config->item('data_mitra_tambah'));

            if ($this->form_validation->run() == FALSE):
                $status = array(
                    'status'    => 'gagal',
                    'deskripsi' => $this->form_validation->error_string(),
                );

                echo json_encode($status);

                return 0;   
            endif;

            $result = $this->Data_mitra_model->insert();

            echo $result;
        }

        
        public function edit()
        {
            $this->form_validation->set_rules($this->config->item('data_mitra_edit'));

            if ($this->form_validation->run() == FALSE):
                $status = array(
                    'status'    => 'gagal',
                    'deskripsi' => $this->form_validation->error_string(),
                );

                echo json_encode($status);

                return 0;   
            endif;

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


        public function get_pengalaman()
        {
            $result = $this->Data_mitra_model->get_pengalaman();

            echo json_encode($result);
        }

        
        public function tambah_pengalaman()
        {
            $result = $this->Data_mitra_model->tambah_pengalaman();

            echo $result;
        }


        public function hapus_pengalaman()
        {
            $result = $this->Data_mitra_model->hapus_pengalaman();

            echo $result;
        }
    }