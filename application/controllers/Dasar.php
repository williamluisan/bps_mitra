<?php

    defined('BASEPATH') or exit('Direct access script is not allowed');

    class Dasar extends CI_Controller
    {

        function __construct()
        {

            parent::__construct();

        }

        public function index()
        {

            $data['title'] = 'Blank Fix';
            $data['view_file_path'] = 'blank_fix.php';
            $this->load->view('defaults/layout', $data);

        }

    }
