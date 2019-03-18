<?php

    defined('BASEPATH') or exit('Direct access path is not allowed');

    class Login extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
        }        

        public function index()
        {
            $this->load->view('login');
        }
    }