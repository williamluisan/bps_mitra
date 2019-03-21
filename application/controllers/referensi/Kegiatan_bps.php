<?php

    defined('BASEPATH') or exit('Direct access script is not allowed');
    
    class Kegiatan_bps extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $data['title'] = 'Kegiatan BPS';
            $data['view_file_path'] = 'referensi/kegiatan_bps.php';
            $this->load->view('defaults/layout', $data);
            $this->load->view('referensi/kegiatan_bps.js.php');
        }
    }