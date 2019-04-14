<?php

    defined('BASEPATH') or exit('Direct access path is not allowed');

    class Error_404 extends CI_Controller 
    {
        public function index()
        {
            $this->load->view('errors/html/custom_error_404');
        }
    }