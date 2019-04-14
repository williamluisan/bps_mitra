<?php

    defined('BASEPATH') or exit('Direct access path is not allowed');

    class Beranda extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $data['title'] = 'Beranda';
            $data['view_file_path'] = 'beranda.php';
            $this->load->view('defaults/layout', $data);
        }
    }